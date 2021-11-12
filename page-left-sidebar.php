<?php
 /* Template name: Left Sidebar Page */
 get_header();
 ?>

 <main>
	
	<section class="sec-sidebar">
		<?php
		dynamic_sidebar( 'secondary' );
		?>
	</section>

	<section class="content-with-sidebar">

		<h2>
			<?php the_title() ?>
		</h2>
		
		<?php the_content() ?>

	</section>

</main>

<?php get_footer(); ?>