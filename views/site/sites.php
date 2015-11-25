<?php
$this->title = "Сайты моих учеников";

$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Список сайтов моих учеников.'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'список сайтов, список сайтов ученики, список сайтов ученики михаил русаков'
])
?>
<div id="sites">
    <h2>Сайты моих учеников</h2>

    <p>Ниже идёт список сайтов, которые были созданы моими учениками. Добавить ещё сайт можно <a
            href="<?= Yii::$app->urlManager->createUrl(['site/addsite']) ?>">здесь</a>. Обратите внимание, что
        обязательным условием является наличие какой-нибудь фразы <b>на главной страницы сайта</b>, свидетельствующей о
        том, что сайт принадлежит Вам и Вы его создали благодаря моим урокам! Например, это может быть "<b>Спасибо
            Михаилу Русакову!</b>". Как альтернативу можно просто поставить ссылку на мой сайт <b>myrusakov.ru</b>, либо
        на любой другой из моих сайтов.</p>

    <p>По причине отсутствия таких "обратных" данных, <b>70%</b> сайтов сюда и не попали. Это не каталог сайтов, поэтому
        рекламировать сторонние ресурсы здесь не надо.</p>
    <ol>
        <?php $number = 0;
        foreach ($sites as $site) {
            $number++; ?>
            <li>
                <p>
                    <a href="<?= $site->address ?>"><?= $site->address ?></a> - <?= $site->description ?></p>
            </li>
        <?php } ?>
    </ol>
</div>						