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

    public static function insertUserDetailTW($client, $user_id){
        if($client){
            $model = UsersDetail::find()->where(['user_id' => $user_id])->one();
            if(!$model){
                $model = new UsersDetail();
            }
            $n = explode(' ', $client['name']);
            $fn = '';
            $ln = '';
            if(count($n) > 1){
                $fn = $n[0];
                $ln = $n[count($n) - 1];
            }

            $model->user_id = $user_id;
            $model->email = '';
            $model->fullname = $client['name'];
            $model->first_name = $fn;
            $model->last_name = $ln;
            $model->profile_image_url = $client['profile_image_url'];
            $model->profile_image_url_https = $client['profile_image_url_https'];
            $model->save();
        }
    }
}
