<?php
/*
Template name: Главная страница
 */

get_header();
$sp_obj = new SpClass();

while (have_posts()) : the_post(); ?>

   <div class="container">
      <?php the_content(); ?>
   </div>

<?php endwhile;

get_sidebar();
get_footer();
