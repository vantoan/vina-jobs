<?php

namespace app\models;

use app\models\Base\TnArticleCategory;
use Yii;

class ArticleCategory extends TnArticleCategory
{

	static public function categoriesMenus($is_category = true, $parentid = 0, $space = "", $trees = []){
		if(!$trees) {
			$trees = [];
		}
		$sql = "SELECT * FROM tn_article_category WHERE (parent_id = {$parentid}) order by sorted asc";
		if(Yii::$app->request->getQueryParam('id') && $is_category){
			$id = Yii::$app->request->getQueryParam('id');
			if($id > 0){
				$sql = "SELECT * FROM tn_article_category WHERE (parent_id = {$parentid} AND id != {$id}) order by sorted asc";
			}
		}
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		foreach($data as $k => $rs){
			$trees[] = array(
				'id' 	            => $rs['id'],
				'name'	            =>$space.$rs['name'],
				'sorted'			=>$rs['sorted'],
				'parent_id'			=>$rs['parent_id'],
			);
			$trees = self::categoriesMenus($is_category, $rs['id'], $space.' - ', $trees);
		}
		return $trees;
	}
}
