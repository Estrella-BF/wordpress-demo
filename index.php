<?php get_header(); ?>

<div class="all_content">
<?php
  if ( have_posts() ) {
    if ( is_home() && ! is_front_page() ) {
      while ( have_posts() ) {
        the_post();
      }
    }
  } else {
    echo "sin post";
  }

  get_sidebar();
?>
</div>
<?php get_footer(); ?>