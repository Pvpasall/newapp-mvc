<header>
    <nav>
        <ul>
            <li><a href="/">All</a></li>
            <?php
            require('db/connexion.php');
            $resultat = mysqli_query($connexion, "SELECT * FROM Categorie");

            // Affichage des catégories dans la barre de navigation
            while ($categorie = mysqli_fetch_assoc($resultat)) {
                $idCat = $categorie['id'];
                $libCat = $categorie['libelle'];
                echo '<li><a href="?categorie=' . $idCat . '">' . $libCat . '</a></li>';
            }

            ?>
        </ul>
    </nav>
</header>
