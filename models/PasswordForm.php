<?php
namespace app\models;

use Yii;
use yii\base\Model;

class PasswordForm extends Model
{
	public $oldpass;
	public $newpass;
	public $repeatnewpass;

	public function rules()
	{
		return [
			[['oldpass', 'newpass', 'repeatnewpass'], 'required'],
			['oldpass', 'findPasswords'],
			['repeatnewpass', 'compare', 'compareAttribute' => 'newpass'],
		];
	}

	public function findPasswords($attribute, $params)
	{
		$user = Users::find()->where([
			'id' => Yii::$app->user->identity->getId()
		])->one();
		$password = $user->password;

		if (!Yii::$app->security->validatePassword($this->oldpass, $password)){
			$this->addError($attribute, 'Current password is incorrect');
		}
	}

	public function attributeLabels()
	{
		return [
			'oldpass' => 'Current password',
			'newpass' => 'New password',
			'repeatnewpass' => 'Repeat new password',
		];
	}
}