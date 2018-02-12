<article id="<?php the_ID(); ?>" <?php post_class(); ?>
	
	
	<header>
	<?php the_title(sprintf('<h1 class="blog-entry"><a href="%s">', esc_url(get_permalink()) ),'</a></h1>'); ?><br>
	
		<?php echo('this is video post'); ?><br>
		<small>posted on : <?php the_time('F j, Y'); ?>,at <?php the_time(); ?> in <?php the_category(); ?> </small>
		
	</header>
	
	<div class="col-xs-12 col-sm-4">
		<div class="thumbnail-img"><?php the_post_thumbnail("thumbnail"); ?></div>
	</div>
	
	<div class="col-xs-12 col-sm-8">
		<?php the_content(); ?>	
		</br>
	</div>
	
</article>