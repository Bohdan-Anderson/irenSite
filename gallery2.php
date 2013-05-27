<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="piece" onclick="changeContent('<?php the_permalink() ?>')">
		<div id="imageContainer">
			<img src="
			<?php if ( has_post_thumbnail() ) {			
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
				echo $large_image_url[0];						
			}?>
			">
		</div>
		<div id="explination">
			<span id="name"><?php the_title(); ?></span>
			<br>
			<span id="sold">
				<?php 
					$custom_fields = get_post_custom();
					$my_custom_field = $custom_fields['my_meta_box_check'];
					foreach ( $my_custom_field as $key => $value )
						if ($value == "on") {
							echo "sold";
						} else {

						}
				?> 
			</span>					
		</div>
	</div>		
<?php endwhile; ?>
<?php endif; ?>													
<div id="clear"></div>
