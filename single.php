
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2><?php the_title(); ?></h2>
			<div id="sold">
				<?php 
					$custom_fields = get_post_custom();
					$my_custom_field = $custom_fields['my_meta_box_check'];
					foreach ( $my_custom_field as $key => $value )
						if ($value == "on") {
							echo "sold";
						} else {

						}
				?> 
			</div>				
			
			<div class="entry">
				
				<?php the_content(); ?>				
			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			<span onclick="backToGallery()">back</span>
		</div>
	<?php endwhile; endif; ?>
