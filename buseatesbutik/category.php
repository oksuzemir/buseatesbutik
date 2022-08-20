<?php get_header(); ?>

<main role="main" class="ayarla">
	<!-- section -->
	<section class="konten">

		<h1 class="page-title"><?php single_cat_title(); ?></h1>

		<div class="eleventh-blog">
			<?php get_template_part('loop'); ?>
		</div>
		<?php get_template_part('pagination'); ?>

	</section>
	<!-- /section -->
</main>
<?php get_footer(); ?>

