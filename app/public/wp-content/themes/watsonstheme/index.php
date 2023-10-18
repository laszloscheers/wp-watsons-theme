<?php
    get_header();
?>
<!--Section-->
<section>
    <div class="container-flexbox container-header-section-two-columns">
        <?php
            if( have_posts()){

                while( have_posts() ) {

                    the_post();
                    get_template_part('template-parts/content', 'archive');

                }
            }
        ?>
    </div>
    <?php
        the_posts_pagination();
    ?>
</section>

<?php
    get_footer();
?>