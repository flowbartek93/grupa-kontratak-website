<?php get_header(); 



?>


<main class="latest">
    <div class="latest__news">
        <h1 class="news-title">Najnowsze aktualności</h1>

        <?php 

        $news = new WP_query(array(
            'posts_per_page' => 3,
        ));

while($news -> have_posts()){
    $news -> the_post(); 
 ?>
        <div class="single-news">
            <div class="date-container">
                <span class="day"><?php echo get_the_date('j') ?></span>
                <span class="month"><?php echo get_the_date('M') ?></span>
            </div>
            <div class="info-container">
                <p class="title"><?php the_title(); ?></p>
                <p class="excerpt">
                    <?php echo wp_trim_words(get_the_content(), 5) ?>
                </p>
            </div>

            <a class="single-news arrow" href="<?php the_permalink(); ?>">
                <div class="circle"><i class="fas fa-angle-right"></i>
                </div>
            </a>


        </div>
        <?php
            }

            wp_reset_query();
            wp_reset_postdata();
        ?>
    </div>


    <div class="latest__blog">
        <h1 class="blog-title">Najnowsze wpisy na blogu</h1>
        <?php 
            $blogposts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'blog',
            ));
      
             
            while($blogposts -> have_posts()){
                $blogposts -> the_post(); 
             ?>



        <div class="single-post">
            <div class="date-container">
                <span class="day"><?php echo get_the_date('j') ?></span>
                <span class="month"><?php echo get_the_date('M') ?></span>
            </div>
            <div class="info-container">
                <p class="title"><?php the_title();?></p>
                <p class="excerpt">
                    <?php echo get_the_excerpt() ?>
                </p>
            </div>

            <a class="single-post arrow" href="<?php the_permalink(); ?>">
                <div class="circle"><i class="fas fa-angle-right"></i>
                </div>
            </a>

        </div>
        <?php }

                wp_reset_query();
                wp_reset_postdata();
            ?>
    </div>
    </div>
</main>





<section class="section-two">
    <div class="section-divider">
        <p>O nas</p>
    </div>
    <div class="section-two__content">
        <div class="section-two__photo">
            <img src="<?php echo get_theme_file_uri('images/my.jpg') ?>" alt="">
        </div>
        <div class="section-two__description">

            <p class="section-two__description_title">Witamy na naszej stronie !</p>

            <p class="section-two__description_aboutus"> Jesteśmy grupą ludzi zafascynowanych sztukami walki i ruchem.
                Grupa Kontratak to projekt utkany z pasji,
                marzeń i
                ekspoloracji różnych sztuk, systemów walki i ruchu.

                Jesteśmy zwolennikami alterntywnego podejścia do treningu sztuk walki, nastawionego nie na wyniki
                sportowe,
                czy ilość certyfikatów, ale
                przede wszystkim opartego na pracy nad jakością swojego ruchu, czuciem ciała, rozumieniem dlaczego coś
                robimy bardziej, niż jak coś robimy.
                Mądzrze przeprowadzony trening sztuk walki jest jednym z najlepszych narzędzi samorozwoju jaki widział
                ten
                świat.
                Trenujemy w mocno edukacyjnej atmosferze, gdzie tylko jeśli chcesz, dostaniesz wiedzę i umiejętności,
                które
                w dużym stopniu zmienią sposób w jaki postrzegasz ruch i sztuki walki.

                Działamy nieprzerwanie od 2014 roku cały czas trenując, ucząc i przede wszystkim cały czas się
                doskonaląc
                nasz warsztat.


            </p>
















        </div>

    </div>

</section>



<section class="section-one">
    <div class="section-divider">
        <p>Nasi partnerzy</p>
    </div>

    <div class="partner-logos">

        <div class="partner-logos__item">
            <a href="https://azsus.pl/" target="_blank"><img src="<?php echo get_theme_file_uri('images/azs.png') ?>"
                    alt=""></a>

        </div>
        <div class="partner-logos__item">
            <a href="http://www.combatsystema.com/home.html" target="_blank"><img
                    src="<?php echo get_theme_file_uri('images/combatsystema.png') ?>" alt=""></a>
        </div>
        <div class="partner-logos__item">
            <a href="https://www.facebook.com/SystemaRyabkoPolska/" target="_blank"><img
                    src="<?php echo get_theme_file_uri('images/ryabkopolska.png') ?>" alt=""></a>
        </div>
    </div>
</section>














<?php get_footer(); ?>

<?php wp_footer(); ?>