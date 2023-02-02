<?php get_header(); ?>

<style>
	section.section-paragraph {
		padding: 40px 0;
	}

	section.banner {
		background: linear-gradient(#000, rgba(0, 0, 0, 0) 50%), linear-gradient(135deg, #000, rgba(0, 0, 0, .65) 50%, rgba(0, 0, 0, 0) 100%), url('<?php echo get_the_post_thumbnail_url(get_post()->ID); ?>') no-repeat top 10% right/200% #000;
	}

	section.section-paragraph h4 {
		color: #666666;
		font-size: 30px;
	}

	section.section-paragraph .item {
		margin-bottom: 40px;
	}

	section.section-paragraph .item .percentage {
		color: #FF5254;
		font-weight: 700;
		font-size: 60px;
	}

	section.section-paragraph .item .percentage small {
		font-size: 40px;
	}

	section.image-separator {
		height: 100px;
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
	}

	.similar-case-studies {
		color: #666;
		text-decoration: none;
	}

	.similar-case-studies:hover,
	section.section-paragraph .similar-case-studies:hover h4 {
		color: #ff5254;
		text-decoration: none;
	}

	@media(min-width: 768px) {
		section.section-paragraph {
			padding: 60px 0;
		}

		section.image-separator {
			height: 200px;
		}

		section.banner {
			background: linear-gradient(#000, rgba(0, 0, 0, 0) 25%), linear-gradient(135deg, #000, rgba(0, 0, 0, .75) 50%, rgba(0, 0, 0, 0) 75%), url('<?php echo get_the_post_thumbnail_url(); ?>') no-repeat top 25% right/cover #000;
		}

		section.section-paragraph .item .img {
			height: 100px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

	}


	@media(min-width: 992px) {
		section.section-paragraph {
			padding: 80px 0;
		}

		section.image-separator {
			height: 400px;
		}

		section.banner h1,
		section.banner h2 {
			text-align: left;
		}
	}

	@media (max-width: 991px) {

		section.section-paragraph.mob-center p {
			text-align: center;
		}

		section.section-paragraph.mob-center h4 {
			font-size: 22px;
			line-height: 32px;
			text-align: center;
		}

		section.section-paragraph.mob-center h1,
		section.section-paragraph.mob-center h2,
		section.section-paragraph.mob-center h3 {
			font-size: 30px;
			line-height: 40px;
			text-align: center;
		}

		section.section-paragraph.mob-center .img-fluid,
		section.section-paragraph .img-fluid {
			max-width: 100%;
		}
	}
</style>

<section class="banner mob-center">
	<div class="container">
		<div class="row justify-content-center justify-content-lg-start">
			<div class="col-md-8 col-lg-6">
				<h1><?php echo the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>

<?php $hero = get_field('case_study_top_section');
if( $hero ): ?>
<section class="section-paragraph pb-0 mob-center">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 text-center text-lg-left">
				<img src="<?php echo esc_url( $hero['case_study_image']['url'] ); ?>" alt="<?php echo esc_attr( $hero['case_study_image']['alt'] ); ?>"  class="img-fluid mb-4">
			</div>
			<div class="col-12 col-lg-9 align-self-center text-column">
				<?php echo $hero['case_study_description']; ?>
			</div>
		</div>
	</div>
</section>

<?php endif; ?>


<?php echo get_field('case_study_results') ?>

<?php 
 $bannercenter = get_field('case_study_banner_center');
 $case_study_banner_stretched = get_field('case_study_banner_stretched');
 $case_study_the_business_problem = get_field('case_study_the_business_problem');
 $case_study_how_we_solved_it = get_field('case_study_how_we_solved_it');
?>
<section>
	<div class="container">
		<img src="<?php echo esc_url( $bannercenter['url'] ); ?>"
			class="img-fluid d-none d-lg-block">
		<img src="<?php echo esc_url( $bannercenter['url'] ); ?>"
			class="img-fluid d-lg-none">
	</div>
</section>

<section class="section-paragraph mob-center">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 heading-column">
				<?php if (ICL_LANGUAGE_CODE == "en") : ?>
					<h2>The Business Problem</h2>
				<?php endif; ?>
				<?php if (ICL_LANGUAGE_CODE == "zh") : ?>
					<h2>商業問題</h2>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-9 align-self-center text-column">
				<?php echo $case_study_the_business_problem; ?>
			</div>
		</div>
	</div>
</section>

<section class="image-separator"
	style="background-image: url(<?php echo esc_url( $case_study_banner_stretched['url'] ); ?>);">
</section>

<section class="section-paragraph pb-0 mob-center">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 heading-column">
				<?php if (ICL_LANGUAGE_CODE == "en") : ?>
					<h2>How We<br class="d-none d-lg-block">
					Solved It</h2>
				<?php endif; ?>
				<?php if (ICL_LANGUAGE_CODE == "zh") : ?>
					<h2>我們如何解決</h2>
				<?php endif; ?>
			</div>
			<div class="col-12 col-lg-9 align-self-center text-column">
				<?php echo $case_study_how_we_solved_it; ?>

			</div>
		</div>
	</div>
</section>


<?php
$previous = get_previous_post();
$next = get_next_post();

$previous_top_section_field = get_field('case_study_top_section', $previous -> ID);
$next_top_section_field = get_field('case_study_top_section', $next -> ID);


?>

<section class="section-paragraph mob-center">
	<div class="container">
		<?php if (ICL_LANGUAGE_CODE == "en") : ?>
			<h2>Similar Case Studies</h2>
		<?php endif; ?>
		<?php if (ICL_LANGUAGE_CODE == "zh") : ?>
			<h2>類似個案研究</h2>
		<?php endif; ?>
		<div class="row">
			<div class="col-12 col-lg-6 mb-4 mb-lg-0">
				<a href="<?php echo get_permalink($previous -> ID); ?>" class="similar-case-studies">
					
				<div class="position-relative w-100">
				<img src="<?php echo get_the_post_thumbnail_url( $previous->ID ); ?>"
						class="img-fluid mb-3" style="min-height: 400px; max-height: 400px;">
					<div class="bg-white position-absolute w-100 d-flex justify-content-center" style="bottom: 16px; border-radius: 15px;padding: 15px;box-shadow: 0px 2px 20px 2px rgb(0 0 0 / 15%);">
					<img src="<?php echo esc_url( $previous_top_section_field['case_study_image']['url'] ); ?>" alt="<?php echo esc_attr( $previous_top_section_field['case_study_image']['alt'] ); ?>"  class="img-fluid" style="min-height: 60px; max-height: 60px;">
					</div>
				</div>

					
					<p class="mb-0">SEO</p>
					<h4 class="mb-0"><?php echo get_the_title($previous) ?></h4>
				</a>
			</div>
			<div class="col-12 col-lg-6 mb-4 mb-lg-0">
				<a href="<?php echo get_permalink($next -> ID); ?>" class="similar-case-studies">
				<div class="position-relative w-100">
				<img src="<?php echo get_the_post_thumbnail_url( $next->ID ); ?>"
						class="img-fluid mb-3" style="min-height: 400px; max-height: 400px;">
					<div class="bg-white position-absolute w-100 d-flex justify-content-center" style="bottom: 16px; border-radius: 15px;padding: 15px;box-shadow: 0px 2px 20px 2px rgb(0 0 0 / 15%);">
					<img src="<?php echo esc_url( $next_top_section_field['case_study_image']['url'] ); ?>" alt="<?php echo esc_attr( $next_top_section_field['case_study_image']['alt'] ); ?>"  class="img-fluid" style="min-height: 60px; max-height: 60px;">
					</div>
				</div>

					<p class="mb-0">SEO</p>
					<h4 class="mb-0"><?php echo get_the_title($next) ?></h4>
				</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>