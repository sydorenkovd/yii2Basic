<?php
use yii\widgets\LinkPager;
?>
<b>Comments</b>
<?php $urli= Yii::$app->urlManager->createUrl(['site/user', 'name'=>$name]);?>
<p>Last time you have seen profile <a href="<?=$urli?>"><?=$name?></a></p>
<ul>
<?php
foreach($comments as $comment){
    $url= Yii::$app->urlManager->createUrl(['site/user', 'name'=>$comment->name]);
    echo "<li><b></b><a href=". $url .">". $comment->name ."</a>:</b>".$comment->text ."</li>";
}
    ?>
</ul>
    <?=LinkPager::widget(['pagination'=>$pagination])?>
