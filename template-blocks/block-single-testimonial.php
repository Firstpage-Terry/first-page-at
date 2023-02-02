<?php

	$testimonial = get_sub_field('testimonial');
    $name = get_sub_field('name');
	$title = get_sub_field('title');
	$company_logo = get_sub_field('company_logo');

?>

<?php if($testimonial): ?>
<section class="section__single-testimonial">
    <div class="container">
        <div class="block__single-testimonial">
            <div class="single-tes-wrap">
                <span class="single-tes-quote">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/single-tes-quote.svg"/>
                </span>
                <div class="single-tes-content">
                    <?php echo $testimonial;?>
                </div>
                <div class="single-tes-footer">

                    <?php if ($name) { ?>
                        <span class="d-block text-md-right tes-name">
                            <?php echo $name;?>
                        </span>
                    <?php } ?>
                    <?php if ($title) { ?>
                        <span class="d-block text-md-right tes-title">
                            <?php echo $title;?>
                        </span>
                    <?php } ?>
                    
                    <?php if($company_logo) { ?>
                        <div class="tes-logo text-md-right">
                            <img class="d-inline" src="<?php echo $company_logo['url'];?>" alt="Client company logo"/>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>