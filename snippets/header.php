<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Célia Truel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flickity.min.css">
</head>


<body>

    <header>
        <ul>
        <li>
            <a href="index.php">✿</a>
        </li>
        <li>
            <a href="projets.php" id="lititle">portfolio</a>
        </li>
        <li>
            <a href="hypergarden.php">hypergarden</a>
        </li>
        <li>
            <a href="about.php">5*c + trl</a></li>
        </ul>
    </header>

    <?php

    $projects = [

        'sensorialites' => [
            'title' => 'Sensorialités Croisées',
            'date' => '2023',
            'infos' => 'webdesign, développement web',
            'text' => '<p>Ce site web a été réalisé comme un outil de publications des recherches menées par Anne-Claire Cauhaupé, Hélène Laplace-Claverie et Corinne Melin dans le cadre du projet de recherche-création Sensorialités Croisées. </p>
                    <a href="https://recherche.esad-pyrenees.fr/sensorialitescroisees/">Lien vers le site</a>',
            'img' => [
                '<img loading="lazy" src="css/img/sensorialites/sensorialites-1.png" alt="screenshot de la homepage du site sensorialité croisées">',
                '<img loading="lazy" src="css/img/sensorialites/sensorialites-2.png" alt="screenshot de la homepage du site sensorialité croisées avec le menu déroulé">',
                '<img loading="lazy" src="css/img/sensorialites/sensorialites-3.png" alt="screenshot de la présentation des résidences sur le site sensorialité croisées">',
                '<img loading="lazy" src="css/img/sensorialites/sensorialites-4.png" alt="screenshot de la présentation d\'une résidence sur le site sensorialité croisées">',
                '<img loading="lazy" src="css/img/sensorialites/sensorialites-5.png" alt="screenshot d\'une grille d\'images sur le site sensorialité croisées">',
            ],
        ],

        'grrrls' => [
            'title' => 'GRRRLS',
            'date' => '2023',
            'infos' => 'identité visuelle',
            'text' => '',
            'img' => [
                '<img loading="lazy" src="css/img/grrrls/grrrls-affiche-r2-1.png" alt="affiche officielle de grrrls">',
                '<img loading="lazy" src="css/img/grrrls/grrrls-affiche-r2-2.png" alt="variation vert/indigo de l\'affiche officielle de grrrls">',
                '<img loading="lazy" src="css/img/grrrls/grrrls-affiche-r2-3.png" alt="variation orange/violet de l\'affiche officielle de grrrls">',
                '<img loading="lazy" src="css/img/grrrls/grrrls-affiche-r2-4.png" alt="variation bleu clair de l\'affiche officielle de grrrls">',
                '<img loading="lazy" src="css/img/grrrls/grrrls-insta-jlmelocoton-nom.png" alt="première side (nom) d\'un post insta de présentation d\'artiste (jan loup & melocoton)">',
                '<img loading="lazy" src="css/img/grrrls/grrrls-insta-maelita-nom.png" alt="première side (nom) d\'un post insta de présentation d\'artiste (maelita)">',
                '<img loading="lazy" src="css/img/grrrls/grrrls-insta-lowlov-photo.png" alt="deuxième side (photo) d\'un post insta de présentation d\'artiste (low lov)">',
                '<img loading="lazy" src="css/img/grrrls/grrrls-insta-alexishell-photo.png" alt="deuxième side (photo) d\'un post insta de présentation d\'artiste (alexi shell)">',
            ]
        ],

        'hyperorganic' => [
            'title' => 'Hyperorganic',
            'date' => '2022',
            'infos' => 'réalité virtuelle',
            'text' => '<p><span class="italic">Hyperorganic</span> est une expérience de réalité virtuelle réalisée en collaboration avec les artistes plasticiennes <a href="https://www.instagram.com/morganejouvencel/">Morgane Jouvencel</a> et Soy a.k.a <a href="https://www.instagram.com/imsoftliketofu/">imsoftliketofu</a> pendant les workshops <span class="italic">Infini Cinéma</span>, organisé à l&#39;ENSA Limoges puis à la Médiathèque André Labarrère à Pau en 2022.</p>',
            'img' => [
                '<img loading="lazy" src="css/img/hyperorganic/hyperorganic-1.png" alt="screenshot de l\'espace VR réalisé à Pau en vue rapprochée, au sol">',
                '<img loading="lazy" src="css/img/hyperorganic/hyperorganic-2.png" alt="screenshot de l\'espace VR réalisé à Pau en vue d\'ensemble, du dessus">',
                '<img loading="lazy" src="css/img/hyperorganic/hyperorganic-3.png" alt="screenshot de l\'espace VR réalisé à Pau en vue rapprochée, au sol">',
                '<img loading="lazy" src="css/img/hyperorganic/hyperorganic-4.png" alt="screenshot de l\'espace VR réalisé à Limoges, vu du sol">',
                '<img loading="lazy" src="css/img/hyperorganic/hyperorganic-5.png" alt="screenshot de l\'espace VR réalisé à Limoges, vu du sol">',
                '<img loading="lazy" src="css/img/hyperorganic/hyperorganic-6.png" alt="screenshot de l\'espace VR réalisé à Limoges, vu du sol">',
            ],
        ],

        'flowrslair' => [
            'title' => 'Flowrs Lair',
            'date' => '2022',
            'infos' => 'jeu vidéo',
            'text' => '<p><span class="italic">Flowrs Lair</span> est un jeu vidéo qui invite à découvrir l’écologie d’un paysage fictif en observant sa flore et en y 
                     introduisant des fleurs aujourd’hui disparues en France. </p>
                     <p>C&#39;est à la fois un <span class="italic">care game</span> et un jeu basé sur des principes de botanique. Son rythme est lent et ses mécanismes 
                     reposent sur l’observation et la contemplation. Il se déroule sur une île en dehors du réel, où le sol a une texture 
                     aquatique et la flore semble cristallisée. Cette île est composée de différents biomes, des régions écologiques qui 
                     accueillent des espèces endémiques fictives. Après les avoir bien observés et ayant connaissance de l’écologie de chaque 
                     biome, le joueur pourra y planter des fleurs à l’écologie compatible. En redonnant vie à ces fleurs sur cette île fictive, 
                     le joueur pérennise leur mémoire. </p>
                     <p><a href="https://vimeo.com/750401544">vidéo de démo</a></p>',
            'img' => [
                '<img loading="lazy" src="css/img/flowrslair/20-06-2.png" alt="vue d\'ensemble de l\'île de flowrs lair">',
                '<img loading="lazy" src="css/img/flowrslair/20-06-3.png" alt="vue de l\'intérieur de l\'île">',
                '<img loading="lazy" src="css/img/flowrslair/20-06-4.png" alt="vue de l\'intérieur de l\'île, plus au centre">',
                '<img loading="lazy" src="css/img/flowrslair/20-06-5.png" alt="vue de l\'intérieur de l\'île, excentré, côté sombre">',
                '<img loading="lazy" src="css/img/flowrslair/20-06-6.png" alt="vue du dessus du centre de l\'île">',
                '<img loading="lazy" src="css/img/flowrslair/20-06-7.png" alt="">',
                
                '<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/750401544?h=a31171d4c4&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:90%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                <p><a href="https://vimeo.com/541555783">artificial garden</a> from <a href="https://vimeo.com/user111471587">ccccctrl</a> on <a href="https://vimeo.com">Vimeo</a>.</p>'],
            ],

        'webtoprint' => [
            'title' => 'web-to-print',
            'date' => '2022',
            'infos' => '',
            'text' => '<p>Ces deux éditions ont été mises en page et imprimées avec des outils de développement web (html, css et javascript).</p>
                     <p> <span class="italic">Garden Party</span> a été réalisé dans le cadre du workshop <span class="italic">L&#39;Idéal Anarchique</span>, organisé en 2022 par la Maison des Éditions à Pau et en collaboration avec Margot Laforge.</p>
                     <p>La mise en page des paroles de <span class="italic">Man Next Door</span> de Massive Attack a été réalisée en collaboration avec Titouan Menard dans le cadre du workshop <span class="italic">Karaoprint</span>, organisé en 2019 par Marianne Plano à l&#39;ÉSAD Pyrénées.</p>',
            'img' => [
                '<img loading="lazy" src="css/img/karaoprint/couv.jpg" alt="couverture de l\'edition garden party">',
                '<img loading="lazy" src="css/img/karaoprint/p1.jpg" alt="page de présentation garden party">',
                '<img loading="lazy" src="css/img/karaoprint/p3.jpg" alt="page herbier de garden party">',
                '<img loading="lazy" src="css/img/karaoprint/detail3.jpg" alt="zoom sur une image de page herbier">',
                '<img loading="lazy" src="css/img/karaoprint/detail6.jpg" alt="zoom de tès près sur les textures d\'une image de garden party">',
                '<img loading="lazy" src="css/img/karaoprint/1.png" alt="première page de l\'édition karaoprint sur la chanson man next door">',
                '<img loading="lazy" src="css/img/karaoprint/2.png" alt="page de paroles de man next door">',
                '<img loading="lazy" src="css/img/karaoprint/3.png" alt="suite page de paroles de man next door">',
                '<img loading="lazy" src="css/img/karaoprint/4.png" alt="page interlude man next door">',
                '<img loading="lazy" src="css/img/karaoprint/5.png" alt="page de paroles de man next door">',
            ],
        ],

        'xx1' => [
            'title' => 'XX1',
            'date' => '2021',
            'text' => '<a href="http://xx1.acces-s.org/">Lien vers le site</a>',
            'infos' => 'webdesign, développement web',
            'img' => [
                '<img loading="lazy" src="css/img/xx1/xx1-1.png" alt="homepage du site xx1">',
                '<img loading="lazy" src="css/img/xx1/xx1-2.png" alt="edito de l\'expo">',
                '<img loading="lazy" src="css/img/xx1/xx1-3.png" alt="liste des oeuvres">',
                '<img loading="lazy" src="css/img/xx1/xx1-4.png" alt="image de l\'oeuvre watchmyblock">',
                '<img loading="lazy" src="css/img/xx1/xx1-5.png" alt="description de l\'oeuvre watchmyblock">',

            ],
        ],

        'hypercristal' => [
            'title' => 'Hyper Cristal',
            'date' => '2021',
            'infos' => 'réalité virtuelle, 3D, animation et design graphique',
            'text' => '<p> Réalisation d&#39;un espace tridimentionnel pour la promotion de l&#39;album <span class="italic">Hyper Cristal</span> d&#39;Irène Drésèl.
                      </p>
                     <p>L&#39;espace peut être visité  sur la plateforme <a class="italic"href="https://hubs.mozilla.com/PYSqPsT/buttery-bright-outing"> Mozilla Hubs</a>.',
            'img' => [
                '<video src="css/img/hypercristal/hypercristal.mp4" mute controls></video>',
                '<img loading="lazy" src="css/img/hypercristal/render_1x2.jpg" alt="rendu de la scène 3D hypercristal dans blender">',
                '<img loading="lazy" src="css/img/hypercristal/mockup.png" alt="mockup d\'une pochette CD pour l\'album">',
                '<img loading="lazy" src="css/img/hypercristal/hubs_3.png" alt="screenshot de l\'espace 3D dans mozilla hubs">',
            ],
        ],

        'notebook' => [
            'title' => 'Oneiric Notebook',
            'date' => '2021',
            'infos' => '3D et animation',
            'text' => '<p>Cette vidéo propose une déambulation dans un espace 3D qui rassemble différentes observations et projets 
                     que j&#39;ai réalisés pendant un Erasmus à Cracovie, en Pologne. </p>
                     <p><a href="https://vimeo.com/567420866">vidéo complète</a></p>',
            'img' => ['<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/567420866?h=ca030f68ed&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:90%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                        <p><a href="https://vimeo.com/541555783">artificial garden</a> from <a href="https://vimeo.com/user111471587">ccccctrl</a> on <a href="https://vimeo.com">Vimeo</a>.</p>',       
        ],

        ],

        'artificialgarden' => [
            'title' => 'Artificial Garden',
            'date' => '2021',
            'infos' => '3D, animation et vidéo',
            'text' => '<p> Vidéo expérimentale autour de l&#39;idée de jardin artificiel. </p>
                  <p><a href="https://vimeo.com/541555783">vidéo complète</a></p>',
            'img' => ['<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/541555783?h=9631995117&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:90%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                <p><a href="https://vimeo.com/541555783">artificial garden</a> from <a href="https://vimeo.com/user111471587">ccccctrl</a> on <a href="https://vimeo.com">Vimeo</a>.</p>'
                ],
        ],
    ];

    ?>

    <script src='js/flickity.pkgd.js'></script>
</body>

</html>