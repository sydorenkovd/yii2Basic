<?php
namespace app\models;

use yii\db\ActiveRecord;
class Courses extends ActiveRecord{
    public $link;
    public $img;
    public $order;
    public function afterFind(){
        $this->link = "http://yii2/".$this->alias;
        $this->img = "/web/images/courses/". $this->alias .".png";
        $this->order = "http://yii2/order?product_ids=".$this->src_id;
    }
}