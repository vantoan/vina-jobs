<?php

namespace app\models;

use app\models\Base\TnChatGroupMembers;
use Yii;
use yii\db\Query;

class ChatGroupMembers extends TnChatGroupMembers
{
    public static function getMembers($user_id){
        $query = new Query();
        $query->select(['u.id', 'u.name', 'group.id as group_id'])
            ->from('tn_user u')
            ->leftJoin('tn_chat_group_members group_mem', 'group_mem.member_id = u.id')
            ->leftJoin('tn_chat_group group', 'group.id = group_mem.group_id');
        $command = $query->createCommand();
        $data = $command->queryAll();

        $users = [];
        if($data){
            foreach($data as $v){
                $users[] = [
                    'id' => $v['id'],
                    'name' => $v['name'],
                    'group_id' => intval($v['group_id']),
                ];
            }
        }

        return $users;
    }
}
