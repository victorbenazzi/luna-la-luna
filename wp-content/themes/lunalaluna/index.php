<?php get_header(); ?>

<?php
if (have_posts()) :
	while (have_posts() ) : the_post();
?>

<section>
	<h2>
		<a href="<?php the_permalink() ?>">
			<?php the_title() ?>
		</a>
	</h2>
	<?php  the_content()  ?>
</section>

<?php
	endwhile;
	else:
		echo "<p>Não há posts</p>";
	endif;
	?>

<aside>
    <?php get_sidebar() ?>
</aside>

<?php get_footer(); ?>
