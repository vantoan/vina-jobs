<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'subject', 'body'], 'required', 'message' => '{attribute} không thể rỗng'],
            // email has to be a valid email address
            ['email', 'email', 'message' => 'Đây không phải là một email hợp lệ'],
            // verifyCode needs to be entered correctly
            ['verifyCode', 'captcha', 'message' => '{attribute} không đúng'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Tên',
            'email' => 'Email',
            'subject' => 'Chủ đề',
            'body' => 'Nội dung',
            'verifyCode' => 'Mã xác nhận',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->setHtmlBody($this->setBody($this->body, $this->email, $this->name))
                ->send();

            return true;
        }
        return false;
    }

    public function setBody($body, $email, $name){
        return $message = 'Có một khách hàng vừa gửi thông tin cho bạn với Tên: '.$name.' Và email: '. $email.'; Có nội dung là: '.$body;
    }
}
