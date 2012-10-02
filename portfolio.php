<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<div class="portfolio">
  <?php add_filter( 'post_limits', -1 ); ?>
<?php

$the_query = new WP_Query(array('post_type'=>'proggeto')); 
$counter = 0;

while ( $the_query->have_posts() ) : $the_query->the_post();
  $counter++;
  ?>

  <div class="box">
    <a rel="group_<? echo $counter ?>" href="<?php echo get('img_images')?>"  class="fancybox" title="<?php echo get("img_info") ?>">
      <div class="title_box"><h3 class="title"><?php the_title() ?></h3></div>
      <div class="img" style="background-image:url('<?php echo get('cover_images') ?>')" ></div>
    </a>
    <div style="display:none" class="gallery_the_other">
    <?php 
    $members = get_group('gallery');
    
    foreach ($members as $key => $value):
      if ($key != 1):
        $img = get('img_images',$key,$value);
        $info = get('img_info',$key,$value) ?>
        <a rel="group_<? echo $counter ?>" href="<?php echo $img ?>" class="fancybox" title="<?php echo $info ?>"></a><?  
      endif;
     endforeach ;
    ?>
    </div>
  </div>
<? endwhile ?>
</div>
<div style="margin-bottom:60px;height:1px;clear:both"></div>

<?php wp_reset_postdata() ?>
<?php get_footer() ?>