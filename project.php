<?php include ("snippets/header.php") ?>

<main>

    <?php
    $id = $_GET['id']; ?>


    <?php

    $id = $_GET["id"];

    ?>

    <div class="container" data-flickity='{ "wrapAround": true }'>
        <?php foreach ($projects[$id]['img'] as $i): ?>
            <div class="carousel-cell">
                <?= $i ?>
            </div>
        <?php endforeach ?>

    </div>

    <h2 class=fleche><a href="#textproj">↓</a></h2>
    <div class="text_proj" id="textproj">

        <h1 class="titre_proj">
            <?= $projects[$id]['title'] ?>
        </h1>

        <h2>
            <?= $projects[$id]['infos'], ", ", $projects[$id]['date'] ?>
        </h2>

        <article class="article_projet">
            <?= $projects[$id]['text'] ?>
        </article>

    </div>


</main>