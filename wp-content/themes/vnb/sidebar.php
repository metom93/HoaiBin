 <aside class="col-md-4">
    <div class="widget search">
       <form role="search" method="get" id="searchForm"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <input value="<?php echo get_search_query(); ?>" name="s" id="s" type="text" class="form-control search_box" autocomplete="off" placeholder="Search Here">
       </form>
    </div>
    <!-- End search-->
    <div class="widget categories">
       <h3>Bài nổi bật</h3>
       <div class="row">
          <div class="col-sm-12">
          <?php
            $args = array('numberposts' =>5, 'orderby'=>'rand');
            $random_posts = get_posts($args);
            foreach($random_posts as $post) : setup_postdata($post);
	      ?>
            <div class="single_box">
	               <a href="<?php the_permalink(); ?>">
					<?php 
	            		the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive img-blog', 'title' => 'Feature image']);
         			?>
	                <p><?php the_title(); ?></p>
	                </a>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
          </div>
       </div>
    </div>
    <!--End comments-->


	<?php if(is_active_sidebar('menu-sidebar')) : ?>
      
          <?php dynamic_sidebar('menu-sidebar'); ?>
      
   	<?php endif; ?>

<!--
	<div class="widget categories">
	    <h3>Categories</h3>
	    <div class="row">
	        <div class="col-sm-6">
	            <ul class="blog_category">
	                <li><a href="#">Smartphone <span class="badge">10</span></a></li>
	                <li><a href="#">Gedgets <span class="badge">06</span></a></li>
	                <li><a href="#">Technology <span class="badge">25</span></a></li>
	            </ul>
	        </div>
	    </div>                     
	</div>
	<!End categories-->

<!-- Tags -->
	<?php if(is_active_sidebar('tags')) : ?>
      <ul class="tag-cloud">
          <li><?php dynamic_sidebar('tags'); ?></li>
      </ul>
   	<?php endif; ?>
<!-- End tags-->
    <?php get_template_part('content-gallery'); ?>
    <!-- End blog_gallery-->
 </aside>