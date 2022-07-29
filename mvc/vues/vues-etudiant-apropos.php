<div class="titre-etudiant-mamadou">
        <h1>
           <div class="titre-1"> <?php SC_the_field('custom_page_apropos_titre')?></div> 
           <span class="titre2"><?php SC_the_field('custom_page_apropos_titre1')?></div> </span>
        </h1>
    </div>
    <div class="apropos-photo-text">
        <div class="apropos-photo">
        <div class="image1"><?php SC_the_image_field('custom_page_apropos_image1');?></div>
        <div class="image2"> <?php SC_the_image_field('custom_page_apropos_image');?></div>
        <?= SC_the_image_field('custom_home_twitch_image_1');?>
            <img class="decoration-x" src="img/Décoration.svg" alt="">
        </div>
        <div class="text">
        <p class="membre-text"><?php the_content();?></p>
</div>
    </div>	
        <!-- partie vues-membre.php -->
		<?php
		include __VUES_DIR__.'/vues-equipe.php';
		?>
		<!-- partie vues-membre.php -->
    <div class="apropos-lgp">
    <div class="conteneur-text-compteur">
        <div class="description-lgp">
            <h3><?php SC_the_field('custom_page_apropos_titre2');?></h3>  
            <?php SC_the_fieldText('custom_page_apropos_text');?>
        </div>    
        <div class="presentation-compteur">
        <div class="presentation"> 
            <p> <?php SC_the_field('custom_page_apropos_titre3');?>  </p>
        </div>
        <div class="compteur">
            <div class="jours"><b></b></div>
            <div class="hms">
                <div class="hm">
                    <div class="heures"><b></b></div>
                    <div class="minutes"><b></b></div>
                </div>
                <div class="secondes"><b></b></div>
            </div>
        </div>
    </div>
    </div>
        	<!-- partie vues-membre.php -->
		<?php
		include __VUES_DIR__.'/vues-gp_galerie.php';
  
		?>
		<!-- partie vues-membre.php -->
    </div>

