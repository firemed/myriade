<?php get_header(); ?>

    <style>
        /* J'ai géré la taille ici pour pas toucher ton fichier css mais à toi de régler,
         il faut pas mettre l'image en back ground car masonry calcule la taille à partir de l'image */
        .item { width: 25%; background:gray;}
        .item.w2 { width: 50%; }
    </style>
    <h1>front-page.php</h1>
    <div id="container" class="js-masonry" data-masonry-options='{ "columnWidth": 200, "itemSelector": ".item" }'>
        <div  class="item"> <img src="/wp-content/themes/html5blank-stable/img/photo_groupe_enfants_parapente.JPG"/></div>
        <div  class="item w2"> <img src="/wp-content/themes/html5blank-stable/img/groupe_enfants.JPG"/> </div>
        <div  class="item"> <img src="/wp-content/themes/html5blank-stable/img/photo_groupe_enfants_parapente.JPG"/></div>
        <div  class="item"> <img src="/wp-content/themes/html5blank-stable/img/photo_groupe_enfants_parapente.JPG"/></div>
        <div  class="item w2"> <img src="/wp-content/themes/html5blank-stable/img/groupe_enfants.JPG"/></div>
        <div  class="item"> <img src="/wp-content/themes/html5blank-stable/img/photo_groupe_enfants_parapente.JPG"/></div>
        <div  class="item"> <img src="/wp-content/themes/html5blank-stable/img/photo_groupe_enfants_parapente.JPG"/></div>
        <div  class="item w2"> <img src="/wp-content/themes/html5blank-stable/img/groupe_enfants.JPG"/></div>
        <div  class="item"> <img src="/wp-content/themes/html5blank-stable/img/photo_groupe_enfants_parapente.JPG"/></div>
    </div>
<!-- J'ao viré get template part car ça cherchait qqch que tu voulais pas je crois à remettre sinon -->
<?php #get_template_part ( 'content', 'home' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>