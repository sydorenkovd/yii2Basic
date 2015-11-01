<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

if($name and $email) {
    echo "Email: " . $email . " and name :" . $name;
}
$f = ActiveForm::begin(['options'=> ['enctype'=>'multipart/form-data']]);
echo $f->field($form, 'name');
echo $f->field($form, 'email');
echo $f->field($form, 'file')->fileInput();
echo Html::submitButton('Send');
ActiveForm::end();