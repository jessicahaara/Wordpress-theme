<?php
get_header(); 
?>
<main>
	<section id="blogg">
	<h2><?php wp_title($before = ''); ?></h2>

<?php
if ( have_posts() ) :
    while (have_posts() ) : the_post();	
?>
	<article id="id-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_post_thumbnail(); ?>
		<h3>
			<a href="<?php echo get_permalink() ?>">
				<?php the_title() ?>
			</a>
		</h3>

		<section class="post-info">

			<section class="date">
				<p class="fa">
					&#xf073;
				</p>
				<?php the_time('j F, Y'); ?>
			</section>

			<section class="user">
				<p class="fa">
					&#xf007;
				</P>
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));  ?>">
						<?php the_author(); ?>
				</a>
			</section>

			<section class="tags">
				<p class="fa">
					&#xf02b;
				</p>
				<?php the_tags($before = '') ; ?>
			</section>		

		</section>

		<?php the_excerpt() ; ?>
	
	</article>

<?php
endwhile;

	the_posts_pagination( array(
		'mid_size'  => 2,
		'prev_text' => __( 'Föregående', 'textdomain' ),
		'next_text' => __( 'Nästa', 'textdomain' ),
		'screen_reader_text' => __( 'Whatever', 'textdomain' ),
	) );

endif;
?>

</section>

<section id="primary-sidebar">

<?php
dynamic_sidebar( 'primary' );
?> 

</section>

</main>

<?php get_footer(); ?>

