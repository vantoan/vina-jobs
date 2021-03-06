<?php
namespace app\components\tona;

use Yii;
class Common
{
    public function init(){

    }

    /**
     * @return bool|int|string
     */
    public static function isLogin(){
        if(Yii::$app->user->identity){
            return Yii::$app->user->identity->getId();
        }else{
            return false;
        }
    }
    /**
     * @param string $key
     * @return string
     */
    public static function currentUser($key = 'id', $return = true){
        if(Yii::$app->user->identity){
            return Yii::$app->user->identity->$key;
        }else{
            if($return){
                return null;
            }
            return false;
        }
    }

    /**
     * @return bool|null|\yii\web\IdentityInterface
     */
    public static function currentUsers()
    {
        if (Yii::$app->user->identity) {
            return Yii::$app->user->identity;
        }
        return false;
    }
}
