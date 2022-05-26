<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package KuroE
 */

get_header();
?>

	<main id="primary" class="site-main">

	
	<section class="section-intro">
<div class="card-banner overlay-gradient" style="min-height:350px; background-image: url('<?php echo get_stylesheet_directory_uri() ?>/images/posts/2.jpg');">
  <div class="card-img-overlay">
	  
	<div class="container">
	
	  <article class="my-5">
	 
	    <h1 class="display-4 text-white"> Best hardware & <br> cheap components in our store  </h1>
	    <p class="lead text-white">Gaming, media or working stations, we got anything you need!</p>
	    <a href="#" class="btn btn-primary"> Purchase now</a> 
	    <a href="#" class="btn btn-light"> Learn more </a>
	
	  </article>
	 
</div>
</div>
	</div> <!-- container end.// -->
</section>


		<section class="container popular-products">
			<h1 class="text-center pt-5">New Products</h1>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products recent_products columns=4 limit=4]' ); ?>
			</div>
		</section>


<section class="bg-light padding-y">
<div class="container">

	<header class="section-heading mt-2 mb-5">
		<h3 class="section-title">Why choose us</h3>
	</header> 

	<div class="row mb-4">
		<div class="col-lg-4 col-md-6">	
			<figure class="itemside align-items-center mb-4">
				<div class="aside">
					<span class="rounded-circle shadow-sm text-primary icon-lg bg-white">
						<i class="fa fa-money-bill" style="color: #282d32;"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">Safe & reliable payments</h6>
</figcaption>
			</figure> <!-- itemside // -->
		</div><!-- col // -->
		<div class="col-lg-4 col-md-6">
			<figure class="itemside align-items-center  mb-4">
				<div class="aside">
					<span class="rounded-circle shadow-sm text-primary icon-lg bg-white">
						<i class="fa fa-star" style="color: #282d32;"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">Best quality</h6>
				</figcaption>
			</figure> <!-- itemside // -->
		</div><!-- col // -->
	    <div class="col-lg-4 col-md-6">
			<figure class="itemside align-items-center  mb-4">
				<div class="aside">
					<span class="rounded-circle shadow-sm text-primary icon-lg bg-white">
						<i class="fa fa-plane" style="color: #282d32;"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">Worldwide shipping</h6>
				</figcaption>
			</figure> <!-- itemside // -->
		</div> <!-- col // -->
		<div class="col-lg-4 col-md-6">	
			<figure class="itemside align-items-center  mb-4">
				<div class="aside">
					<span class="rounded-circle shadow-sm text-primary icon-lg bg-white">
						<i class="fa fa-users" style="color: #282d32;"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">Customer satisfaction</h6>
				</figcaption>
			</figure> <!-- itemside // -->
		</div><!-- col // -->
		<div class="col-lg-4 col-md-6">
			<figure class="itemside align-items-center mb-4">
				<div class="aside">
					<span class="rounded-circle shadow-sm text-primary icon-lg bg-white">
						<i class="fa fa-thumbs-up" style="color: #282d32;"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 class="title">Happy customers</h6>
				</figcaption>
			</figure> <!-- itemside // -->
		</div><!-- col // -->
	    <div class="col-lg-4 col-md-6">
			<figure class="itemside align-items-center mb-4">
				<div class="aside">
					<span class="rounded-circle shadow-sm text-primary icon-lg bg-white">
						<i class="fa fa-box" style="color: #282d32;"></i>
					</span>
				</div>
				<figcaption class="info">
					<h6 clas__s="title">Thousand items</h6>
				</figcaption>
			</figure> <!-- itemside // -->
		</div> <!-- col // -->
	</div>
</div> <!-- container end.// -->
</section>

		<section class="container pt-5 special-offers">
			<h1 class="text-center pt-5">Popular products</h1>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products popularity  columns=4 limit=4]' ); ?>
			</div>
		</section>

	</main>

<?php
get_footer();
