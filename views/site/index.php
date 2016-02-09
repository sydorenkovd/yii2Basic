<?php
use yii\widgets\LinkPager;

$this->params['breadcrumbs'][] = "Mysite";
$this->title = "Blog Victor Sydorenko";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Blog Victor\'s Sydorenko.'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'sydorenkovd'
])

?>
<?php
foreach ($posts as $post)
    include "intro_post.php";
?>
<br/>
<hr/>
<div id="pages">
    <?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel' => 'В начало',
        'lastPageLabel' => 'В конец',
        'prevPageLabel' => '&laquo;'
    ]) ?>
    <span>Страница <?= $active_page ?> из <?= $count_pages ?></span>

    <div class="clear"></div>
</div>