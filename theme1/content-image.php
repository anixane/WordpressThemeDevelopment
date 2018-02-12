<header>
		<?php the_title(sprintf('<h1 class="blog-entry"><a href="%s">', esc_url(get_permalink()) ),'</a></h1>'); ?><br>
</header>

<div class="row">
	<div class="col-xs-12 col-sm-4">
		<div class="thumbnail-img"><?php the_post_thumbnail("medium"); ?></div>
	</div>
	
	<div class="col-xs-12 col-sm-8">
		<?php the_content(); ?>	
		</br>
	</div>
</div>