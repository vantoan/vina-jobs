<?php

namespace app\models;

use app\models\Base\TnPage;
use Yii;

class Page extends TnPage
{
	/**
	 * @param $slug
	 * @return array|null|\yii\db\ActiveRecord
	 */
	public static function getPage($slug){
		$page = self::find()->where(['slug' => $slug])->one();
		$page->view = intval($page->view) + 1;
		$page->save();
		return $page;
	}

	public static function getPageByParentId($id, $return = 'Root'){
		if($id){
			return self::find()->where(['id' => $id])->one()->name;
		}else{
			return $return;
		}
	}
	/**
	 * @param bool|true $is_category
	 * @param int $parentid
	 * @param string $space
	 * @param array $trees
	 * @return array
	 */
	public static function categoriesMenus($is_category = true, $parentid = 0, $space = "", $trees = []){
		if(!$trees) {
			$trees = [];
		}
		$sql = "SELECT * FROM tn_page WHERE (parent_id = {$parentid})";
		if(Yii::$app->request->getQueryParam('id')){
			$id = Yii::$app->request->getQueryParam('id');
			if($id > 0){
				$sql = "SELECT * FROM tn_page WHERE (parent_id = {$parentid} AND id != {$id})";
			}
		}
		$data = Yii::$app->db->createCommand($sql)->queryAll();
		foreach($data as $k => $rs){
			$trees[] = array(
				'id' 	            => $rs['id'],
				'name'	            =>$space.$rs['name'],
				'parent_id'			=>$rs['parent_id'],
			);
			$trees = self::categoriesMenus($is_category, $rs['id'], $space.' - ', $trees);
		}
		return $trees;
	}
}
