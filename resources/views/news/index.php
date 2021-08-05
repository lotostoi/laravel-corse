<h1>
    <?=$categoryName?> news
</h1>

<?php foreach ($newsList as $new): ?>
<ul>
    <li><a href="<?=route('newId', ['id' => $new['id']])?>">
            <?=$new['title']?>
        </a>
    </li>
</ul>

<?php endforeach?>

<a href="/news/categories">back</a>