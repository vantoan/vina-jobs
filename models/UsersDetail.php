<?php

namespace app\models;

use yii\web\IdentityInterface;

class UsersDetail extends \app\models\Base\TnUserDetails
{
    public static function saveDetail($data, $user_id){
        if($data){
            $model = new UsersDetail();
            $model->user_id = $user_id;
            $model->email = $data->email;
            $model->first_name = $data->first_name;
            $model->last_name = $data->last_name;

            $model->save();
        }
    }
}
