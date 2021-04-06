<?php
get_header();
?>
<section class="breadcumb-area">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <div class="breadcumb">
               <h4>Blog</h4>
               <ul>
                  <li><a href="<?php echo site_url(); ?>"></a>Home</li> /
                  <li>Blog</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="blog-area pb-100 pt-100" id="blog">
   <div class="container">
      <div class="row">

         <?php
         $arg = array(
            'post_type' => 'post',
            'posts_per_page' => 6
         );
         $query =  new  WP_Query($arg);
         while ($query->have_posts()) {
            $query->the_post();
            // $sub_heading = get_post_meta(get_the_ID(), 'sub_heading', true);
            // $text_field = get_post_meta(get_the_ID(), 'text_field', true);
            // $link_field = get_post_meta(get_the_ID(), 'link_field', true);


         ?>

            <div class="col-md-4">
               <div class="single-blog">

                  <?php the_post_thumbnail()  ?>
                  <div class="post-content">
                     <div class="post-title">
                        <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
                     </div>
                     <div class="pots-meta">
                        <ul>
                           <li><?php the_category() ?></li>
                           <li><a href="#"><?php echo get_the_date(); ?></a></li>
                           <li><a href="#"><?php echo get_the_author(); ?></a></li>
                        </ul>
                     </div>
                     <?php the_excerpt() ?>
                     <a href="<?php the_permalink() ?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         <?php
         }
         wp_reset_postdata();
         ?>

      </div>

      <div class="row">
         <div class="col-xl-12">
            <?php 
            posts_nav_link('-',('Previous Posts'),('Next'));
            ?>
         </div>
      </div>
</section>
<!-- Latest News Area End -->
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