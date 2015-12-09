<?php
$data = get_post();

// Accède aux données complète de l'image liées au POST :
//$image_post = wp_get_attachment_metadata( get_post_thumbnail_id($data->ID) );
//$url_medium =  $image_post['sizes']['square'];
//$url_big =  $image_post['sizes']['large'];

// A contrario, récupère directement l'url en fonction de la taille, plus simple.
$url_medium =  wp_get_attachment_image_src( get_post_thumbnail_id($data->ID) , 'medium' );
$url_big =  wp_get_attachment_image_src( get_post_thumbnail_id($data->ID) , 'large' );
$posttype = get_post_type()
?>

<p>
    <a href="<?php echo $url_big[0]; ?>" data-lightbox="category">
<?php
if(empty($url_medium)){
    ?>
<?php
} else {
    ?>
    <img class="alignnone size-medium " src="<?php echo $url_medium[0] ; ?>" alt="" width="300" height="225">
<?php
}
?>

</a>
    
<?php
    if( 'page' == $posttype ){
    } else {
        echo strip_tags($data->post_content);
    }
?>

</p>
