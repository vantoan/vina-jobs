<?php

namespace app\models;

use app\components\tona\Cons;
use app\models\Base\TnCacheImg;
use Carbon\Carbon;
use Yii;

class CacheImg extends TnCacheImg
{
	const OBJECT_TYPE_CAROUSEL = 'carousel_thum';
	const OBJECT_TYPE_PROJECT_THUM = 'project_thum';
	const OBJECT_TYPE_PROJECT_THUM_INDEX = 'project_thum_index';
	const OBJECT_TYPE_ARTICLE_THUM = 'artitcle_thum';
	const OBJECT_TYPE_ARTICLE_DETAIL = 'artitcle_detail';

	const OBJECT_TYPE_NEWS_LIST = 'news_list';
	const OBJECT_TYPE_NEWS_DETAIL = 'news_detail';
	const OBJECT_TYPE_NEWS_SIDEBAR = 'news_sidebar';
	public $all = [];

	/**
	 * @param null $model
	 * @return CacheImg|static
	 */
	public static function instants($model = null)
	{
		if ($model instanceof static) {
			return clone $model;
		}
		return new static;
	}

	/**
	 * @return array|\yii\db\ActiveRecord[]
	 */
	public function getAll($object_type = self::OBJECT_TYPE_CAROUSEL, $despite = false)
	{
		if (!isset($this->all[$object_type]) or $despite == true) {
			$this->all[$object_type] = self::find()->where(['object_type' => $object_type])->asArray()->all();
		}
		return $this->all[$object_type];
	}

	/**
	 * @param string $object_type
	 * @param $object_id
	 * @param $path
	 * @param $size
	 * @return bool|mixed
	 */
	public function getCache($object_type, $object_id, $size){
		$list = $this->getAll($object_type);
		if($list){
			foreach($list as $key => $value){
				if($value['object_type'] == $object_type && $value['object_id'] == $object_id && $value['img_size'] == $size){
					return $value['img_path'];
				}
			}
		}
		return false;
	}

	/**
	 * @param $object_type
	 * @param $object_id
	 * @param $img_path
	 * @param $size
	 */
	public function saveCache($object_type, $object_id, $img_path, $size){
		$model = new self();
		$model->object_type = $object_type;
		$model->object_id = $object_id;
		$model->img_size = $size;
		$model->img_path = $img_path;
		$model->created_at = Carbon::now()->format(Cons::SQL_DATE_TIME);
		$model->save();
	}

	/**
	 * @param $object_type
	 * @param $object_id
	 * @param $size
	 * @throws \Exception
	 */
	public function removeArray($object_type, $object_id, $size){
		$model = self::find()->where(['object_type' => $object_type, 'object_id' => $object_id, 'img_size' => $size])->one()->delete();
		if($model){
			self::getAll($object_id, true);
		}
	}

	/**
	 * @throws \yii\db\Exception
	 */
	public function clearCache(){
		$listAll = self::find()->all();
		if($listAll){
			foreach($listAll as $value){
				@unlink(Yii::$app->basePath.$value->img_path);
			}
		}
		Yii::$app->db->createCommand()->truncateTable('tn_cache_img')->execute();
	}
}
