<?php get_header(); 
?>



<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v8.0"
    nonce="G0MoixAl"></script>

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
            <div class="entry__content"><?php the_content();?></div>
        </div>
        <?php
    }

    
?>

    </section>


    <section class="social-features">

        <div class="fb-page" data-href="https://www.facebook.com/grupa.kontratak.movement.martialartsschool/"
            data-tabs="timeline" data-width="500" data-height="300" data-small-header="false"
            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/grupa.kontratak.movement.martialartsschool/"
                class="fb-xfbml-parse-ignore"><a
                    href="https://www.facebook.com/grupa.kontratak.movement.martialartsschool/">Grupa Kontratak - Szkoła
                    Ruchu i Walki Wręcz</a></blockquote>
        </div>


    </section>


</main>


<?php
get_footer();
wp_footer();
?>