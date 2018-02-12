<?php get_header(); ?>
<div class="row">
	
	<div class="col-xs-12">
		<?php 
			
			$lastblog= new WP_Query('type=post & posts_per_page=1');
			
			if($lastblog->have_posts()):
	while($lastblog->have_posts()): $lastblog->the_post();?>
	
	<?php get_template_part('content',get_post_format()); ?>
		
		
	<?php 
		endwhile; 
		endif;
		wp_reset_postdata();
		?>
		
		
	</div>
	
	<div class="col-xs-12 col-sm-8">
<?php 
if(have_posts()):
	while(have_posts()): the_post();?>
	
	<?php get_template_part('content',get_post_format()) ?>
		
		
	<?php 
		endwhile; 
		endif;
		
		//print other 2 posts not the 1st one repeated
/*
		$lastblog= new WP_Query('type=post & posts_per_page=2 & offset=1');
			
			if($lastblog->have_posts()):
	while($lastblog->have_posts()): $lastblog->the_post();?>
	
	<?php get_template_part('content',get_post_format()); ?>
		
		
	<?php 
		endwhile; 
		endif;
		wp_reset_postdata();
*/
		
	?>
	</div>
	
<!-- 	<hr> --> <!for visual seperation>
	
	<?php
		//print posts of specefic categories, example cat= news.
		
			//defining var $args to feed in wp_query function
/*
			$args = array(
				'type'=> 'post',
				'posts_per_page'=> -1,
				'cat'=> 10
			);
		
		$lastblog= new WP_Query($args); //-1 for infinite posts, and cat is for category id, we can use 'category_name' for typing name of category as well
			
			if($lastblog->have_posts()):
	while($lastblog->have_posts()): $lastblog->the_post();?>
	
	<?php get_template_part('content',get_post_format()); ?>
		
		
	<?php 
		endwhile; 
		endif;
		wp_reset_postdata();
*/
		
	?>
	
	
	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>	
	</div>
</div>
	 
	 
 

<?php get_footer(); ?>

