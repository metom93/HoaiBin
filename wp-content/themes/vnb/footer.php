<section id="bottom" class="wow bounceInRight">
   <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
      <div class="row">
         <div class="col-md-3 col-sm-6">
         <?php if(is_active_sidebar('category-footer')) : ?>
      
          <?php dynamic_sidebar('category-footer'); ?>

         <?php endif; ?>
         </div>
         <!--End col-md-3-->

         <div class="col-md-3 col-sm-6">
            <?php if(is_active_sidebar('hotro')) : ?>
      
            <?php dynamic_sidebar('hotro'); ?>

            <?php endif; ?>
         </div>
         <!--End col-md-3-->

         <div class="col-md-3 col-sm-6">
            <?php if(is_active_sidebar('dichvu')) : ?>
      
            <?php dynamic_sidebar('dichvu'); ?>

            <?php endif; ?>
         </div>
         <!--End col-md-3-->

         <div class="col-md-3 col-sm-6">
            <?php if(is_active_sidebar('lienket')) : ?>
      
            <?php dynamic_sidebar('lienket'); ?>

            <?php endif; ?>
         </div>
         <!--End col-md-3-->
      </div>
   </div>
</section>
<!--End bottom-->
<footer id="footer" class="midnight-blue wow bounceInUp">
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            &copy; 2017 <a target="_blank" href="http://hoaibin.com/" title="">Website</a>. All Rights Reserved.
         </div>
         <div class="col-sm-6">
            <?php if(is_active_sidebar('footermenu')) : ?>
      
            <?php dynamic_sidebar('footermenu'); ?>

            <?php endif; ?>
         </div>
      </div>
   </div>
</footer>
 <?php wp_footer(); ?>
<!--End footer-->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/main.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>
</body>
</html>