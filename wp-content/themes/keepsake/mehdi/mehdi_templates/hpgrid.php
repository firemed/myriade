<?php
    $data = get_post($post);

    // Accède aux données complète de l'image liées au POST :
    //$image_post = wp_get_attachment_metadata( get_post_thumbnail_id($data->ID) );
    //$url_medium =  $image_post['sizes']['square'];
    //$url_big =  $image_post['sizes']['large'];

    // A contrario, récupère directement l'url en fonction de la taille, plus simple.
//    $url_medium = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID) , 'medium' );
    $url_medium = $url_big = wp_get_attachment_image_src( get_post_thumbnail_id($data->ID) , 'large' );
    $posttype = get_post_type()
?>

<div class="col-md-3 col-sm-6 col-xs-12 hpgrid">
    <div id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
        <div class="post-content row row-no-margin">
            <div class="col-md-12 div_photo">
            <?php
                // section image
                $xtraClass = '';
                if(empty($url_medium)){
                    $url_medium = array();
                    $url_medium[] = "/wp-content/uploads/2015/12/visuel_page.png";
                } else {
                    $xtraClass = 'custom_transition';
                }
            ?>
            <a href="<?php echo $data->guid; ?>">
                    <div class="img_background <?php echo $xtraClass; ?>" style="background-image:url('<?php echo $url_medium[0] ; ?>');">
                        <div class="mask">
                            <span class="glyphicon glyphicon-share-alt action"></span>
                        </div>
                        <div class="layer_titre_bloc_hp">
                            <?php echo $data->post_title; ?>
                        </div>
                    </div>
            </a>
            </div>
        </div>
    </div>
</div>
