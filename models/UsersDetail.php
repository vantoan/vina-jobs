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

    public static function insertUserDetail($client, $user_id){
        if($client){
            $model = UsersDetail::find()->where(['user_id' => $user_id])->one();
            if(!$model){
                $model = new UsersDetail();
            }
            $model->user_id = $user_id;
            $model->email = $client['email'];
            $model->fullname = $client['name'];
            $model->first_name = $client['first_name'];
            $model->last_name = $client['last_name'];
            $model->save();
        }
    }
}
