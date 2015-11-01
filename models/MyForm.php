<?php
namespace app\models;

use Yii;
use yii\base\Model;
class MyForm extends Model{
    public $name;
    public $email;
    public function rules(){
        return [ [['name', 'email'], 'required', 'message'=>'Can\'t be empty'],
        ['email', 'email', 'message'=>'PLease, enter correct email-address']
        ];
    }
}