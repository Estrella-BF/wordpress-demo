<?php
if ( post_password_required ) {
  echo 'post password required';
} 
?>

<div id="comments_template">
  <?php
    if ( have_comments() ) {
      ?>
      <h3>
      <?php
        printf('Mostrando 5 comentarios', get_comments_number(3));
      ?>
      </h3>
      <?php
    }
  ?>
</div>