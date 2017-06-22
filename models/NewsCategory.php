<?php

namespace app\models;

use app\models\Base\TnNewsCategory;
use Yii;

class NewsCategory extends TnNewsCategory
{

	/**
	 * @param $id
	 * @return string
	 */
	public static function getCategoryName($id){
		if(intval($id) == 0){
			return '--';
		}
		return self::findOne($id)->name;
	}

	static public function categoriesMenus($parentid = 0, $space = "", $trees = array()){
		if(!$trees) {
			$trees = [];
		}
		if($parentid == 0){
			$sql = "parent_id = $parentid OR parent_id IS NULL";
		}else{
			$sql = "parent_id = $parentid";
		}

		$sql = "SELECT * FROM tn_news_category WHERE $sql AND status = 1 order by sorted asc";
		if(Yii::$app->request->getQueryParam('id')){
			$id = Yii::$app->request->getQueryParam('id');
			if($id > 0){
				$sql = "SELECT * FROM tn_news_category WHERE (parent_id = {$parentid} AND id != {$id}) AND status = 1 order by sorted asc";
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
			$trees = self::categoriesMenus($rs['id'], $space.' - ', $trees);
		}
		return $trees;
	}
}
