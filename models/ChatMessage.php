<?php

namespace app\models;

use app\components\tona\Common;
use app\models\Base\TnChatMessage;
use Yii;

class ChatMessage extends TnChatMessage
{
    public static function getMessage($user_id, $data){

        if(isset($data['group_id']) && intval($data['group_id']) == 0){
            $group_id = ChatGroup::createGroup($user_id, $data['user_id']);
        }else{
            $group_id = $data['group_id'];
        }

        $mess = ChatMessage::find()
            ->where(['group_id' => $group_id])->andWhere(['is_deleted' => 0])->asArray()->all();
        $chats = [];
        if($mess){
            foreach($mess as $ii){
                $chats[] = [
                    'id' => $ii['id'],
                    'group_id' => $ii['group_id'],
                    'content' => $ii['content'],
                    'is_readed' => $ii['is_readed'],
                    'time_sended' => $ii['time_sended'],
                    'me_sender' => ($ii['sender_id'] == Common::currentUser()),
                ];
            }
        }
        return $chats;
    }

    public static function saveMessage($data){
        $mess = new ChatMessage();
        $mess->group_id = 1;
        $mess->content = $data['message_text'];
        $mess->receiver_id = 45;
        $mess->sender_id = Common::currentUser();
        $mess->save();
        return $mess->toArray();
    }
}
