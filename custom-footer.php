<footer class="footer-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="footer-inner-wrap">
              <div class="footer-logo">
                <a href="https://bisontransport.com.au/">
                  <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png" alt="">
                </a>
              </div>
              <div class="footer-social-icon">
                  <ul>
                      <li>
                          <a href="#">
                              <i class="fa fa-facebook" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="fa fa-twitter" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="fa fa-instagram" aria-hidden="true"></i>
                          </a>
                      </li>

                  </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="footer-inner-wrap">
              <h3>Navigate Us</h3>
              <div class="footer-menu">
                <ul>
                  <li>
                    <a href="https://bisontransport.com.au/">Home</a>
                  </li>
                  <li>
                    <a href="https://bisontransport.com.au/about-us/">About Us </a>
                  </li>
                  <li>
                    <a href="https://bisontransport.com.au/services/">Services</a>
                  </li>
                  <li>
                    <a href="https://bisontransport.com.au/testimonials/">Testimonials</a>
                  </li>
                  <li>
                    <a href="https://bisontransport.com.au/contact-us/">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">

          <?php dynamic_sidebar( 'footer_area_one' ); ?>

          </div>
          <div class="col-12 col-md-6 col-lg-3 mb-4">
            <div class="footer-inner-wrap">
              <h3>Our Details</h3>
              <?php dynamic_sidebar( 'footer_area_two' ); ?>
              <?php dynamic_sidebar( 'footer_area_three' ); ?>
              <?php dynamic_sidebar( 'footer_area_four' ); ?>

            </div>
          </div>

          <div class="col-12">
              <div class="foot-copy">
                  <p>Copyright © 2021. All Rights Reserved. Designed by <span style="color: #fff; font-weight: 400;">Webmatrix Solutions</span></p>
              </div>
          </div>

        </div>
      </div>
    </footer>

     <!-- The GET A QUOTE Modal start -->
    <div class="modal fade quick-quote-wraper" id="GetQuoteModal">
      <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i> </button>

            <div class="quick-quote-form col-12">
                <div class="title mb-3">
                  <h3> Get A Quote </h3>
                </div>
               <?php echo do_shortcode('[contact-form-7 id="26" title="Contact form 1"]'); ?>
            </div>
        </div>
      </div>
    </div>
    <!-- The GET A QUOTE Modal end -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/popper.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/gallery.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/external.js"></script>
  
 <?php wp_footer(); ?>
    
  </body>
</html>
