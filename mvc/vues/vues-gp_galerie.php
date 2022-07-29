<?php
		$post_classementgp = new WP_Query([
			'post_type'=>'gp_galerie',
			'post_status'=>'publish',
			'posts_per_page'=>-1,
		]);
		if ($post_classementgp->have_posts()) :
			while ($post_classementgp->have_posts()) : $post_classementgp->the_post();
				// the_title();
?>

<div class="hrz-slide">
	
        <div class="image-hrz">
            <?php the_post_thumbnail('medium');?>
            <div class="content">
                <h4><?php the_title();?></h4>
                <div class="projet-coup-de-coeur">
					<p class="image-hrz-titre">projet coup de coeur</p>
					<p><?php CA_the_field('custom_gp_galerie_coup_de_coeur')?></p>
				</div>
				<div class="prix-des-etudiants">
					<p class="image-hrz-titre"> Prix des etudiants</p>
					<p><?php CA_the_field('custom_gp_galerie_prix_des_etudiants')?></p>
				</div>
				<div class="prix-du-jury">
					<p class="image-hrz-titre">prix du jury</p>
					<p><?php CA_the_field('custom_gp_galerie_prix_du_jury')?></p>
				</div>
				<div class="chef-de-projet-de-lannee">
					<p class="image-hrz-titre">chef de projet de l'annee</p>
					<p><?php CA_the_field('custom_gp_galerie_chef_de_projet_de_lannee')?></p>
				</div>
            </div>
			</div>
        </div>
           
		<?php
			endwhile;
		endif;
		wp_reset_query();
		?>