
<?php get_header(); ?>

<?php 
if(have_posts()):
	while(have_posts()): the_post(); ?>
		<h1>this is my static title</h1> 
		<small>posted on : <?php the_time('F, j Y'); ?>,at <?php the_time(); ?> in <?php the_category(); ?> </small>
		<h3><?php the_title(); ?></h3>
	<?php 
		endwhile; 
		endif;
	?>

	 
	 
	 

<?php get_footer(); ?>

