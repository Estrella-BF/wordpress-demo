<div class="all_content_template">
<div id="<?php the_ID(); ?>" <?php post_class('page_post'); ?> >
<?php 

		if ( has_post_thumbnail() ){
      echo '<h1>hay imagen</h1>'
      the_post_thumbnail()
    } else {
      echo '<h1>No hay imagen</h1>'
    }
  ?>
  </div>
</div>