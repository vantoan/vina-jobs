<?php

namespace app\models\Search;

use app\components\tona\CustomPagination;
use Carbon\Carbon;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\SpendManagement;
use yii\data\Pagination;
use yii\db\Query;
use app\components\tona\Datetime;
use app\components\tona\Helper;
use yii\widgets\LinkPager;

/**
 * SearchSpendManagement represents the model behind the search form about `app\models\SpendManagement`.
 */
class SearchSpendManagement extends SpendManagement
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type', 'type_of_expenditure', 'created_by', 'updated_by', 'status', 'is_deleted'], 'integer'],
            [['name', 'description', 'time', 'created_at', 'updated_at'], 'safe'],
            [['money'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params, $sql_from, $sql_to)
    {
        $query = SpendManagement::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'type' => $this->type,
            'type_of_expenditure' => $this->type_of_expenditure,
            'money' => $this->money,
            'time' => $this->time,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'status' => $this->status,
            'is_deleted' => $this->is_deleted,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description]);
        if($sql_from){
            $query->andWhere("time >= '$sql_from'");
        }

        if($sql_to){
            $query->andWhere("time <= '$sql_to'");
        }
        return $dataProvider;
    }

    public function searchAjax($dataForms)
    {
        if(!$dataForms){
            return [];
        }
        $dataForm = $dataForms['SearchSpendManagement'];
        $from = isset($dataForm['from_time']) ? $dataForm['from_time'] : '';
        $to = isset($dataForm['to_time']) ? $dataForm['to_time'] : '';
        $type = isset($dataForm['to_time']) ? intval($dataForm['type']) : 0;

        $sql_from = false;
        $sql_to = false;
        if ($from) {
            $sql_from = Carbon::createFromFormat(Datetime::INPUT_DMY, $from)->startOfDay()->format(Datetime::SQL_DATETIME);
        }
        if ($to) {
            $sql_to = Carbon::createFromFormat(Datetime::INPUT_DMY, $to)->endOfDay()->format(Datetime::SQL_DATETIME);
        }

        $data = [];
        $query = new Query();
        $query->select('spend_mn.*, spend_mn_type.name AS type_name')
            ->from('tn_spend_management AS spend_mn')
            ->join('join', 'tn_spend_management_type AS spend_mn_type', 'spend_mn_type.id = spend_mn.type')
            ->where("spend_mn.time BETWEEN '$sql_from' AND '$sql_to'")
            ->andWhere('spend_mn.is_deleted = 0');
        if($type > 0){
            $query->andWhere('spend_mn.type = :type', ['type' => $type]);
        }
        $query->orderBy('spend_mn.time DESC');

        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
//        $pages->setPage(2);
        $pages->setPageSize(5000000);
        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $thu = 0;
        $chi = 0;
        if($models){
            foreach($models as $val){
                if($val['type_of_expenditure'] == SpendManagement::TYPE_EXPORT){
                    $chi += $val['money'];
                }
                if($val['type_of_expenditure'] == SpendManagement::TYPE_IMPORT){
                    $thu += $val['money'];
                }
                $data[] =[
                    'id' => $val['id'],
                    'type_of_expenditure' => SearchSpendManagement::textType($val['type_of_expenditure']),
                    'name' => $val['name'],
                    'description' => $val['description'],
                    'money' => Helper::formatNumber($val['money']),
                    'time' => $val['time'],
                    'created_by' => $val['created_by'],
                    'status' => SearchSpendManagement::textStatus($val['status']),
                    'type_name' => $val['type_name'],
                ];
            }
        }
        $result['data'] = $data;
        $result['pages'] = $pages;
        $result['statistical'] = ['thu' => Helper::formatNumber($thu).'VNĐ', 'chi' => Helper::formatNumber($chi).'VNĐ'];

        return $result;
    }

    public static function textStatus($status){
        if($status == 1){
            return '<i class="fa fa-check-square-o"></i>';
        }else{
            return '<i class="fa fa-close"></i>';
        }
    }
    public static function textType($type_of_expenditure){
        if($type_of_expenditure == 1){
            return '<i class="fa fa-minus"></i>';
        }else{
            return '<i class="fa fa-plus"></i>';
        }
    }
}
