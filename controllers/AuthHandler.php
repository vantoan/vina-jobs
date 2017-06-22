<?php

namespace app\controllers;

use app\components\tona\Helper;
use app\components\tona\Role;
use app\models\Users;
use Yii;
use yii\authclient\ClientInterface;
use yii\helpers\ArrayHelper;

/**
 * AuthHandler handles successful authentication via Yii auth component
 */
class AuthHandler
{
    /**
     * @var ClientInterface
     */
    private $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function handle()
    {
        $attributes = $this->client->getUserAttributes();
        $email = ArrayHelper::getValue($attributes, 'email');
        $id = ArrayHelper::getValue($attributes, 'id');
        $nickname = ArrayHelper::getValue($attributes, 'login');

        $userData = $this->client->getUserAttributes();

        $this->updateUserInfo($this->client->getId(), $userData);

        /*echo '<pre> id ';
        print_r($this->client->getId());
        echo '<br> Name ';
        print_r($this->client->getName());
        echo '<br> Title ';
        print_r($this->client->getTitle());
        echo '<br> User ';
        print_r($this->client->getUserAttributes());
        echo '<br> Opt';
        print_r($this->client->getViewOptions());

        echo '<br> Email ';
        print_r($email);

        echo '<br> Id';
        print_r($id);
        echo '<br>Name ';
        print_r($nickname);
        echo '</pre>';
        die;*/
    }

    /**
     * @param Users $user
     */
    private function updateUserInfo($from, $userData)
    {
        $user = Users::find()->where(['username' => $userData['email']])->one();
        if(!$user){
            $user = new Users();
        }
        $user->name = $userData['name'];
        $user->username = $userData['email'];
        $user->slug_name= Helper::createSlug($userData['name']);
        $user->password = Yii::$app->security->generatePasswordHash(123456);
        $user->auth_key =Yii::$app->security->generateRandomKey();
        $user->role = Role::ROLE_CUSTOMMER;
        if($user->save()){
            Yii::$app->user->login($user);
        }
    }
}