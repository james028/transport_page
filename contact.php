<?php /* Template Name: contact */ ?>
 
<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col s12 m12">
            <div class="background-img" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/mb.jpg); width: 100%; height: 300px;">
                <div class="back-img-gradient">
                    <p>Kontakt</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row under-contact">
        <div class="col s12 m4 center-align">
            <i class="fas fa-phone-volume"></i>
                    <div class="contact-row">
                    Piotr Korecki <br>
                    E-mail: koreckibus@wp.pl<br>
                    Telefon: 509-232-160<br>
                    NIP: 717 183 33 02<br>
                    REGON: 36 96 02 894
                    </div>
        </div>
        <div class="col s12 m4 center-align">
        <i class="fas fa-map-marked-alt"></i>
                    <div class="contact-row">
                    Siedziba firmy: <br>
                    ul. Kraczewicka 29/56<br>
                    24-320 Poniatowa
                    </div>
        </div>
        <div class="col s12 m4 center-align">
        <i class="fas fa-map-marker-alt"></i>
                    <div class="contact-row">
                    Biuro firmy: <br>
                    ul. Rynek 24/24<br>
                    23-235 Annopol
                    </div>
        </div>
    </div>
</div>
<div id="map" style="height: 400px; width; 100%;"></div>
        <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
 
            // Include the page content template.
            //get_template_part( 'template-parts/content', 'page' );
 
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
 
            // End of the loop.
        endwhile;
        ?>

<?php get_footer(); ?>