<div id="content" class="container">

    <header>
        <div id="photo_header">
            <img id="banner" src="<?php echo get_template_directory_uri(); ?>/img/photo_slider.jpg" alt="photo_header">
            <a href=""><img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-header.png" alt="logo_header"></a>
        </div>
        <?php

        $defaults = array(

            'menu_id'         => '2'

        );

//        wp_nav_menu( $defaults );

        ?>
    </header>

    <p><span id="bienvenue">Bienvenue au Pissenlibleu !</span><br><br>

        Monique Lasserre et sa famille vous accueillent en toute simplicité dans leur maison familiale à Millau.<br><br>

        Nous espérons que vous trouverez toutes les informations sur notre site internet, sinon, n'hésitez à nous contacter via la rubrique
        "Contact et Accès" !<br><br>

        Bonne visite et à bientôt !</p>

    <article id="accroche">
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/visiter.png" alt="visiter"></a>
        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/liens.png" alt="liens"></a>
    </article>
</div>