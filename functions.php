<?php
 
register_nav_menus(); 

add_theme_support('post-thumbnails'); 
set_post_thumbnail_size(200,200, true);
add_post_type_support( 'page', 'excerpt' );
add_filter( 'wp_title','braincancer_filter_wp_title', 10, 3 );

function the_slug() {
$post_data = get_post($post->ID, ARRAY_A);
$slug = $post_data['post_name'];
return $slug; }

register_sidebar(array(
"name" => "Right Side Bar",
"id" => "right_aside",
"discription" => "Right Side Bar",
"before_widget" => "<div class='widget'>",
"after_widget" => "</div><!-- end widget -->",
"before_title" => "<h3 class='widget_title'>",
"after_title" => "</h3>"
));



?>