<?php /* Template Name: gallery */ ?>
 
<?php get_header(); ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col s12 m12">
                    <div class="background-img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/mb.jpg); width: 100%; height: 300px;">
                        <div class="back-img-gradient">
                            <p>Zdjęcia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            // Include the page content template.
            get_template_part( 'template-parts/content', 'page' );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
 
            // End of the loop.
        endwhile;
        ?>

<?php get_footer(); ?>