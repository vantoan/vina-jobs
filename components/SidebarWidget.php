<?php
namespace app\components;
use app\models\Article;
use app\models\News;
use yii\base\Widget;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 6/12/2016
 * Time: 8:20 PM
 */
class SidebarWidget extends Widget
{
	public  $setView;
	public function init()
	{
		parent::init();
	}

	public function run()
	{
		$project = Article::getArticle('du-an', 5);
		$lastNews = News::getLastNews(3);
		return $this->render('sidebar/sidebar', [
			'lastNews' => $lastNews,
			'project' => $project
		]);
	}
}