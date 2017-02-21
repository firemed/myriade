<?php
get_header(); 
$term = get_queried_object();
echo ebor_page_title( $term->name, $term->description );
?>

<div class="breadcrumb">
    <div class="container">
        <?php
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
    </div>
</div>

<?php
get_template_part('loop/loop-blog', get_option('blog_layout', 'classic'));
get_footer();
?>