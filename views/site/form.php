<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$f = ActiveForm::begin();
echo $f->field($form, 'name');
echo $f->field($form, 'email');
echo Html::submitButton('Send');
ActiveForm::end();