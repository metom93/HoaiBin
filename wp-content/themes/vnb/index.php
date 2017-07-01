<?php get_header(); ?>
<section id="blog" class="container">
   <div class="blog wow bounceInRight">
      <div class="row">
         <div class="col-md-8">
            <div class="blog-item">
               <div class="row">
                  <?php if(have_posts()) : ?>

                  <?php while(have_posts()) : the_post(); ?>

                  <?php get_template_part('content', get_post_format()); ?> 

                  <?php endwhile; ?>

                  <?php else : ?>

                  <p><?php __('No Posts Found'); ?></p>
                  
                  <?php endif; ?>
               </div>
            </div>
            <!--End blog-item-->

            <?php if(paginate_links()!='') {?>
               <ul class="pagination pagination-lg my_pagination">
                  <li>
                     <?php
                         global $wp_query;
                         $big = 999999999;
                         echo paginate_links( array(
                         'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                         'format' => '?paged=%#%',
                         'prev_text'    => __('« Prev'),
                         'next_text'    => __('Next »'),
                         'current' => max( 1, get_query_var('paged') ),
                         'total' => $wp_query->max_num_pages
                         ) );
                     ?>
                  </li>
               </ul>

            <?php } ?>
            <!-- End pagination-->

         </div>
         <!-- End col-md-8-->
      <?php get_sidebar(); ?>
      </div>
      <!-- End row-->
   </div>
</section>
<!-- End blog-->
<?php get_footer(); ?>