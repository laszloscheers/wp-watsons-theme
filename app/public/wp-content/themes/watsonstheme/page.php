<section>
    <div class="container-flexbox container-header-section-two-columns">
        <?php
            if( have_posts()){

                while( have_posts() ) {

                    the_post();
                    get_template_part('template-parts/content', 'page');

                }
            }
        ?>
    </div>
</section>
<?php
    get_footer();
?>