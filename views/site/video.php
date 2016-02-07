<?php
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
    <h2>Videocourses by Victor Sydorenko</h2>
    <hr/>
    <?php include "likes.php"; ?>
    <div class="post_text">
        <p class="center">
            <img src="/web/images/video.png" alt=""/>
        </p>

        <?php $number = 0;
        foreach ($courses as $course) {
            $number++; ?>
            <hr/>
            <div class="video">
                <h2><?= $number ?>. <?= $course->title ?></h2>

                <p class="center">
                    <img src="<?= $course->img ?>" alt="<?= $course->title ?>"/>
                </p>
                <?= $course->description ?>
                <?php if (!$course->did) { ?>
                    <p class="right">
                        <a rel="external" href="<?= $course->link ?>" title="Подробнее">Подробнее</a>
                    </p>
                    <p class="price">Цена: <?= $course->price ?> руб</p>
                    <p class="center">
                        <a class="order" href="<?= $course->order ?>"></a>
                    </p>
                <?php } else {
                    include "form_subscribe.php";
                } ?>
            </div>
        <?php } ?>

    </div>
</div>						