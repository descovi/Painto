
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <div class="box-header">
      <div class="box-color-decoration"></div><!--.box-yellow-->
      <h1 class="entry-title">
        <?php the_title(); ?>
      </h1><!--.entry-title-->
    </div><!--.box-header-->
  <div class="entry-content">
    
    <?php 
    // se è diversa da resume mostra la pagina normalmente... altrimenti :)
    if ($pagename != 'resume'):
      the_content();
    else: ?> 
    <div class="col1"> <?php
    $members = get_group('lavoro');
      foreach ($members as $key => $value):
        $nome_lavoro = get('lavoro_nome',$key,$value);  
        $anno = get('lavoro_anno',$key,$value) ;
        $nome_progetto = get('lavoro_nome_progetto',$key,$value) ;
        $mansione = get('lavoro_mansione',$key,$value) ;
        ?>
      <div class="box_work">
        <div class="first_row"><strong><?= $nome_lavoro?></strong> <span><?= $anno?></span></div>
        <div class="second_row"><?= $nome_progetto?></div>
        <div class="third_row"><em><?= $mansione?></em></div>
      </div><!--.box_work-->
        <?

      endforeach;
      ?></div><!--.col1-->
      <div class="col2">
      <? the_content() ?>
      </div><!--.col2--><?
    endif;

    ?>

    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->