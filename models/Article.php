<?php

namespace app\models;

use app\models\Base\TnArticle;
use Yii;
use yii\db\Query;

class Article extends TnArticle
{

	/**
	 * @param $id
	 * @return string
	 */
	public static function getCategoryName($id){
		return ArticleCategory::findOne($id)->name;
	}

	/**
	 * @param $slug
	 * @param int $limit
	 * @return array
	 */
	public static function getArticle($slug, $limit = 4){
		$query = new Query();
		$query->select('tn_article.*')
			->from('tn_article')
			->join('INNER JOIN', 'tn_article_category', 'tn_article.category_id = tn_article_category.id')
			->where(['tn_article_category.slug' => $slug])
			->orderBy('id DESC, tn_article.sorted ASC')->limit($limit);
		return $result = $query->all();
	}

	/**
	 * @param $slug
	 * @return array|null|\yii\db\ActiveRecord
	 */
	public static function getArticleBySlug($slug){
		return self::find()->where(['slug' => $slug])->asArray()->one();
	}
}
