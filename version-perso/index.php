<!DOCTYPE html>
<html>
<head>
    <title>My News App</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>

    <h1>Sama news page</h1>
    
    <?php include_once("partials/header.php"); ?>

    <div id="contenu">
        <?php
        require_once('db/connexion.php');

        $reqCat = "SELECT * FROM Article";
        $paramsCat = isset($_GET['categorie']) ? $_GET['categorie'] : '';
       
        if ($paramsCat!='') {
            $reqCat .= " WHERE categorie = " . $paramsCat;
        }
        
        $result = mysqli_query($connexion, $reqCat);

        if ($result->num_rows > 0) {
            while ($article = mysqli_fetch_assoc($result)) {
                echo "<hr>";
                echo "<h2>" . $article['titre'] . "</h2>";
                echo "<p>" . $article['contenu'] . "</p>";
            }
            echo "<hr>";
        }else{
            echo "<hr>";
            echo "<p>Vide</p>";
            echo "<hr>";
        }

        mysqli_close($connexion);
        ?>
    </div>

    <?php include_once("partials/footer.php"); ?>
</body>
</html>
