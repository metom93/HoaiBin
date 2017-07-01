<?php get_header(); ?>
<section id="blog" class="container">
   <div class="blog">
      <div class="row">
         <div class="col-md-8">
            <div class="blog-item">
               <div class="row">
                  <?php if(have_posts()) : ?>
                  <?php while(have_posts()) : the_post(); ?>
                  <div class="col-xs-12 col-sm-2 text-center">
                     <div class="entry-meta">
                        
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-10 blog-content" >
                     <h2><?php the_title(); ?></h2>
                     <h3><?php the_content(); ?></h3>
                  </div>
                  <?php endwhile; ?>
                  <?php else : ?>
                  <p><?php __('No Page Found'); ?></p>
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