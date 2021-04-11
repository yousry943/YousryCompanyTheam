<?php

get_header();
?>
<div class="breadcumb">
    <?php
    while (have_posts()) {
        the_post();

    ?>
        <h4><?php the_title(); ?></h4>
        <ul>
            <li><a href="<?php echo site_url(); ?>"> </a>Home</li> /
            <li>Single Blog</li>
        </ul>
    <?php
    }
    ?>
</div>


<?php
get_footer();
?>