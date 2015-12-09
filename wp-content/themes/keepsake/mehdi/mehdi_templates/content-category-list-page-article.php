<?php
$data = get_post();
$url = wp_get_attachment_url( get_post_thumbnail_id($data->ID) , 'medium');
$urlbig = wp_get_attachment_url( get_post_thumbnail_id($data->ID) , 'large');
$posttype = get_post_type()
?>

<p>
    <a href="<?php echo $urlbig; ?>" data-lightbox="category">
<?php
if(empty($url)){
    ?>
<?php
} else {
    ?>
    <img class="alignnone size-medium " src="<?php echo $url ; ?>" alt="" width="300" height="225">
<?php
}
//print_r($data);

?>

</a>
<?php
    if( 'page' == $posttype ){
    } else {
        echo strip_tags($data->post_content);
    }
?>

</p>
