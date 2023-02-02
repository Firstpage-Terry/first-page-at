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

<div class="<?php echo $animation; ?> block block--two_column-fixed <?php the_sub_field('classes'); ?> <?php echo $layout; ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

        <?php $column_1 = get_sub_field( 'two_column_fixed_content_1' ); ?>
        <?php $column_2 = get_sub_field( 'two_column_fixed_content_2' ); ?>
        <?php $heading = get_sub_field( 'two_column_fixed_heading' ); ?>
        <?php $CTA = get_sub_field( 'two_column_fixed_cta' ); ?>

        <h3><?php echo  $heading; ?></h3>
		<div class="block__two_column-fixed">
			<div class="row">
				<div class="leftCol col-md-6 text-center text-md-left">
					<?php echo $column_1; ?>
				</div>
				<div class="rightCol col-md-6 text-center text-md-left">
					<?php echo $column_2; ?>

					<?php if (ICL_LANGUAGE_CODE == "en") : ?>
                    	<a href="<?php echo $CTA['url']; ?>" class="btn fp-btn fp-btn-orange">GET A FREE QUOTE</a>
                    <?php endif; ?>
                    <?php if (ICL_LANGUAGE_CODE == "zh") : ?>
                    	<a href="<?php echo $CTA['url']; ?>" class="btn fp-btn fp-btn-orange">索取免費報價</a>
                    <?php endif; ?>
				</div>
			</div>
		</div>

		<?php if ( get_sub_field( 'add_custom_css' ) == 1 ) { ?>
			<style><?php echo esc_html( get_sub_field( 'custom_css_block' ) ); ?></style>
		<?php } ?>

		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
