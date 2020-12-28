<?php

get_header();
?>

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
            <div class="entry__content"><?php the_content();?></div>
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



<?php
get_footer();

wp_footer(); ?>

</body>

</html>