<body>
    <div class="menu">
        <div class="close">
            <img src="img/close.png" alt="">
        </div>
        <div class="content"></div>
        <div class="logo-menu"></div>
        <img src="" alt="">
        <a href="#">Accueil</a>
        <a href="produits.html">Produits</a>
        <a href="a_propos.html">A-propos</a>
        <a href="#">Contact</a>
        <div class="menu-reseaux">
            <img src="img/f.png" alt="">
            <img src="img/insta.png" alt="">
        </div>
    </div>
    <div class="menu-fond">
    </div>
    <div class="home" style="background-image: url(<?php the_field('custom_page_photo-couverture');?>);">
	<p>
       
        <div class="home-content">
            <h1>ET<br>AVEC<br>CECI?</h1>
            <p>La Boulangerie<br>Bordeaux SAINT-MICHEL</p>
            <a href="#" class="a-propos-btn btn2">Produits</a>
        </div>
    </div>
    <div class="produits">
        <h2><?php SC_the_field('custom_page_acceuil_titre1')?></h2>
        <div class="containeur">
            <a href="#">
                <div class="produit">
                    <img src="<?= CA_the_image_field('custom_page_acceuil_photo-produit1');?>" alt="produit-pain-photo">
                    <p><?php SC_the_field('custom_page_acceuil_nom-produits1')?></p>
                </div>
            </a>
            <a href="#">
                <div class="produit">
                <img src="<?= CA_the_image_field('custom_page_acceuil_photo-produit2');?>" alt="produit-pain-photo">
                    <p><?php SC_the_field('custom_page_acceuil_nom-produits2')?></p>
                </div>
            </a>
            <a href="#">
                <div class="produit last">
                <img src="<?= CA_the_image_field('custom_page_acceuil_photo-produit3');?>" alt="produit-pain-photo">
                    <p><?php SC_the_field('custom_page_acceuil_nom-produits3')?></p>
                </div>
            </a>
        </div>
    <a href="#" class="produit-btn btn">produits</a>
    </div>
    <div class="ouverture"  style="background-image: url(<?php the_field('custom_page_acceuil_photo-ouverture');?>);">
     <h2> <?php SC_the_field('custom_page_acceuil_texte-heure-ouverture')?></h2>   
    </div>
    <div class="a-propos">
        <div class="a-propos-content">
            <h3><?php SC_the_field('custom_page_acceuil_titre-apropos')?></h3>
            <div class="titre"><?php SC_the_field('custom_page_acceuil_titre2-apropos_copie')?></div>
            <p class="last"><?php SC_the_field('custom_page_acceuil_text-a-propos')?></p>
            <a href="#" class="a-propos-btn btn2">A propos</a>
        </div>
        <div class="a-propos-img" style="background-image: url(<?php the_field('custom_page_acceuil_photo-a-propos');?>);"></div>
    </div>
    <div class="contact">
    <p><?php SC_the_field('custom_page_acceuil_text-partie1')?></p>
    <p class="last2"><?php SC_the_field('custom_page_acceuil_text-partie2')?></p>
    <a href="#" class="contact-btn btn last2">contact</a>
    </div>
    <script src="app.js"></script>
</body>