<?php

namespace app\models;

use app\components\tona\Cons;
use app\models\Base\TnNews;
use Yii;

class News extends TnNews
{
	/**
	 * @param int $limit
	 * @param int $exp
	 * @return array|\yii\db\ActiveRecord[]
	 */
	public static function getLastNews($limit = 5, $exp = 0){
		$news_taco = 'tin-tuc-ve-xay-dung';
		$cate_id = NewsCategory::find()->where(['slug' => $news_taco])->one();
		if($cate_id){
			$cate_id = $cate_id->id;
		}else{
			$cate_id = 0;
		}
		return News::find()
			->where('id != :id', ['id' => $exp])
			->andWhere(['news_category_id' => $cate_id])
			->andWhere('status = :status', ['status' => Cons::STATUS_ACTIVE])
			->limit($limit)
			->orderBy('id DESC')
			->asArray()->all();
	}

	/**
	 * @param $slug
	 * @return array|null|\yii\db\ActiveRecord
	 */
	public static function getNewsDetail($slug){
		return News::find()->where(['slug' => $slug])->asArray()->one();
	}
}
