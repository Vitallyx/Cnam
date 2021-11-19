<section class="movies">
    <h2>Tous les films</h2>

    <?php

    // Chemin vers le fichier movies.json
    $path = dirname(__DIR__) . '/movies.json';

    // On récupère le contenu du fichier
    $movies = file_get_contents($path);

    // On convertit le JSON en tableau PHP
    $movies = json_decode($movies, true);

    foreach ($movies as $oneMovie) {
    ?>
        <article>
            <h2><?= $oneMovie['movie_title']; ?></h2>
            <p>Catégorie: <?= $oneMovie['movie_subject']; ?></p>
            <p>Années: <?= $oneMovie['movie_year']; ?></p>
        </article>
    <?php
    }

    ?>
</section>