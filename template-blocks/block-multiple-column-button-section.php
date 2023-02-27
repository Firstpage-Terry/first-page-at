<?php

	$background = get_sub_field('background');
    $animation = get_sub_field('animation');
    $animation = $animation ? " wow {$animation} " : '';
	$margin = get_sub_field('margin');
	$padding = get_sub_field('padding');
	$customClass = get_sub_field('custom_class');
	$layout = get_sub_field('layout');

	$background_url = '';
	if ( $background['image'] )
		$background_url = wp_get_attachment_image_url( $background['image'], 'full' );

?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--multiple-column-button-section <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block_slider_repeater">
			
		<?php if ( 'Stacked' == get_sub_field('slider_type') ): ?>
			<?php 
			$carousel_stacked = get_sub_field('heading_slider');
			$carousel_stacked_id = preg_replace('/[^A-Za-z0-9\-]/', '', $carousel_stacked); 
			?>
			<section class="section-services <?php echo $carousel_stacked_id; ?> scroll-trigger">
				<div class="container">
					<div class="section-title mb-0">
						<h2><?php the_sub_field('heading_slider'); ?>
						</h2>
						<p class="slider-subheading"><?php the_sub_field('subheading_slider'); ?></p>
					</div>
					<div class="row justify-content-md-center scroll-trigger-tar">
						<?php if( have_rows('main_repeater') ): ?>
							<?php while( have_rows('main_repeater') ): the_row(); 
								$image = get_sub_field('image');
								?>
									<div class="col-12 col-md-6 col-lg-3">
										<div class="card">
											<img src="<?php echo $image['url']; ?>"  width="100" height="100" alt="<?php strip_tags(the_sub_field('heading')); ?>" />
											<div class="card-body">
												<h3 class="card-title capitalize"><?php the_sub_field('heading'); ?></h3>
												<p class="card-text min-height text-sm-center"><?php the_sub_field('content'); ?></p>
												<div class="card-bullets">
												<?php if(get_sub_field('below_content')): ?>
													<?php if (is_front_page()): ?>
														<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
															<h4>Start with…</h4>
														<?php } ?>
														<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
															<h4>包括</h4>
														<?php } ?>
													<?php endif; ?>
													<?php echo get_sub_field('below_content'); ?>
												<?php endif; ?> 
												</div>
											</div>
											<?php 
											$link = get_sub_field('cta');
											if(get_sub_field('cta')): ?>
											<div class="card-footer">
												<?php if(ICL_LANGUAGE_CODE == "en"): ?>
												<a href="<?php the_sub_field('cta'); ?>">Learn More</a>
												<?php endif; ?>
												<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
												<a href="<?php the_sub_field('cta'); ?>">了解更多</a>
												<?php endif; ?>
											</div>
											<?php endif; ?> 
										</div>
									</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</section>

			<?php else: ?>
<section class="section-services-carousel">
	<div class="container">
		<div class="section-title">
			<h2><?php the_sub_field('heading_slider'); ?>
			</h2>
			<p class="slider-subheading"><?php the_sub_field('subheading_slider'); ?></p>
		</div>

		<?php 
			$carousel_counter = get_sub_field('heading_slider');
			$carousel_id = preg_replace('/[^A-Za-z0-9\-]/', '', $carousel_counter); 
			?>

		<div class="services-carousel-lg d-none d-lg-block <?php echo $carousel_id; ?>">
			
			<?php if( have_rows('main_repeater') ): ?>
				<?php while( have_rows('main_repeater') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<div class="col card-link-building">
					<div class="card">
						<img src="<?php echo $image['url']; ?>" width="100" height="100" alt="<?php strip_tags(the_sub_field('heading')); ?>">
						<div class="card-body">
							<h4 class="card-title-carousel flex-item"><?php the_sub_field('heading'); ?></h4>
							<p class="card-text-carousel text-center"><?php the_sub_field('content'); ?></p>
							<div class="card-bullets">
							<?php if(get_sub_field('below_content')): ?>
								<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
									<h4>Start with…</h4>
								<?php } ?>
								<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
									<h4>包括</h4>
								<?php } ?>
								<?php echo get_sub_field('below_content'); ?>
							<?php endif; ?>
							</div>
						</div>
						<?php 
						$link = get_sub_field('cta');
						if(get_sub_field('cta')): ?>
						<div class="card-footer">
							<?php if(ICL_LANGUAGE_CODE == "en"): ?>
								<a href="<?php the_sub_field('cta'); ?>">Learn More</a>
							<?php endif; ?>
							<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
								<a href="<?php the_sub_field('cta'); ?>">了解更多</a>
							<?php endif; ?>
						</div>
						<?php endif; ?> 
						</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>

		</div>

		<?php 
			$carousel_counter = get_sub_field('heading_slider');
			$carousel_id_md = preg_replace('/[^A-Za-z0-9\-]/', '', $carousel_counter); ?>

		<div class="services-carousel-md d-none d-md-block d-lg-none <?php echo $carousel_id_md; ?>">
			

			<?php if( have_rows('main_repeater') ): ?>
				<?php while( have_rows('main_repeater') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<div class="col card-link-building">
					<div class="card">
						<img src="<?php echo $image['url']; ?>" width="100" height="100" alt="<?php strip_tags(the_sub_field('heading')); ?>">
						<div class="card-body">
							<h4 class="card-title-carousel"><?php the_sub_field('heading'); ?></h4>
							<p class="card-text-carousel text-center"><?php the_sub_field('content'); ?></p>
							<div class="card-bullets">
							<?php if(get_sub_field('below_content')): ?>
								<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
									<h4>Start with…</h4>
								<?php } ?>
								<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
									<h4>包括</h4>
								<?php } ?>
								<?php echo get_sub_field('below_content'); ?>
							<?php endif; ?> 
							</div>
						</div>
						<?php 
						$link = get_sub_field('cta');
						if(get_sub_field('cta')): ?>
						<div class="card-footer">
							<?php if(ICL_LANGUAGE_CODE == "en"): ?>
								<a href="<?php the_sub_field('cta'); ?>">Learn More</a>
							<?php endif; ?>
							<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
								<a href="<?php the_sub_field('cta'); ?>">了解更多</a>
							<?php endif; ?>
						</div>
						<?php endif; ?> 
						</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>


		</div>

		<div class="services-carousel-sm d-block d-md-none <?php echo $carousel_id; ?>">
			

			<?php if( have_rows('main_repeater') ): ?>
				<?php while( have_rows('main_repeater') ): the_row(); 
				$image = get_sub_field('image');
				?>
				<div class="col card-link-building">
					<div class="card">
						<img src="<?php echo $image['url']; ?>" width="100" height="100" alt="<?php strip_tags(the_sub_field('heading')); ?>">
						<div class="card-body">
							<h4 class="card-title"><?php the_sub_field('heading'); ?></h4>
							<p class="card-text text-center"><?php the_sub_field('content'); ?></p>
							<div class="card-bullets">
							<?php if(get_sub_field('below_content')): ?>
								<?php if(ICL_LANGUAGE_CODE == 'en') { ?>
									<h4>Start with…</h4>
								<?php } ?>
								<?php if(ICL_LANGUAGE_CODE == 'de') { ?>
									<h4>包括</h4>
								<?php } ?>
								<?php echo get_sub_field('below_content'); ?>
							<?php endif; ?> 
							</div>
						</div>
						<?php 
						$link = get_sub_field('cta');
						if(get_sub_field('cta')): ?>
						<div class="card-footer">
							<?php if(ICL_LANGUAGE_CODE == "en"): ?>
								<a href="<?php the_sub_field('cta'); ?>">Learn More</a>
							<?php endif; ?>
							<?php if(ICL_LANGUAGE_CODE == "zh"): ?>
								<a href="<?php the_sub_field('cta'); ?>">了解更多</a>
							<?php endif; ?>
						</div>
						<?php endif; ?> 
						</div>
				</div>
				<?php endwhile; ?>
			<?php endif; ?>


		</div>

	</div>


</section>
					
					
			<?php endif; ?> 

		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>


<script>
      setTimeout(function() {
        jQuery(".card-title").equalHeights();
		jQuery(".card-text-carousel").equalHeights();
		jQuery(".card-title-carousel").equalHeights();
      }, 2000);

  


//     $(document).ready(function () {
//       $(".<?php // echo $carousel_id; ?> .card-title-carousel").equalHeights();
//     });
  

//     $(document).ready(function () {
//       $(".<?php // echo $carousel_id; ?> .card-text-carousel").equalHeights();
//     });

//     $(document).ready(function () {
//       $(".<?php // echo $carousel_id; ?> .card-bullets").equalHeights();
//     });
  

//     $(document).ready(function () {
//       $(".<?php // echo $carousel_id_md; ?> .card-title-carousel").equalHeights();
//     });
  

//     $(document).ready(function () {
//       $(".<?php // echo $carousel_id_md; ?> .card-text-carousel").equalHeights();
//     });
  

//     $(document).ready(function () {
//       $(".<?php // echo $carousel_id_md; ?> .card-bullets").equalHeights();
//     });

// 	$(document).ready(function () {
//       $(".<?php // echo $carousel_stacked_id; ?> .card-title").equalHeights();
//     });
  
// });
</script>