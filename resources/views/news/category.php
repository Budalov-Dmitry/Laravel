<h1>Категории</h1>
<br>
    <?php foreach($category as $categoryItem): ?>
        <div>
            <strong><a href="<?=route('news.index')?>"><?=$categoryItem['title']?></a></strong>
            <hr>
        </div>
    <?php endforeach; ?>

