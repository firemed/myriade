<?php
    $data = get_post();

    // Accède aux données complète de l'image liées au POST :
    //$image_post = wp_get_attachment_metadata( get_post_thumbnail_id($data->ID) );
    //$url_medium =  $image_post['sizes']['square'];
    //$url_big =  $image_post['sizes']['large'];

    // A contrario, récupère directement l'url en fonction de la taille, plus simple.
//    $url_medium = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID) , 'medium' );
    $url_medium = $url_big = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID) , 'large' );
    $posttype = get_post_type()
?>
<div class="col-md-4 bloc-content-category-list-page-article">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
        <?php
        get_template_part('inc/content','meta');
        the_title('<h2 class="post-title"><a href="'. get_permalink() .'">', '</a></h2>');
        ?>
        <div class="post-content row">
            <div class="col-md-12 col-sm-6 div_photo">
            <?php
                // section image
                $xtraClass = '';
                if(empty($url_medium)){
                    $url_medium = array();
                    $url_medium[] = "/wp-content/uploads/2015/12/visuel_page.png";
                } else {
                    $xtraClass = 'custom_transition';
                    ?> <a href="<?php echo $url_big[0]; ?>" data-lightbox="category"><?php
                }
                ?>
                    <div class="img_background <?php echo $xtraClass; ?>" style="background-image:url('<?php echo $url_medium[0] ; ?>'); padding-bottom:20px;">
                        <div class="mask">
                            <span class="info"></span>
                        </div>
                    </div>

                <?php
                    if(!empty($url_medium)){
                        ?>
                    </a><?php
                    }
                ?>
            </div>
            <div class="col-md-12 col-sm-6">
                <div class="excerpt-format">
                <?php
                    $display_read_more_btn = true;
                    $nb_max_character = 100;
                    $custom_excerpt = strip_tags($data->post_content);
                    $nb_character = strlen($custom_excerpt);
                    if($nb_character > $nb_max_character){
                        $custom_excerpt = substr($custom_excerpt, 0, $nb_max_character-3);
                        $custom_excerpt = $custom_excerpt."...";
                    }

                    if(empty($custom_excerpt)){
//                        $custom_excerpt = "Cliquez pour plus de contenu !";
                        $custom_excerpt = "";
                        $display_read_more_btn = false;
                    }

                // or use wordpress one ...
                if(!empty($data->post_excerpt)){
                    $custom_excerpt = $data->post_excerpt;
                }
                echo $custom_excerpt;
                //
                //    if( 'page' == $posttype ){
                //    } else {
                //
                //    }
                ?>
                </div>
            </div>

            <div class="button_container">
                <a href="<?php echo $data->guid ?>" class="pink_button <?php if(!$display_read_more_btn){ ?> hide-opacitate<?php } ?>" title="">
                    En savoir plus..		</a>
            </div>
        </div>
    </div>
</div>
