<?php
echo $this->context->renderPartial('_copyright');
// $newsList is from actionItemsList ?>
<table>
    <tr>
        <th>Title</th>
        <th>Date</th>
    </tr>
    <?php foreach($newsList as $item) { ?>
        <tr>
            <th><a href="<?php echo Yii::$app->urlManager
                    ->createUrl(['instance/details' , 'title' => $item['title']]) ?>"><?php echo $item['title'] ?></a></th>
            <th><?php echo Yii::$app->formatter->asDatetime($item['date'], 'php:d/m/Y'); ?></th>
        </tr>
    <?php } ?>
</table>
