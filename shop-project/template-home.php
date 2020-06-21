<?php 

/*
Template Name: Home Page
*/
get_header(); ?>
<main>
	<section class="slider">
	<div class="owl-carousel owl-theme banner">
	<div class="col-md-12" style=" background: url('<?php echo bloginfo('template_directory'); ?>/img/slider-1.jpg'); background-size: 100% 100% ; padding:200px 0 270px; ">
		<div class="container">
			<div class="slider-title">
				<h1>slider</h1>
			</div>
			<div class="subtitle">
				<p>this is the content</p>
			</div>
		</div>
	</div>
	<div class="col-md-12" style=" background: url('<?php echo bloginfo('template_directory'); ?>/img/slider-2.jpg'); background-size: 100% 100% ; ; padding:200px 0 270px; ">
		<div class="container">
			<div class="slider-title">
				<h1>slider</h1>
			</div>
			<div class="subtitle">
				<p>this is the content</p>
			</div>
		</div>
	</div>
	</section>


	<section class="product-category">
		<div class="container">
			<div class="section-title">
				<h2>Categories</h2>
			</div>
			<div class="owl-carousel owl-theme popular"><?php
				$categories= $categories = get_terms( 'product_cat',  array('parent' => 0));
				foreach($categories as $category){	?>
					<div class="products-detail">
						<div class="img-container" >
							<figure><?php
							$thumbnail_id = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );
							$image = wp_get_attachment_url( $thumbnail_id );						?>  
							<img width= "800"  height= "799" src="<?php echo $image; ?>" alt="">                   
							</figure>
						</div>
						<div class="detail">
							<h4>
								<a href="<?php echo get_the_permalink( $category->term_id ); ?>"><?php
									echo $category->name; ?>
								</a> 
							</h4>    
						</div>
					</div><?php	
				}	?>
			</div>
			<div class="owl-controls">
				<div class="owl-nav">
					<div class="prev-btn" ><img src="<?php echo get_template_directory_uri() ?>/img/prev-btn.png"></div>
					<div class="next-btn" ><img src="<?php echo get_template_directory_uri() ?>/img/next-btn.png"></div>
				</div>
			</div>
		</div>
	</section>

	<section class="new-arrivals">
		<div class="container">
			<div class="section-title">
				<h2>New Arrivals</h2>
			</div>
			<?php echo do_shortcode('[products limit="3" columns="3" order_by="date" ]') ?>
		</div>
	</section>
	
<section class="products-carousel">
	<div class="container">
	<div class="section-title">
				<h2>popular</h2>
			</div>
		<div class="owl-carousel owl-theme popular">
				<?php 
					$product_id=33;
					$_product = wc_get_product( $product_id ); 
					?>
			<div class="col-12 col-md-3 col-lg-3">
				<div class="products-detail">
					<div class="img-container" >
						<figure><?php
						echo get_the_post_thumbnail( $product_id );    ?>                     
						</figure>
					</div>
					<div class="detail">
						<h4>
							<a href="<?php echo get_the_permalink( $product_id ); ?>"><?php
								echo get_the_title( $product_id ); ?>
							</a> 
						</h4>    
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3">
				<div class="products-detail">
					<div class="img-container">
						<figure><?php
						echo get_the_post_thumbnail( $product_id );    ?>                     
						</figure>
					</div>
					<div class="detail">
						<h4>
							<a href="<?php echo get_the_permalink( $product_id ); ?>"><?php
								echo get_the_title( $product_id ); ?>
							</a> 
						</h4>    
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3">
				<div class="products-detail">
					<div class="img-container" >
						<figure><?php
						echo get_the_post_thumbnail( $product_id );    ?>                     
						</figure>
					</div>
					<div class="detail">
						<h4>
							<a href="<?php echo get_the_permalink( $product_id ); ?>"><?php
								echo get_the_title( $product_id ); ?>
							</a> 
						</h4>    
					</div>
				</div>
			</div>
			<div class="col-12 col-md-3 col-lg-3">
				<div class="products-detail">
					<div class="img-container" >
						<figure><?php
						echo get_the_post_thumbnail( $product_id );    ?>                     
						</figure>
					</div>
					<div class="detail">
						<h4>
							<a href="<?php echo get_the_permalink( $product_id ); ?>"><?php
								echo get_the_title( $product_id ); ?>
							</a> 
						</h4>    
					</div>
				</div>
			</div>	
		</div>
		<div class="owl-controls">
				<div class="owl-nav">
					<div class="prev-btn" ><img src="<?php echo get_template_directory_uri() ?>/img/prev-btn.png"></div>
					<div class="next-btn" ><img src="<?php echo get_template_directory_uri() ?>/img/next-btn.png"></div>
				</div>
			</div>
	</div>
</section>
</main>
<script>
jQuery(document).ready(function($){
	$('.banner').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		autoplayTimeout:3000,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
});
</script>
<script>
jQuery(document).ready(function($){
	     $('.popular').owlCarousel({
                loop: true,
                
                margin: 10,
                dots: true,
                nav: false,
                responsiveClass:true,
                autoplayTimeout:2000,
                responsive:{

                    0:{

                        items:1
                    },
                    600:{

                        items:2
                    },
                    1000:{

                        items:4
                    }
                }
            })

            var owl = $('.popular');
            owl.owlCarousel();
// Go to the next item
$('.next-btn').click(function() {
    owl.trigger('next.owl.carousel');
})
// Go to the previous item
$('.prev-btn').click(function() {
    // With optional speed parameter
    // Parameters has to be in square bracket '[]'
    owl.trigger('prev.owl.carousel', [300]);
})
});
</script>

</main>
	<?php get_footer(); ?>