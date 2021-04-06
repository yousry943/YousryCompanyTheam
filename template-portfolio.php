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
               <button data-filter=".cat1" class="">Business </button>
               <button data-filter=".cat2" class="">Finance</button>
               <button data-filter=".cat3">Marketing</button>
               <button data-filter=".cat4">Idea</button>
            </div>
         </div>
      </div>
      <div class="row grid no-gutters">
         <div class="col-md-4 grid-item cat3 cat2">
            <div class="single-portfolio">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/01.jpg" alt="">
               <div class="portfolio-hover">
                  <div class="portfolio-content">
                     <h3><a href="portfolio-single.html" class=""><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 grid-item cat2 cat1 cat3">
            <div class="single-portfolio">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/02.jpg" alt="">
               <div class="portfolio-hover">
                  <div class="portfolio-content">
                     <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 grid-item cat2 cat4 cat3">
            <div class="single-portfolio">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/03.jpg" alt="">
               <div class="portfolio-hover">
                  <div class="portfolio-content">
                     <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 grid-item cat2 cat5 cat1">
            <div class="single-portfolio">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/04.jpg" alt="">
               <div class="portfolio-hover">
                  <div class="portfolio-content">
                     <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 grid-item cat1 cat4 cat5">
            <div class="single-portfolio">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/05.jpg" alt="">
               <div class="portfolio-hover">
                  <div class="portfolio-content">
                     <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-4 grid-item cat1 cat4 cat3">
            <div class="single-portfolio">
               <img src="<?php echo get_template_directory_uri() ?>/assets/img/projects/06.jpg" alt="">
               <div class="portfolio-hover">
                  <div class="portfolio-content">
                     <h3><a href="portfolio-single.html"><i class="fa fa-link"></i> project name <span>branding</span></a></h3>
                  </div>
               </div>
            </div>
         </div>
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