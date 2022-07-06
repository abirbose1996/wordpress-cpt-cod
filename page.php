<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
while ( have_posts() ) : the_post();
get_header(); ?>

<section class="inner-banner">
      <img class="img-fluid" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/inner-banner-img1.jpg" alt="">
      <div class="inner-banner-cont">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1> <?php the_title(); ?> </h1>
                </div>
            </div>
        </div>
      </div>
    </section>

	<section class="services-details-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 mb-4">
              <div class="srv-left-img">
                  <img class="img-fluid" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>">
              </div>
          </div>
          <div class="col-12 col-md-8">
              <div class="cms-content">
<!--                   <h3><?php the_title(); ?></h3> -->
                  <!-- <h4>Excepteur sint occaecat</h4> -->
                  <p><?php the_content(); ?></p>
                  <!-- <ul>
                      <li>reprehenderit in voluptate</li>
                      <li>Duis aute irure dolor</li>
                      <li>reprehenderit in voluptate</li>
                      <li>reprehenderit in voluptate</li>
                      <li>Duis aute irure dolor</li>
                      <li>reprehenderit in voluptate</li>
                  </ul> -->
              </div>
          </div>
        </div>
      </div>
    </section>


<?php
endwhile;
 get_footer(); ?>
