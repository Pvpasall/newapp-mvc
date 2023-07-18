<?php
require_once 'controllers/ArticleCategorie.php';

$articleCategorieController = new ArticleCategorieController();
$articles = $articleCategorieController->getArticles();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My News App</title>
    <link rel="stylesheet" type="text/css" href="/public/css/styles.css">
    <link rel="shortcut icon" href="/public/img/logo-news-app.png" type="image/x-icon">
</head>
<body>
    <img src="/public/img/logo-news-app.png" alt="News App Logo">
    <h1>Sama news page</h1>

    <?php include_once("views/partials/header.php"); ?>

    <div id="contenu">
        <?php
            if (!empty($articles)) {
                foreach ($articles as $article):
                    echo "<h2>".$article->getTitre()."</h2>";
                    echo "<p>" .$article->getContenu()."</p>";
                    echo "<hr>";
                endforeach;
            }else{
                echo "<hr>";
                echo "<p>Vide</p>";
                echo "<hr>";
            }
        ?>
    </div>

    <?php include_once("views/partials/footer.php"); ?>
</body>
</html>
