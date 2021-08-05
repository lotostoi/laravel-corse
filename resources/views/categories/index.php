<h1>News categories</h1>

<?php foreach ($categoriesList as $cat): ?>

    <ul>
        <li><a href="<?=route('categoriesId', ['id' => $cat['id']])?>"><?=$cat['title']?></a></li>
    </ul>

<?php endforeach?>

<a href="/">To home page</a>