<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Great theme for creative people">
    <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Responsive helper -->

    <!-- Apple devices -->
    <link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-apple.png" /> <!-- 152x152 -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/favicon/favicon.png"> <!-- 32x32 or 64x64 -->

    <!-- For IE -->
    <!--[if IE]><link rel="shortcut icon" href="img/favicon/favicon.ico"><![endif]--> <!-- 16x16 -->

    <!-- For Mobile Windows -->
    <meta name="msapplication-TileColor" content="#D83434">
    <meta name="msapplication-TileImage" content="img/favicon/favicon.png"> <!-- 32x32 or 64x64 -->
    
    <!-- Fonts
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700'  rel='stylesheet' type='text/css'>
    -->
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/screen.css">

    <script src="<?= base_url(); ?>assets/js/modernizr.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
    
</head>
<body>
    <div class="page-content show-content">
        <div class="section section-nav">
            <div class="container">
                <div class="row relative">
                    <div class="col-md-5 nav-wrap">
                        <nav class="main-nav to-left responsive-nav"> <!-- .mega-menu helper class ued as switcher -->
                            <ul class="clean-list clearfix "> <!-- .to-right, to-left, .center-me helper class-->
                                <li class="">
                                    <a href="<?= base_url();?>">Home</a><br>
                                    <div class="fb-like" data-href="https://facebook.com/kendysonco" data-layout="button" data-action="like" data-show-faces="false" data-share="true"></div>
                        
                                </li>
                            </ul>
                        </nav><!-- /.main-nav -->
                    </div>

                    <div class="col-md-2 ">
                        <div class="logo aligncenter">
                            <div class="identity">
                                <a href="<?= base_url(); ?>" title="home" rel="home">
                                    <img src="<?= base_url(); ?>assets/images/icc.png" alt="#ICanCook">
                                </a>
                                
                         </div>
                         </div>
                        <div class="menu-button alignleft"></div>
                    </div>

                    <div class="col-md-5 nav-wrap">
                        <nav class="main-nav to-right responsive-nav"> <!-- .mega-menu helper class ued as switcher -->
                            <ul class="clean-list clearfix "> <!-- .to-right, to-left, .center-me helper class-->
                                <li class="">
                                    <a href="<?= base_url('add');?>">Add Your Recipe</a>
                                    <a class="twitter-follow-button"
                                      href="https://twitter.com/kendysond"
                                      data-show-count="false"
                                      data-lang="en">
                                    Follow Us
                                    </a>
                                    <script>window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return t;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));</script>
                           
                                </li>
                            </ul>
                        </nav><!-- /.main-nav -->
                    </div>
                </div>
            </div>
        </div>
