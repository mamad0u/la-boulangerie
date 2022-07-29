<?php
   /**
    * Template Name: Article carlos
    */
?>
<?php get_header() ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="hearo-banner">
            <div class="img-banner"><?php the_post_thumbnail( 'medium' );?></div>
            <div class="nav">
                <a href="#"> ⇦ RETOUR </a>
                <a href="#">SUIVANT ⇨ </a>
            </div>
            <div class="info-article">
                <span class="publi-date"><?= get_the_date('dmY'); ?></span>
                <h1 class="article-title"><?php the_title();?></h1>
                <ul class="article-tags">
                    <li>JEUX VIDÉOS</li>
                    <li>SÉLECTIONS DES ÉTUDIANTS</li>
                    <li>DIVERTISSEMENT</li>
                </ul>
                <a class="scrool-action" href="#"><img src="<?= CA_the_image_field('custom_article_arrow_action');?>" alt="invitation au scroll"></a>
            </div>
        </div>
        <div class="article">

            <div class="chapter1">
                <h2 class="chapter-title"><?= CA_the_fieldText('custom_article_title_chapter_1');?></h2>
                <div class="chapter-content">
                    <div class="img-cont"><img src="<?= CA_the_image_field('custom_article_chapter1_image_1');?>" alt="image chapitre 1"></div>
                    <p class="chapter-para"><?= CA_the_field('custom_article_para_chapter_1');?>
                </div>
            </div>
            <div class="chapter2">
                <h2 class="chapter-title"><?= CA_the_fieldText('custom_article_title_chapter_2');?></h2>
                <div class="images-container">
                    <div class="chapter-img"><img src="<?= CA_the_image_field('custom_article_chapter2_image_1');?>" alt="imgage chapitre 2"></div>
                    <div class="chapter-img"><img src="<?= CA_the_image_field('custom_article_chapter2_image_2');?>" alt="imgage chapitre 2"></div>
                    <div class="chapter-img"><img src="<?= CA_the_image_field('custom_article_chapter2_image_3');?>" alt="imgage chapitre 2"></div>
                </div>
                <p class="chapter2-para">
                <?= CA_the_field('custom_article_para_chapter_2');?>
                </p>
            </div>

            <div class="chapter3">
                <h2 class="chapter-title"><?= CA_the_fieldText('custom_article_title_chapter_3');?></h2>
                <div class="chapter3-container">
                    <p class="chapter3-para">
                    <?= CA_the_field('custom_article_para_chapter_3');?>
                    </p>
                    <div class="img-section">
                        <div class="img1"><img src="<?= CA_the_image_field('custom_article_chapter3_image_1');?>" alt="image chapitre 3"></div>
                        <div class="img2"><img src="<?= CA_the_image_field('custom_article_chapter3_image_2');?>" alt="image chapitre 3"></div>
                    </div>
                </div>
            </div>

        </div>
        <div class="join-us-section">
            <span class="join-article">Rejoins-Nous</span>
            <div class="galery-article">
                <div class="join-us-img1 join-img"><img src="<?= CA_the_image_field('custom_article_join_image_1');?>" alt="joins-us-img"></div>
                <div class="join-us-img2 join-img"><img src="<?= CA_the_image_field('custom_article_join_image_2');?>" alt="joins-us-img"></div>
                <div class="join-us-img3 join-img"><img src="<?= CA_the_image_field('custom_article_join_image_3');?>" alt="joins-us-img"></div>
                <div class="join-us-img4 join-img"><img src="<?= CA_the_image_field('custom_article_join_image_4');?>" alt="joins-us-img"></div>
                <div class="join-us-img5 join-img"><img src="<?= CA_the_image_field('custom_article_join_image_5');?>" alt="joins-us-img"></div>
                <div class="join-us-img6 join-img"><img src="<?= CA_the_image_field('custom_article_join_image_6');?>" alt="joins-us-img"></div>
                <div class="join-us-img7 join-img"><img src="<?= CA_the_image_field('custom_article_join_image_7');?>" alt="joins-us-img"></div>
                <div class="social-ico join-img">
                    <a href="#"><img src="<?= CA_the_image_field('custom_article_join_social_ico_1');?>" alt="icone-instagram"></a>
                    <a href="#"><img src="<?= CA_the_image_field('custom_article_join_social_ico_2');?>" alt="icone-twitch"></a>
                    <a href="#"><img src="<?= CA_the_image_field('custom_article_join_social_ico_3');?>" alt="icone-facebook"></a>
                </div>
            </div>
        </div>
        <div class="remark">
            <div class="info">
                <h2>LAISSER UN COMMENTAIRE</h2>
                <span>Votre adresse e-mail ne sera pas publiée. Les champs obligatoires sont indiqués avec *</span>
            </div>
            <div class="form">

            </div>
        </div>
        <?php endwhile; ?>
<?php endif; ?>   
<?php get_footer(); ?>