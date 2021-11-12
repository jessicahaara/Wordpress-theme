<?php get_header();?>
<main>

	<section class="start-content">
		<img src="<?php echo get_the_post_thumbnail_url();?>" >

		<section class="start-text">
			<?php the_content();?>
		</section>

	</section>

</main>
<?php get_footer();?>