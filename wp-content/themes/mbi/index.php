<?php get_header(); ?>

<div id="bodyPan">
	<div id="leftPan">
		<?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>
		  	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			    <div class="entry clear">
			        <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
			        <?php the_content(); ?>
			        <?php edit_post_link(); ?>
			        <?php wp_link_pages(); ?>
			    </div><!--end entry-->
			    <div class="post-footer">
			        <!--  
			        	<div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
			        --->		    </div>
			</div><!--end post-->
			<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>

		  	<div class="navigation index">
			    <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
			    <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
	  		</div><!--end navigation-->
		<?php else : ?>
		<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
