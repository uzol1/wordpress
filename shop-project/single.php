<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fancy Lab
 */

get_header();
?>
<div id="primary" class="content-area">
	<div id="main">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-12">
				<?php   
					while( have_posts() ): the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
							<header>
								<h1><?php the_title(); ?></h1>
								<div class="meta">
									<p>Published by <?php the_author_posts_link(); ?> on <?php echo get_the_date(); ?><br />
									Categories: <span><?php the_category( ' ' ); ?><br/>
									<?php if(has_tag()): ?>
										Tags: <span><?php the_tags( '', ', '); ?></span>
									<?php endif; ?>
									</p>                            
								</div>        
								<div class="post-thumbnail">
									<?php 
									if( has_post_thumbnail() ): 
										the_post_thumbnail( 'fancy-lab-blog', array( 'class' => 'img-fluid') );
									endif;
									?>
								</div>
							</header>    
							<div class="content">
								<?php 
								wp_link_pages(
									array(
										'before'	=> '<p class="inner-pagination">' . 'Pages',
										'after'		=> '</p>',
									)
								);
								?>
								<?php the_content(); ?>
							</div>
						</article>

						// If comments are open or we have at least one comment, load up the comment template.
						if( comments_open() || get_comments_number() ):
							comments_template();
						endif;
					endwhile;
				?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>