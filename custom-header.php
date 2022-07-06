<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Google Verification Code -->
	
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?> </title>
    <!-- Bootstrap -->
    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" type="image/x-icon">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/gallery.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet" media="all">
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet" media="all">
    
    <?php wp_head(); ?>
 
	  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CXYWCD0YMQ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CXYWCD0YMQ');
</script>
	  
</head>
  <body>
    <header class="header-wraper">
      <div class="container">
          <div class="row">
              <div class="col-12 col-md-3">
                  <div class="logo-wrap">
                       <a href="https://bisontransport.com.au/">
                            <?php 
                                    if ( function_exists( 'the_custom_logo' ) ) {
                                        the_custom_logo();
                                    }
                                ?>                     
                        </a>
                  </div>
              </div>
              <div class="col-12 col-md-9">
                    <div class="hed-contact-info">
                        <ul>
                            <li>
                                <div class="info-list">
                                    <div class="icon">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="info">
                                        <p>Monday – Friday : 8 AM – 6 PM&nbsp Saturday : 9 AM – 1 PM</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-list">
                                    <div class="icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="tel:0422 073 361">0422 073 361</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="info-list">
                                    <div class="icon">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="mailto:info@bisontransport.com.au">info@bisontransport.com.au</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <ul class="hed-social-icon">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                        <?php 

                            $header = array(
                            'theme_location'  => '',
                            'menu'            => 'header-menu',
                            'container'       => 'navbar',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'navbar-nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            // 'walker'        => new bootstrap_navwalker()
                            );

                            wp_nav_menu( $header );

                            ?>          
                            
                        </div>
                        <div class="hed-get-quote-btn">
                          <a class="btn btn-success" href="#" data-toggle="modal" data-target="#GetQuoteModal">Get A Quote</a>
                        </div>
                    </nav>
              </div>
          </div>
      </div>
    </header>
