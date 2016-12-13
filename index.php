<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package New_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area col-sm-8">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>












          <!-- Service Section Starts -->
          <section id="services" class="">

            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <header class="service-header text-center">
                    <h1 class="section-title">
                      Our Services
                    </h1>
                    <p class="section-description">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui ipsum rerum pariatur unde, quam quos, molestiae quas cum, tempore aliquid officiis delectus. Modi, esse asperiores.
                    </p>
                  </header>
                </div>
<?php $args = array (
            'post_type' => 'wpbs_service',
            'posts_per_page' => -1,
            'wpbs_service_cat' => 'web-design',
            'orderby' => 'menu_order',
            'order' => 'DESC',
        );
        $service_query = new WP_Query($args);
        
        if ( $service_query->have_posts() ) :
      ?>
      
        <?php while ( $service_query->have_posts() ) : $service_query->the_post(); ?>

        <?php $service_icon = get_post_meta($post->ID, 'wpbs_service_icon', true); ?>
        
      
          <div class="col-sm-4">
            <div class="single-services">
              <i class="fa fa-<?php echo $service_icon; ?> fa-5x"></i>
              <h4><?php the_title(); ?></h4>
              <?php the_content(); ?>
            </div>  <!-- .single-service -->
          </div>  <!-- .col --> 
          
      
        <?php endwhile; ?>
      
      <?php endif; wp_reset_query(); ?>





                </div>
              </div>

          </section>
          <!-- Service Section Ends -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
get_sidebar();























