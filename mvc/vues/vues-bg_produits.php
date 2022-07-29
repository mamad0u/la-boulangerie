<?php
		$post_produitsbg = new WP_Query([
			'post_type'=>'produits_boulangerie',
			'post_status'=>'publish',
			'posts_per_page'=>-1,
		]);
		if ($post_produitsbg->have_posts()) :
			while ($post_produitsbg->have_posts()) : $post_produitsbg->the_post();
				// the_title();
?>
<div class="produit-boulangerie">
	<div class="image-produit">
	<?php the_post_thumbnail('medium');?>
	</div>
	<div class="flex-titre-produit">
		<h4><?php the_title();?></h4>
		<p><?php SC_the_field("prix_produit"); ?>€</p>
	</div>
  <?php the_content(); ?>
  
</div>




           
		<?php
			endwhile;
		endif;
		wp_reset_query();
		?>