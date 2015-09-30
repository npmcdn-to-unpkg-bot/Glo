<!doctype html>
<html class="no-js" {{ language_attributes() }}>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php echo wp_head(); ?>
  <link href="<?php echo get_template_directory_uri(); ?>/assets/owl/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/owl/owl.theme.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!-- Typekit -->
  <script src="//use.typekit.net/cmt2uhr.js"></script>
  <script>try{Typekit.load({ async: true });}catch(e){}</script>
</head>

<body <?php body_class( $class ); ?>> 

  <header class="site-header">
    <div class="topper">
      <div class="container">
        <div class="row">
          <div class="social col-md-6">
            <a href="https://www.facebook.com/glowindows" target="_blank"><i class="icon-facebook-circled"></i></a>
            <a href="https://twitter.com/GloWindows" target="_blank"><i class="icon-twitter-circled"></i></a>
            <a href="https://www.pinterest.com/GloWindows/" target="_blank"><i class="icon-pinterest-circled"></i></a>
            <a href="#" target="_blank"><i class="icon-gplus-circled"></i></a>
            <a href="http://www.houzz.com/pro/glowindows/glo-european-windows" target="_blank"><i class="icon-record"></i></a>
          </div>
          <div class="contact col-md-6">
            <p>(406) 721-2741<a href="#" class="switch quote-btn" gumby-trigger="#modal1">Request A Quote</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="logo">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png"></a>
    </div>
    <div class="logo-sm">
      <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-sm-white.png"></a>
    </div>
    <div class="nav">
      <div class="container">
        <div class="row">
          <div class="col-md-12">  
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- .wrapper closes in footer -->
  <div class="row">
    <div class="twelve columns wrapper">