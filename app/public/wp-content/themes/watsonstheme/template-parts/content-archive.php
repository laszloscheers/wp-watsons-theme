<div class="container">
        <img class="mr3 img-fluid d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" >
        <h3><a href="<?php the_permalink(); ?>" ><?php the_title() ?> </a></h3>
        <h5> <?php the_date();  ?> <i class='fa fa-comment'></i> <?php comments_number(); ?> </h5>
        <p> <?php the_content(); ?> </p>
        <i><b> <?php the_excerpt(); ?> </b></i>
        <a href="<?php the_permalink(); ?>" >Read More </a>

</div>