<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<div class="portfolio">
<?php

$the_query = new WP_Query('post_type=proggeto'); 
//The loop
while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
  <div class="box">
    <a href="<?php the_permalink() ?>">
    <div class="title_box"><h3 class="title"><?php the_title() ?></h3></div>
    <div class="img" style="background-image:url('<?php echo get('cover_images') ?>')" ></div>
    </a>
  </div>
<? endwhile ?>
</div>
<?php wp_reset_postdata() ?>

<?php get_footer() ?>