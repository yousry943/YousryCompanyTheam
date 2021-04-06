 <h2><?php the_title() ?></h2>
 <?php the_post_thumbnail()  ?>
 <?php the_content() ?>
 <div class="comments">
 <?php comment_form() ?>
     <!-- <h4>leave a reply</h4>
     <form action="">
         <input type="text" placeholder="Name">
         <input type="text" placeholder="Email">
         <input type="text" placeholder="Subject">
         <textarea placeholder="Message"></textarea>
         <input type="submit" value="Send">
     </form> -->
 </div>