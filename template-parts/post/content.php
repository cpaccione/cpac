<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package cpac
 * @version 1.0
 */

?>

<article class="blog">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<ul class="blog-info">
		<li><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></li>
		<li><i class="fa fa-clock-o"></i> <?php the_date(); ?></li>
	</ul>

	<?php the_content(); ?> 	
</article>


