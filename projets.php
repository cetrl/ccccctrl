<?php include ("snippets/header.php") ?>

<main>
  <h1>
    <ul class="menu">
      <?php
      foreach ($projects as $key => $project) {
        echo '<li><a href="project.php?id=' . $key . '" data-article="article-' . $key . '">
          <span class="dateproj">' . $project['date'] . '</span>
          <span class="titreproj">' . $project['title'] . '</span>
          </a></li>';
      }
      ?>
    </ul>
  </h1>

  <section class="text_about">
    <article class="about visible">
    </article>
    <?php
    foreach ($projects as $key => $project) {
      echo '<article class="article-' . $key . '"><img class="vignette" src="css/img/' . $key . '_vignette.gif" alt="' . $project['title'] . '"></article>';
    }
    ?>

  </section>

</main>


<script src='js/script.js'></script>