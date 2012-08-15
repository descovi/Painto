<?php
/*
Template Name: Portfolio
*/

//get_header();
$the_query = new WP_Query('post_type=proggeto'); 
//The loop
while ( $the_query->have_posts() ) : $the_query->the_post();
  the_title();
  echo '<img src="';
  echo get('img_images');
  echo '">';
endwhile;

wp_reset_postdata();

//get_footer();
?>