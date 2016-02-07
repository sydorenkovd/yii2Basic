<?php // $item is from actionItemDetail ?>

<h2>News Item Detail</h2>
        <br />
        Title: <b><?php echo $item['title'] ?></b>
        <br />
        Date: <b><?php echo Yii::$app->formatter->asDatetime($item['date'], 'php:d/m/Y'); ?></b>
