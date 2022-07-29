<div class="">
	<div class="">
		<?php
		$post_equipe = new WP_Query([
			'post_type'=>'equipe',
			'post_status'=>'publish',
			'posts_per_page'=>-1,
		]);
		if ($post_equipe->have_posts()) :
			while ($post_equipe->have_posts()) : $post_equipe->the_post();
				// the_title();
				// SC_the_field('custom_equipe_email');
				?>
				<div class="membre">
					<div class="gauche">
						<div class="grade-nom">
							<p><?php SC_the_field('custom_equipe_metier_dans_lasso')?></p>
							<h2><?php the_title();?></h2>
						</div>
						<?php the_post_thumbnail('large');?>
					</div>
					<div class="droite">
						<div class="grade-nom2">
							<p><?php sc_the_field('custom_equipe_metier_dans_lasso')?></p>
							<h2><?php the_title();?></h2>
						</div>
						<div class="membre-text"><?php the_content();?></div>
						<div class="competences">
							<?php
								for($icomp=1;$icomp<=3;$icomp++){
									?>
									<div class="competence" style="background-image: url(<?php SC_the_image_field('custom_equipe_competence_image_'.$icomp);?>);">
									 	<p><b><?php sc_the_field('custom_equipe_competence_texte_'.$icomp);?></b></p>
									</div>
									<?php
								}
							?>
						</div>
						<?php
						$grade_niveau = sc_get_field('custom_equipe_grade_niveau');
						$Tableau_grade_niveau = [[1,'Noob'],[2,'niveau 2'],[3,'Niveau 3'],[4,'MasterClass'],[5,'Deus Ex']];
						?>
							<div class="grade">
								<div class="jauge-grade" style="width:calc(20% * <?php echo $grade_niveau;?>)"></div>
								<div class="niveau1"></div>
								<div class="niveau2"></div>
								<div class="niveau3"></div>
								<div class="niveau4"></div>
								<div class="niveau5"></div>
							</div>
							<?php
								for($igrade=0;$igrade<count($Tableau_grade_niveau);$igrade++){
									if($Tableau_grade_niveau[$igrade][0] == $grade_niveau){
										echo '<p>'.$Tableau_grade_niveau[$igrade][1].'</p>';
									}
								}
							?>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		wp_reset_query();
		?>
	</div>
</div>
