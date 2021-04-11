<?php
/*
  Template Name: Portfolio
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

<section class="portfolio-single pt-100 pb-100">
   <div class="container">
      <div class="row">


         <?php


         ?>
         <div class="col-xl-8">
            <?php
            while (have_posts()) {
               the_post();
            ?>
               <h2><?php the_title(); ?></h2>

               <?php the_post_thumbnail(); ?>
               <p><?php the_content(); ?></p>
               <div class="row">
                  <div class="col-xl-12">
                     <h4>project gallery</h4>
                  </div>
                  <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="assets/img/portfolio/1.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="assets/img/portfolio/2.jpg" alt="">
                     </div>
                  </div>
                  <div class="col-xl-4">
                     <div class="project-gallery">
                        <img src="assets/img/portfolio/3.jpg" alt="">
                     </div>
                  </div>
               </div>
               <br><br>
               <div class="row">
                  <div class="col-xl-12">
                     <h4>project overview</h4>
                     <iframe width="560" height="315" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
<!-- Footer Area End -->
<?php get_footer(); ?>
</body>

</html>