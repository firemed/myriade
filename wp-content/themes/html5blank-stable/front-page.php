<?php get_header(); ?>
<h1>front-page.php</h1>
<div id="container" class=js-masonry" data-masonry-options='{ "columnWidth": 200, "itemSelector": ".item" }'>
    <div id="vertical-gutter" class="item"></div>
    <div id="vertical-gutter" class="item2"></div>
    <div id="vertical-gutter" class="item"></div>
</div>
<?php get_template_part ( 'content', 'home' ); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>