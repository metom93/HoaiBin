<div class="col-xs-12 col-sm-2 text-center blog_author">
   <div class="entry-meta">
      <span id="publish_date"><?php the_time('F j, Y g:i a'); ?></span>
      <span><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>
      <span><i class="fa fa-comment"></i> <a href="blog-item.html#comments">0 Comments</a></span>
      <span><i class="fa fa-heart"></i><a href="#">300 Likes</a></span>
   </div>
</div>
<div class="col-xs-12 col-sm-10 blog-content" >

   <?php if(is_single()) : ?>
   <!-- file single -->
   <h2><?php the_title(); ?></h2>
   <?php if(has_post_thumbnail()) : ?>
   <?php 
      the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive img-blog', 'title' => 'Feature image']);
      ?>
   <?php endif; ?>
   <h3><?php the_content(); ?></h3>
   <hr>
   <!-- Comment -->
   <?php comments_template(); ?>
   <?php else : ?>

   <!-- file content -->
   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
   <?php if(has_post_thumbnail()) : ?>
   <a href="<?php the_permalink(); ?>">
      <!--
         <img class="img-responsive img-blog" width="100%" alt="" src="<?php the_post_thumbnail(); ?>"/>
         -->
      <?php 
         the_post_thumbnail('post-thumbnail', ['class' => 'img-responsive img-blog', 'title' => 'Feature image']);
      ?>
   </a>
   <?php endif; ?>
   <h3><?php the_excerpt(); ?></h3>
   <a class="btn btn-primary readmore" href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right"></i></a>
   <?php endif; ?>

</div>