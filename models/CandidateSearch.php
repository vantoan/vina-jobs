<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Candidate;

/**
 * CandidateSearch represents the model behind the search form about `app\models\Candidate`.
 */
class CandidateSearch extends Candidate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'job_category_id', 'location', 'created_by', 'updated_by', 'approved_by', 'view', 'sorted', 'star', 'status'], 'integer'],
            [['title', 'skill', 'video', 'resume_content', 'resume_file', 'social_network', 'experience', 'created_at', 'updated_at', 'approved_at'], 'safe'],
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
    public function search($params)
    {
        $query = Candidate::find();

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
            'user_id' => $this->user_id,
            'job_category_id' => $this->job_category_id,
            'location' => $this->location,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
            'approved_by' => $this->approved_by,
            'approved_at' => $this->approved_at,
            'view' => $this->view,
            'sorted' => $this->sorted,
            'star' => $this->star,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'skill', $this->skill])
            ->andFilterWhere(['like', 'video', $this->video])
            ->andFilterWhere(['like', 'resume_content', $this->resume_content])
            ->andFilterWhere(['like', 'resume_file', $this->resume_file])
            ->andFilterWhere(['like', 'social_network', $this->social_network])
            ->andFilterWhere(['like', 'experience', $this->experience]);

        return $dataProvider;
    }
}
