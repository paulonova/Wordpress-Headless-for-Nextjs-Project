<?php get_header();?>


<div class="temporary-main">
    <?php
    if (have_posts()) {
      while(have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>
</div>


<?php get_template_part( 'template-parts/theme', 'test');?>  




<?php get_footer();?>  