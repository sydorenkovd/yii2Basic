<?php
$this->title = "Видеоотзывы";

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
    <h2>Видеоотзывы</h2>
    <hr/>
    <?php include "likes.php"; ?>
    <div class="post_text">
        <p class="center">
            <img src="/web/images/reviews.png" alt="Видеоотзывы"/>
        </p>

        <?php foreach ($reviews as $review) { ?>
            <h2>Отзыв от <?= $review->from ?></h2>
            <?= $review->video ?>
            <br/>
        <?php } ?>

    </div>
</div>		