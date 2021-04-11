<?php
/*
  Template Name: Portfolio
*/
get_header();
?>
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

<!-- projectss Area Start -->
<section class="projects-area pb-100 pt-100" id="projects">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="portfolio-menu mb-40 text-center">
               <button class="active" data-filter="*">ALL</button>

               <?php
               $portfolio_menus =  get_terms('portfolio-cat');
               foreach ($portfolio_menus as  $portfolio_menu) {
               ?>
                  <button data-filter=".<?php echo $portfolio_menu->slug; ?>" class=""> <?php echo $portfolio_menu->name; ?></button>


               <?php

               }
               ?>

            </div>
         </div>
      </div>
      <div class="row grid no-gutters">

         <?php
         $arg = array(
            'post_type' => 'portfolio',
            'posts_per_page' => 10
         );
         $query =  new  WP_Query($arg);
         while ($query->have_posts()) {
            $query->the_post();
            // $normal_image = get_field('normal_image');
            // $big_image = get_field('big_image');


         ?>


            <div class="col-md-4 grid-item <?php
                                             $portfolio_menus =  get_the_terms(get_the_ID(), 'portfolio-cat');
                                             foreach ($portfolio_menus as  $portfolio_menu) {
                                                echo  $portfolio_menu->slug;
                                             }
                                             ?>
                                             ">
               <div class="single-portfolio">
                  <?php the_post_thumbnail()  ?>
                  <div class="portfolio-hover">
                     <div class="portfolio-content">
                        <h3><a href="<?php the_permalink() ?>" class=""><i class="fa fa-link"></i> <?php the_title(); ?> <span><?php echo  $portfolio_menu->slug; ?></span></a></h3>
                     </div>
                  </div>
               </div>
            </div>
         <?php
         }
         wp_reset_postdata();
         ?>

      </div>
   </div>
</section>
<!-- projectss Area End -->
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