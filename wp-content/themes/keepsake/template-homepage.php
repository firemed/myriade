<?php
/*
Template Name: Layout page accueil
*/

$class = 'post-content';
get_header();
the_post();
?>
<head>
    <link rel="stylesheet" id="homepagelayout-style-css" href="/wp-content/themes/keepsake/style/css/template-homepage.css" type="text/css" media="all">
</head>


<div id="homepage-layout" class="body-wrapper">

    <div id="page-<?php the_ID(); ?>" class="<?php echo $class; ?>">
        <?php
        the_content();
        wp_link_pages();
        ?>
    </div>

<?php get_footer();?>
</div>