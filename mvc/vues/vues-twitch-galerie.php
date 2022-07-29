<?php
		$post_classementgp = new WP_Query([
			'post_type'=>'twitch_galerie',
			'post_status'=>'publish',
			'posts_per_page'=>-1,
		]);
		if ($post_classementgp->have_posts()) :
			while ($post_classementgp->have_posts()) : $post_classementgp->the_post();
				// the_title();
?>
 <div class="galerie-mamadou-img">
		<?php the_post_thumbnail('large');?>
 </div>

	<?php 
			endwhile;
		endif;
		wp_reset_query();
		?>