<?php

namespace app\models\Base;

use Yii;

/**
 * This is the model class for table "tn_candidate_tags".
 *
 * @property integer $candidate_id
 * @property integer $tag_id
 */
class TnCandidateTags extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tn_candidate_tags';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['candidate_id', 'tag_id'], 'required'],
            [['candidate_id', 'tag_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'candidate_id' => 'Candidate ID',
            'tag_id' => 'Tag ID',
        ];
    }
}
