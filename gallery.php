<ul class="postlist">
<?php
$max = $wp_query->max_num_pages;
$wp_query = new WP_Query();
$wp_query->query('showposts=5'.'&paged='.$paged);
?>
<?php while ($wp_query->have_posts()) : $wp_query->the_post();?>
<li>
<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
</article>
</li>
<?php endwhile; ?> 
</ul>