<h1>Список новостей</h1>
<br>
<?php foreach($news as $newsItem): ?>
    <div>
        <strong><a href="<?=route('news.show', ['id' => $newsItem['id']])?>"><?=$newsItem['title']?></a></strong>
        <p><?=$newsItem['description']?></p>
        <em>Автор: <?=$newsItem['source']?></em>
        <hr>
    </div>
<?php endforeach; ?>


<?php //if ($news['category'] == $_GET['category']): ?>
<!--    --><?php //foreach($news as $newsItem): ?>
<!--        <div>-->
<!--            <strong><a href="--><?//=route('news.show', ['id' => $newsItem['id']])?><!--">--><?//=$newsItem['title']?><!--</a></strong>-->
<!--            <p>--><?//=$newsItem['description']?><!--</p>-->
<!--            <em>Автор: --><?//=$newsItem['source']?><!--</em>-->
<!--            <hr>-->
<!--        </div>-->
<!--    --><?php //endforeach; ?>
<?php //endif; ?>
