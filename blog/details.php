<?php

    require 'conf/db.php';
    require 'lib/article.php';
    require '_inc/_head.php';

    $article = showArticle($_GET['id'], $pdo);
?>
<div class="col-12">

    <h1><?= $article->titre; ?></h1>
    <p><?= $article->contenu; ?></p>
    <em><?= $article->auteur; ?></em>


</div>
<?php require '_inc/_foot.php';