<?php
use yii\widgets\LinkPager;

$this->title = "";

$this->registerMetaTag([
    'name' => 'description',
    'content' => ''
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => ''
])
?>
<div id="custom">
    <h2>Выпуски рассылки</h2>
    <hr/>
    <?php include "likes.php"; ?>
    <div class="post_text">
        <p class="center">
            <img src="/web/images/subscribe.png" alt="Выпуски рассылки"/>
        </p>

        <div id="minicourses">
            <table>
                <tr>
                    <td class="arrow">
                        <img src="/web/images/left.png" alt="Влево"
                             onclick="changeMiniCourse(false, 'minicourses_list')"/>
                    </td>
                    <td id="minicourses_list">
                        <?php foreach ($minicourses as $course) { ?>
                            <div class="<?php if ($course->default == 1) { ?>show<?php } else { ?>hide<?php } ?>">
                                <h3 class="center"><?= $course->title ?></h3>

                                <p class="center">
                                    <img src="<?= $course->img ?>" alt="<?= $course->title ?>"/>
                                </p>
                                <?php include "form_subscribe.php"; ?>
                            </div>
                        <?php } ?>
                    </td>
                    <td class="arrow">
                        <img src="/web/images/right.png" alt="Вправо"
                             onclick="changeMiniCourse(true, 'minicourses_list')"/>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<h1 class="center">Выпуски рассылки</h1>
<?php foreach ($posts as $post) include "intro_post.php"; ?>
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