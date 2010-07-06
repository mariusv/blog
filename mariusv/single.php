<?php get_header(); ?>

<div id="content" class="col span-8">
	<?php if (have_posts()) : ?>
	
	<div class="col last span-6 nudge-2">
		<h4 class="ver small">You are reading</h4>	
	</div>
	
		<?php while (have_posts()) : the_post(); ?>
				
		 <div class="post">
			<div class="post-meta col span-2">
				<!--><ul class="nav">
					<li><?php the_time('F j, Y'); ?></li>
					<li>In <?php the_category(', '); ?></li><-->
					
					<!-- Uncomment this if you want support for tags -->
					<!-- <li>Tagged as <?php the_tags( '', ', ', ''); ?></li> -->
					
					<!--><li><?php comments_number('No comments yet','One comment','% comments'); ?></li><-->
					<?php edit_post_link('Edit this post', '<li>', '</li>'); ?>
				</ul>
			</div>
			
			<div class="post-content span-8 nudge-2">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<div><p><strong>Posted:</strong> <?php the_time('F j, Y'); ?> | <strong>By:</strong> <a href="mailto:marius.voila@gmail.com">MV</a> | In <?php the_category(', '); ?> | <?php comments_number('No comments yet','One comment','% comments'); ?> | <?php edit_post_link('Edit this post', '<li>', '</li>'); ?></div>
				<?php the_content('Continue reading...'); ?>
			</div>
		</div>
				

	

		
		<?php comments_template(); ?>

		<?php endwhile; ?>

	<?php else : ?>
	
		<h3>Post Not Found</h3>
		<p>Sorry, but you are looking for something that isn't here.</p>
	
	<?php endif; ?>
	
</div>

<hr />

<?php get_sidebar(); ?>

<?php get_footer(); ?>
