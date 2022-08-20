<?php /* Template Name: Anasayfa */ get_header(); ?>

<section class="first-content">
	<!-- Slideshow container -->
	<div class="slideshow-container">

		<?php dynamic_sidebar('anasayfa-slider'); ?>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
</section>
<section class="third-content">
	<div class="konten">
		<div class="collection-title">
			<div class="collection-title-inner">
				Koleksiyon İsmi
			</div>

			<div class="show-all-button">
				<a href="">Hepsi</a>
			</div>
		</div>

		<?php echo do_shortcode('[product_category category="canta-test" per_page="12" columns="4" orderby="date" order="desc"]'); ?>

	</div>
</section>
<section class="second-content">
	<?php dynamic_sidebar('anasayfa-parallax'); ?>
</section>

<section class="third-content fourth-content">
	<div class="konten">
		<div class="collection-title">
			<div class="collection-title-inner">
				Koleksiyon İsmi
			</div>

			<div class="show-all-button">
				<a href="">Hepsi</a>
			</div>
		</div>

		<?php echo do_shortcode('[product_category category="canta-test" per_page="12" columns="4" orderby="date" order="desc"]'); ?>

	</div>
</section>

<?php get_footer(); ?>