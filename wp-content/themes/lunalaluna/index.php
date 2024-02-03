<?php get_header(); ?>

<main class="main">	
<div class="hero">
	<div class="heroContent">
		<h1 class="heroTitle">Luna La Luna</h1>
		<p class="heroSubtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		<a href="#" class="button" aria-label="Botão de contato">Entre em contato!</a>
	</div>
</div>
<div class="postsContainer">
<h2> Últimos posts </h2>
	<article class="posts">
	<?php if (have_posts()) :
	while (have_posts() ) : the_post();
	?>
	<div class="postCard">
		<div class="textWrapperCard">
			<h2 class="titlePostCard"><a href="<?php the_permalink() ?>">
					<?php the_title() ?>
				</a>
			</h2>
			<p class="excerptPostCard">
				<?php  the_excerpt() ?>
			</p>
			
		
			</div>
		</div>
		<?php endwhile; else: echo "<p>Não há posts</p>"; endif; ?>
	</article>
	</div>	
</main>



<aside>
    <?php get_sidebar() ?>
</aside>

<?php get_footer(); ?>
