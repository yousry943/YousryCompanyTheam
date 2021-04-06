<?php
/*
  Template Name: Services
*/
get_header();
?>
<!-- Header Area Start -->
<section class="breadcumb-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="breadcumb">
               <?php get_template_part('inc/breadcumb'); ?>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- Services Area Start -->
<section class="services-area pt-100 pb-50" id="services">
   <div class="container">
      <div class="row">

         <?php
         $arg = array(
            'post_type' => 'service',
            'posts_per_page' => -1
         );
         $query =  new  WP_Query($arg);
         while ($query->have_posts()) {
            $query->the_post();
            $service_icon = get_post_meta(get_the_ID(), 'service_icon', true);
           

         ?>
            <div class="col-lg-4 col-md-6">
               <!-- Single Service -->
               <div class="single-service">
                  <i class="<?php echo $service_icon; ?>"></i>
                  <h4><?php the_title()?> </h4>
                  <p><?php the_content() ?></p>
               </div>
            </div>

         <?php
         }
         wp_reset_postdata();
         ?>




      </div>
   </div>
</section>
<!-- Services Area End -->
<!-- CTA Area Start -->
<section class="cta">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h4>best solution for your business <span>the can be used on larger scale projectss as well as small scale projectss</span></h4>
         </div>
         <div class="col-md-6 text-center">
            <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
         </div>
      </div>
   </div>
</section>
<!-- CTA Area End -->
<?php get_footer(); ?>
</body>

</html>