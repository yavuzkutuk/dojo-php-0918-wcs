<?php
require 'conf/db.php';
require 'lib/article.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    addArticle($_POST, $pdo);
}
require '_inc/_head.php';
?>
        <div class="col-12 col-md-8">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Auteur</th>
                    <th>Voir</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $articles = showArticles($pdo);
            foreach ($articles as $article) {
                ?>
                    <tr>
                        <td><?= $article['id']; ?></td>
                        <td><?= $article['titre']; ?></td>
                        <td><?= $article['contenu']; ?></td>
                        <td><?= $article['auteur']; ?></td>
                        <td>
                            <a href="details.php?id=<?= $article['id']; ?>">Voir +</a>
                        </td>
                    </tr>
            <?php } ?>
            </tbody>
            </table>
        </div>
        <div class="col-12 col-md-4">
            <form method="post">
                <div class="form-group">
                    <input type ="text" name="titre" class="form-control" >
                </div>
                <div class="form-group">
                    <textarea name="contenu" class="form-control" >
                    </textarea>
                </div>
                <div class="form-group"> 
                    <select name="auteur" class="form-control" >
                        <option>Élisa</option>
                        <option>Joséphine</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type ="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>
<?php require '_inc/_foot.php';