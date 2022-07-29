<?php

$post_article = new WP_Query([
    'post_type' => 'pro_article',
    'post_status' => 'publish',
]);

if ($post_article->have_posts()) :
    while ($post_article->have_posts()) : $post_article->the_post();
?>
        <section id="homepage">
            <div class="container-homepage container">
                <div class="div-scroll">
                    <span class="scroll-left"><?php previous_post_link('<i class=" icon-arrow-left fa-solid fa-left-long"></i> Retour <br> %link'); ?></span>
                    
                    <span class="scroll-right"> <?php next_post_link('%link <br> Suivant <i class="icon-arrow-right fa-solid fa-right-long"></i>'); ?> </span>
                </div>
                <div class="date-article"><?php  the_date("j F Y"); ?></div>
                <h1> <?php the_title(); ?> </h1>
                <div class="nav-article">
                    <a href="">Tips</a>
                    <a href="">Outils</a>
                    <a href="">Organisation</a>
                </div>
                <a class="scroll-down" href="#article">Scroll <i class="icon-arrow-down fa-solid fa-down-long"></i></a>
                <a class="scroll-down-resp" href="#article"><i class="fas fa-chevron-down"></i></a>
            </div>
        </section>
        <section id="article">
            <div class="container-articles container">

                <article>
                    <div class="article-title">
                        <h2><?php SC_the_field("custom_bloc_article_title_1"); ?></h2>
                    </div>
                    <div class="content-article">
                        <div class="images-article-1">
                            <?php SC_the_image_field('custom_bloc_article_image_1'); ?>
                        </div>
                        <div class="article-p">
                            <p><?php SC_the_field("custom_bloc_article_texte_1"); ?></p>
                        </div>
                    </div>

                </article>
                <article>
                    <div class="article-title">
                        <h2><?php SC_the_field("custom_bloc_article_title_2") ?></h2>
                    </div>
                    <div class="images-article-2">
                        <?php SC_the_image_field('custom_bloc_article_image_21'); ?>
                        <?php SC_the_image_field('custom_bloc_article_image_22'); ?>
                        <?php SC_the_image_field('custom_bloc_article_image_23'); ?>
                    </div>
                    <div class="article-p-2">
                        <p><?php SC_the_field("custom_bloc_article_texte_2"); ?></p>
                    </div>

                </article>
                <article>
                    <div class="article-title">
                        <h2><?php SC_the_field("custom_bloc_article_title_3") ?></h2>
                    </div>
                    <div class="content-article">
                        <div class="article-p-3">
                            <p><?php SC_the_field("custom_bloc_article_texte_3"); ?></p>
                        </div>

                        <div class="images-article-3">
                            <?php SC_the_image_field('custom_bloc_article_image_31'); ?>
                            <?php SC_the_image_field('custom_bloc_article_image_32'); ?>
                        </div>
                    </div>
                </article>

            </div>
        </section>
        <section>
            <div class="container-socialmedia container">
                <h2>Rejoinez-nous</h2>
                <div class="div-medias">
                    <div class="swiper mySwiper my-slider">
                        <div class="swiper-wrapper swiper-medias">
                            <?php
                            if (have_posts()) :
                                while (have_posts()) : the_post();
                            ?>
                                    <div class="img-slide swiper-slide"><?php SC_the_image_field('custom_image_1'); ?></div>
                                    <div class="img-slide swiper-slide"><?php SC_the_image_field('custom_image_2'); ?></div>
                                    <div class="img-slide swiper-slide"><?php SC_the_image_field('custom_image_3'); ?></div>
                                    <div class="img-slide swiper-slide"><?php SC_the_image_field('custom_image_4'); ?></div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="icon-medias">
                        <span class="icon-article"><i class=" fab fa-instagram"></i></span>
                        <span class="icon-article"><i class=" fab fa-twitch"></i></span>
                        <span class="icon-article"><i class=" fab fa-facebook-f"></i></span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-comment container">
                <h2>Laisser un commentaire</h2>
                <p>Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués avec *</p>
                <?php the_content(); ?>


            </div>
        </section>

<?php

    endwhile;
endif;

wp_reset_query();
