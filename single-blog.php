<?php get_header(); 
?>





<main class="main-content">

    <section class="container">


        <?php


while(have_posts()){
    the_post();
?>
        <div class="entry">
            <div class="entry__title"><?php the_title(); ?></div>
            <p class="entry__info">Dodał: <span id="author"> <?php the_author(); ?></span>
                <?php echo get_the_date('j M Y'); ?></p>
            <div class="entry__content"><?php the_content(); ?></div>
        </div>
        <?php
    }

    
?>

    </section>





</main>


<?php
get_footer();
wp_footer();
?>