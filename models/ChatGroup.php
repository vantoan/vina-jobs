<?php

namespace app\models;

use app\components\tona\Datetime;
use app\models\Base\TnChatGroup;
use Yii;
use yii\db\Query;

class ChatGroup extends TnChatGroup
{
    public static function createGroup($my_user_id, $user_id){

        /* Create Group */
        $group = new ChatGroup();
        $group->group_name = '';
        $group->total_members = 2;
        $group->created_by = $my_user_id;
        $group->created_at = Datetime::getDateNow(Datetime::SQL_DATETIME);
        $group->is_deleted = 0;
        $group->save();
        return $group->id;
    }
}
