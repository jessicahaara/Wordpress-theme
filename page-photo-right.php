<?php
 /* Template name: Photo right Page */
 get_header();
 ?>

 <main>

	<section class="text-with-photo">

		<h2>
			<?php the_title() ?>
		</h2>
		
		<?php the_content() ?>

	</section>

	<img src="<?php echo get_the_post_thumbnail_url();?>" class="text-with-photo">

</main>

<?php get_footer(); ?>