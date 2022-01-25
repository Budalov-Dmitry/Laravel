<h1>Категории</h1>
<br>
    <?php foreach($category as $categoryItem): ?>
        <div>
            <strong><a href="<?=route('news.index', ['id' => $categoryItem->id])?>"><?=$categoryItem->title?></a></strong>
            <p><?=$categoryItem->description?></p>
            <hr>
        </div>
    <?php endforeach; ?>

