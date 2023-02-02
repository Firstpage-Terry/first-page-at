if ($('.lang-item-en.current-lang').length > 0 &&
    $('body.page-thank-you').length == 0 &&
    $('body.page-booking-confirmation').length == 0 &&
    $('body.page-seo-audit').length == 0 &&
    $('body.page-thank-you-google-ads').length == 0 &&
    $('body.page-thank-you-orm').length == 0 &&
    $('body.page-thank-you-pcw').length == 0 &&
    $('body.page-thank-you-removify').length == 0 &&
    $('body.page-thank-you-audit').length == 0 &&
    $('body.page-thank-you-competitor').length == 0 &&
   ){
        setTimeout(() => {
            $(document).on("mouseout", evt => {
                if (evt.toElement === null && evt.relatedTarget === null) {
                    $(evt.currentTarget).off("mouseout");
                    var demoContent =
                                '<div class="container">\
                                <div class="row">\
                                    <div class="col-md-6">\
                                        <img class="img-fluid" \
                                        src="/wp-content/uploads/img-seo_audit_pop_up.png?v2" \
                                        srcset="/wp-content/uploads/img-seo_audit_pop_up@2x.png?v2 2x" \
                                        alt="">\
                                    </div>\
                                    <div class="col-md-6 text-center">\
                                        <h2>WAIT!</h2>\
                                        <h3 class="text-center">Get a Free SEO Audit in 3 minutes!</h3>\
                                        <a class="btn fp-btn fp-btn-orange fp-session fp-btn-shadow red" href="/seo-audit/">GET YOUR FREE SEO AUDIT</a>\
										<p>Get a Free SEO Audit in 3 minutes!</p>\
                                    </div>\
                                </div>\
                                </div>';


                    var jPopupDemo = new jPopup({

                        content: demoContent,
                        hashtagValue: '#demopopup'

                    });
                }
            });
        }, 700);
    } 