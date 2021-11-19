<h2>Catégories</h2>
<ul>
    <?php
    // Chemin vers le fichier movies.json
    $path = dirname(__DIR__) . '/movies.json';

    // On récupère le contenu du fichier
    $movies = file_get_contents($path);

    // On convertit le JSON en tableau PHP
    $movies = json_decode($movies, true);

    foreach ($movies as $oneMovie) {
    ?>
        <li><a href="#"><?= $oneMovie['movie_subject']; ?></a></li>
    <?php
    }
    ?>
</ul>