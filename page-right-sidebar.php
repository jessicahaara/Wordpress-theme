<?php
 /* Template name: Right Sidebar Page */
 get_header();
 ?>
 <main>

	<section class="content-with-sidebar">

		<h2>
			<?php the_title() ?>
		</h2>
		
		<?php the_content() ?>

	</section>

	<section class="sec-sidebar">
		<?php
		dynamic_sidebar( 'secondary' );
		?>
	</section>
	
</main>

<?php get_footer(); ?>