<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>Company | Onepage Multipurpose Website</title>

    <?php wp_head(); ?>
</head>

<body>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="header-left">
                        <?php $config = get_option('company_options'); ?>
                        <a href="mailto: <?php echo $config['header_email']; ?>"><i class="fa fa-envelope"></i> <?php echo $config['header_email']; ?></a>
                        <a href=""><i class="fa fa-phone"></i> <?php echo $config['header_phone']; ?></a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="header-social">
                        <?php
                        $header_icons = $config['header_icones'];
                    
                        foreach ($header_icons  as  $header_icon) {
                        ?>
                            <a href="<?php echo $header_icon['social_link'] ;?>"><i class="<?php echo $header_icon['social_icon']; ?>"></i></a>
                        <?php

                        }
                        ?>
     
     
                  
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Area Start -->
    <header class="header header-fixed">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="<?php echo site_url(); ?>">Company</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ml-auto mainmenu 
                        justify-content-end " id="navbarNav">


                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'main-menu',
                                'menu_class' => 'navbar-nav ml-auto'
                            ));
                            ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area Start -->