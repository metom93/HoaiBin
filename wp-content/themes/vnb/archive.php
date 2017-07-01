<?php get_header(); ?>
<section id="blog" class="container">
   <div class="blog">
      <div class="row">
         <div class="col-md-8">
            <div class="blog-item">
               <div class="row">
                  <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>
                  <?php get_template_part('content'); ?>  
                  <?php endwhile; ?>
                  <?php else : ?>
                  <p><?php __('No Posts Found'); ?></p>
                  <?php endif; ?>
               </div>
            </div>
            <!--/.blog-item-->  
         </div>
         <!--/.col-md-8-->
         <?php get_sidebar(); ?>

      </div>
      <!--/.row-->
   </div>
</section>
<!--/#blog-->
<?php get_footer(); ?>