<div class="aventure-twitch">
        <div class="logo-twitch">
            <?php the_post_thumbnail('medium');?>
            <div class="fond-twitch-mamadou"></div>
        </div>
        <div class="aventure-twitch-desc">
			<h1><?php CA_the_field('custom_page_twitch_titre');?></h1>

            <?php the_content();?>
            <div class="btn-twitch-mamadou">
            <?php CA_the_field('custom_page_twitch_btn-text');?>
            </div>
        </div>
    </div>
    <div class="betisier">
        <div class="betisier-container">
                <div class="text-betisier">
                <b><?php CA_the_field('custom_page_twitch_betisier-text');?></b>
                <h2><?php CA_the_field('custom_page_twitch_betisier-h2');?></h2>
                </div>
        </div>
        <div class="photo-betisier">
      <img src=" <?php CA_the_image_field('custom_page_twitch_betisier-img');?> " alt=""> 
        </div>
    </div>
        <section class="galerie-mamadou">
           
         <!-- partie vues-membre.php -->
		<?php
		include __VUES_DIR__.'/vues-twitch-galerie.php';
		?>
		<!-- partie vues-membre.php -->


    </section>
        
    </div>