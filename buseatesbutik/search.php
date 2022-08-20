<?php get_header(); ?>

<main role="main" class="ayarla"> 
	<!-- section -->
	<section class="konten">

		<h1><?php echo sprintf(__('%s :', 'html5blank'), $wp_query->found_posts);
			echo get_search_query(); ?></h1>

		<div class="eleventh-blog">
			<?php get_template_part('loop'); ?>
		</div>

		<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>