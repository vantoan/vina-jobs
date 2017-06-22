<?php

namespace app\models;

use app\models\Base\TnCarousel;
use Yii;
use yii\db\Query;

class Carousel extends TnCarousel
{
	/**
	 * @param string $slug
	 */
	public static function getBySlug($slug = ''){
		$query = new Query();
		$query->select([])
			->from('tn_carousel')
			->join('INNER JOIN', 'tn_carousel_items', 'tn_carousel.id = tn_carousel_items.carousel_id')
			->where(['tn_carousel.slug' => $slug])
			->orderBy('tn_carousel_items.sorted ASC');
		return $result = $query->all();
	}
}
