<?php get_header(); ?>

<div class="wrapper section">
	
	<div class="section-inner">

		<div class="content">
		
			<div class="page-title">
					
				<div class="section-inner">
		
					<h4><?php if ( is_day() ) : ?>
						<?php printf( __( 'Date: %s', 'lovecraft' ), '' . get_the_date( get_option('date_format') ) . '' ); ?>
					<?php elseif ( is_month() ) : ?>
						<?php printf( __( 'Month: %s', 'lovecraft' ), '' . get_the_date('F Y') . '' ); ?>
					<?php elseif ( is_year() ) : ?>
						<?php printf( __( 'Year: %s', 'lovecraft' ), '' . get_the_date( 'Y' ) . '' ); ?>
					<?php elseif ( is_category() ) : ?>
						<?php printf( __( 'Category: %s', 'lovecraft' ), '' . single_cat_title( '', false ) . '' ); ?>
					<?php elseif ( is_tag() ) : ?>
						<?php printf( __( 'Tag: %s', 'lovecraft' ), '' . single_tag_title( '', false ) . '' ); ?>
					<?php elseif ( is_author() ) : ?>
						<?php $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author)); ?>
						<?php printf( __( 'Author: %s', 'lovecraft' ), $curauth->display_name ); ?>
					<?php else : ?>
						<?php _e( 'Archive', 'lovecraft' ); ?>
					<?php endif; ?>
					
					<?php
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					
					if ( "1" < $wp_query->max_num_pages ) : ?>
					
						<span><?php printf( __('(Page %s of %s)', 'lovecraft'), $paged, $wp_query->max_num_pages ); ?></span>
						
						<div class="clear"></div>
					
					<?php endif; ?></h4>
							
				</div> <!-- /section-inner -->
				
			</div> <!-- /page-title -->
			
			<?php if ( have_posts() ) : ?>
			
				<?php rewind_posts(); ?>
					
				<div class="posts" id="posts">
					
					<?php while ( have_posts() ) : the_post(); ?>
								
						<?php get_template_part( 'content', get_post_format() ); ?>
						
					<?php endwhile; ?>
									
				</div> <!-- /posts -->
				
				<?php lovecraft_archive_navigation(); ?>
						
			<?php endif; ?>
		
		</div> <!-- /content -->
		
		<?php get_sidebar(); ?>
		
		<div class="clear"></div>

	</div> <!-- /section-inner -->
	
</div> <!-- /wrapper.section -->

<?php get_footer(); ?>