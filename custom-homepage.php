<?php
/**
/* Template Name: Home
 *
 * Displays Only Home template
 *
 * @package WordPress
 * @subpackage buildline
 * @since buildline 1.0
 */
 get_header(); ?>

    <section class="banner-wrapper">
      <div id="banner-slider" class="owl-carousel">

            <?php
                $args = array( 'post_type' => 'slider', 'order' => 'ASC', 'posts_per_page' => -1 );
                $myposts = get_posts( $args );
                foreach ( $myposts as $post ) : setup_postdata( $post );
                $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                
            ?>

        <div class="banner-slider-wrap">
          <img class="img-fluid" src="<?php echo $informationimage[0]; ?>">
        </div>
        
        <?php
           endforeach; 
           wp_reset_postdata();
        ?> 
      
      </div>
      <div class="banner-content-wrap">
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-8">
            <?php $top = get_field('slider_group'); ?>  
            <div class="banner-content">
                <div class="h1">
                  <?php echo $top['top_text']; ?>
                </div>
                <div class="h2">
                <?php echo $top['heading']; ?>
                </div>
                <!-- <div class="h1">
                <?php the_excerpt(); ?>
                </div> -->
                <p><?php echo $top['paragraph']; ?></p>
               
                <div class="bnr-form-wrap">
					
                  <form>
                    <div class="form-row">
                      <div class="col-12 col-md-4 mb-2 mb-md-0">
						      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Moving From" required>
<!--                         <select class="form-control">
                          <option>From suburb</option>
                          <option>From suburb</option>
                          <option>From suburb</option>
                        </select> -->
                      </div>
                      <div class="col-12 col-md-4 mb-2 mb-md-0">
						  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Moving To" required>

<!--                         <select class="form-control">
                          <option>To suburb</option>
                          <option>To suburb</option>
                          <option>To suburb</option>
                        </select> -->
                      </div>
                      <div class="col-12 col-md-3">
                        <a href="https://bisontransport.com.au/request-a-quote/"><input class="btn btn-success" type="button" name="" value="Start Moving"></a>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php $about = get_field('about_us'); ?>
    
    <section class="about-us-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-5 mb-4">
            <div class="left-img">
              <img class="img-fluid" src="<?php echo $about['featured_image']; ?>" alt="">
            </div>
          </div>
          <div class="col-12 col-md-7">
            <div class="about-right-content">
              <div class="abt-text">
                <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/about-text-img1.png" alt="">
              </div>
              
              <h5><?php echo $about['paragraph_1']; ?></h5>
              <p><?php echo $about['paragraph_2']; ?></p>
              
              <a class="btn btn-success" href="<?php echo $about['button_url']; ?>"> <?php echo $about['button_text']; ?></a>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="about-bottom-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="bison-text-img-wrap">
              <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bison-text-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <section class="services-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-4 text-center">
            <div class="srv-text-img">
              <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/srv-text-img1.png" alt="">
            </div>
            <div class="comon-title">
              <h3>Professional Local and Interstate Removals in Melbourne</h3>
            </div>
          </div>
          <?php
                  $args = array( 'post_type' => 'services', 'order' => 'ASC', 'posts_per_page' => -1 );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post );
                  $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                  
              ?> 
          <div class="col-12 col-md-6 col-lg-3 mb-4">
          <div class="services-wrap">
              <div class="srv-img">
                <img class="img-fluid" src="<?php echo $informationimage[0]; ?>">
              </div>
              <div class="srv-top-left-img">
                <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/srv-top-left-img1.png" alt="">
              </div>
              <?php $link = get_field('services_link'); ?>
              <div class="srv-content">
                <div class="title">
                  <h4><a href="<?php echo $link['page_url']; ?>"><?php the_title(); ?></a></h4>
                </div>
                <div class="count">
                  <span><?php the_excerpt(); ?></span>
                </div>
              </div>
            </div>
          </div>
          <?php
           endforeach; 
           wp_reset_postdata();
          ?> 
        </div>
      </div>
    </section>

    <section class="our-clients-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4 text-center">
                    <div class="comon-title" style="margin-top: 5px;">
                        <h3>Our Trusting Clients</h3>
                    </div>
                </div>
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo1.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo2.jpeg" alt="">
                    </div>
                </div> -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://wefreelancer.in/bisontransport/wp-content/uploads/2021/11/client_logo4.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://wefreelancer.in/bisontransport/wp-content/uploads/2021/11/client_logo31.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo5.jpeg" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://wefreelancer.in/bisontransport/wp-content/uploads/2021/11/client_logo2.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://wefreelancer.in/bisontransport/wp-content/uploads/2021/11/fof-logo_1610497278__92521.original.png" alt="">
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://wefreelancer.in/bisontransport/wp-content/uploads/2021/11/CATALANOLOGOWHGR.jpg" alt="">
                    </div>
                </div>
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo9.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo10.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo11.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo12.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo13.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo14.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo15.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo16.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo17.jpeg" alt="">
                    </div>
                </div> -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo18.jpeg" alt="">
                    </div>
                </div>
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo19.jpeg" alt="">
                    </div>
                </div> -->
<!--                 <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="clients-logo-wrap">
                        <img class="img-fluid" src="https://victoriantreecompany.com.au/wp-content/themes/VTC/images/clients-logo20.jpeg" alt="">
                    </div>
                </div> -->

            </div>
        </div>
    </section>

   
    <section class="how-we-work-wrapper" style="margin-top: -2%;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12 mb-4">
            <div class="comon-title">
              <h3><span><img class="img-fluid" src="https://wefreelancer.in/bisontransport/wp-content/uploads/2021/11/how-we-work-img.png" alt=""></span></h3>
            </div>
          </div>
               
          
          <?php
                  $args = array( 'post_type' => 'process', 'order' => 'ASC', 'posts_per_page' => -1 );
                  $myposts = get_posts( $args );
                  foreach ( $myposts as $post ) : setup_postdata( $post );
                  $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                  
              ?>  
          <div class="col-12 col-sm-6 col-md-4 col-lg mb-4"> 
            <div class="how-we-work-list">
              <div class="count">
              <?php $num = get_field('counter'); ?>  
              <span><?php echo $num['number']; ?></span>
              </div>
              <h4><?php the_title(); ?></h4>
              <p><?php the_content(); ?></p>
            </div>
          </div>

          <?php
           endforeach; 
           wp_reset_postdata();
          ?> 
         

        </div>
        
      </div>
      
    </section>
  
    <section id="gallery" class="gallery-wrapper">
        <div class="container-fluid">
            <div class="row">
              <div class="col-12 mb-4">
                <div class="gallery-title-text">
                  <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery-title-text-img1.png" alt="">
                </div>
              </div>
            </div>
            <div id="image-gallery">
                <div class="row">
                    <div class="col-12">
                      <div id="gallery-slider" class="owl-carousel">
                     
                     <?php
                        $args = array( 'post_type' => 'gallery', 'order' => 'ASC', 'posts_per_page' => -1 );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                        $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                    ?>  
                        <div class="gallery-slider-item image">
                          <div class="img-wrapper">
                            <a href="<?php echo $informationimage[0]; ?>"><img src="<?php echo $informationimage[0]; ?>" class="img-responsive"></a>
                            <div class="img-overlay">
                              <div class="icon"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/
images/gallery-zoom-icon.png"></div>
                            </div>
                          </div>
                        </div>
                        
                        <?php
                        endforeach; 
                        wp_reset_postdata();
                        ?> 
                       
                      </div>
                    </div>
                                                           

                </div>
            </div>
        </div>
    </section>

    <section class="testimonials-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div id="testimonials-slider" class="owl-carousel">

                    <?php
                        $args = array( 'post_type' => 'testimonials', 'order' => 'ASC', 'posts_per_page' => -1 );
                        $myposts = get_posts( $args );
                        foreach ( $myposts as $post ) : setup_postdata( $post );
                        $informationimage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID),'true');
                    ?>  

                <div class="testimonials-sld-item">
                  <div class="testimonials-wrap">
                      <div class="testmon-img">
                          <img class="img-fluid" src="<?php echo $informationimage[0]; ?>">
                      </div>
                      <p><?php the_content(); ?></p>
                      <h4><?php the_title(); ?></h4>
                  </div>
                </div>

                <?php
                  endforeach; 
                  wp_reset_postdata();
                ?> 
                
            </div>

          </div>
        </div>
      </div>
    </section>

    

    <?php get_footer(); ?>
