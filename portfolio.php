<?php
/*
Template Name: Portfolio
*/
get_header();
?>
<div class="portfolio">
<?php //add_filter('post_limits', -1 ); ?>
<?php

$the_query = new WP_Query(array('post_type'=>'proggeto')); 
$counter = 0;

while ( $the_query->have_posts() ) : $the_query->the_post();
  $counter++;
  ?>

  <div class="box">
    <a rel="group_<? echo $counter ?>" href="<?php echo get('img_images',1,1,0,NULL,array("q"=>90))?>"  class="fancybox" caption="<?php echo get("img_info") ?>">
      <div class="title_box"><h3 class="title"><?php the_title() ?></h3></div>
      <div class="img" style="background-image:url('<?php echo get_image('cover_images',1,1,0,NULL,array("q"=>90)) ?>')" ></div>
    </a>
    <div style="display:none" class="gallery_the_other">
    <?php 
    // gallery
    $gallery = get_group('gallery');
    foreach ($gallery as $key => $value):
      if ($key != 1):
        $img = get_image('img_images',$key,$value,0,NULL,array("q"=>90));
        $info = get('img_info',$key,$value) ;
        $img_ex = get_image('img_images',$key,$value,0,NULL,array("q"=>90));
        ?>        
        <a rel="group_<? echo $counter ?>" href="<?php echo $img ?>" class="fancybox" caption="<?php echo $info ?>"></a><?  
      endif;
     endforeach;
     // video
     $video = get_group('video');
      foreach ($video as $key => $value):
        $video_url = get('video_url',$key,$value);
        $info = get('video_info',$key,$value) ?>
        <a rel="group_<? echo $counter ?>" href="<?php echo $video_url ?>" class="fancybox fancybox-media" caption="<?php echo $info ?>"></a><?
     endforeach;
    ?>
    </div>
  </div>
<? endwhile ?>
</div>
<div style="margin-bottom:60px;height:1px;clear:both"></div>

<?php wp_reset_postdata() ?>
<?php get_footer() ?>