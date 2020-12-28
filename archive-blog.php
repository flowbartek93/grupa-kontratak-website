<?php get_header(); 
?>




<main class="main-content">

    <section class="container">


        <?php


while(have_posts()){
    the_post();
?>
        <div class="entry">
            <a class="permalink" href="<?php echo get_the_permalink();?>">
                <?php the_title(); ?>
            </a>

            <p class="entry__info">Dodał: <span id="author"> <?php the_author(); ?></span>
                <?php echo get_the_date('j M Y'); ?></p>
            <div class="entry__content"><?php echo wp_trim_words(get_the_content(), 30)?></div>



            <a href="<?php echo get_the_permalink();?>">
                <button class="entry__readmore">
                    Czytaj dalej...
                </button>
            </a>
        </div>
        <hr class="divider">
        <?php
    }

    
?>

    </section>



</main>


<?php
get_footer();
wp_footer();
?>