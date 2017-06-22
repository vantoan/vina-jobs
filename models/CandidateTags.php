<?php

namespace app\models;

use app\models\Base\TnCandidateTags;
use Yii;
use yii\db\Query;

class CandidateTags extends TnCandidateTags
{
	/**
	 * @param $cancidate_id
	 * @param $tags
	 */
	public static function saveCandidateTags($cancidate_id, $tags, $isNew = 0){
		if($isNew != 0){
			CandidateTags::deleteAll('candidate_id = :candidate_id', ['candidate_id' => $cancidate_id]);
		}
		foreach($tags as $val){
			$tag = Tags::find()->where(['slug' => $val])->one();
			if(!$tag){
				$tag = new Tags();
				$tag->slug = $val;
				$tag->save();
			}

			$can = new CandidateTags();
			$can->candidate_id = $cancidate_id;
			$can->tag_id = $tag->id;
			$can->save();
		}
	}

	/**
	 * @param $id
	 * @return array
	 */
	public static function getTagsByCandidateId($id){
		$query = new Query();
		$query	->select(['*'])
			->from('tn_candidate_tags')
			->innerJoin('tn_tags',
				'tn_tags.id = tn_candidate_tags.tag_id'
			)
			->where(['tn_candidate_tags.candidate_id' => $id]);
		$command = $query->createCommand();
		return $command->queryAll();
	}
}
