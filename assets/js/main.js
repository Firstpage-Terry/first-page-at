new WOW().init();
var $ = jQuery.noConflict();

$(document).ready(function ($) {
  if ($(".banner-slider").length > 0) {
    $(".banner-slider").slick({
      arrows: false,
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      adaptiveHeight: true,
    });
  }

  $.fn.equalHeights = function () {
    var max_height = 0;
    $(this).each(function () {
      max_height = Math.max($(this).height(), max_height);
    });
    $(this).each(function () {
      $(this).height(max_height);
    });
  }

  $(".testimonialSlider").slick({
    dots: true,
    infinite: false,
    speed: 600,
    adaptiveHeight: true,
    arrows: false,
    autoplay: false,
  });

  $(".services-carousel-lg").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow:
      '<img class="a-left control-c prev slick-prev" src="/wp-content/themes/firstpage/assets/img/carousel-left-button.png">',
    nextArrow:
      '<img class="a-right control-c next slick-next" src="/wp-content/themes/firstpage/assets/img/carousel-right-button.png">',
  });

  $(".services-carousel-md").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow:
      '<img class="a-left control-c prev slick-prev" src="/wp-content/themes/firstpage/assets/img/carousel-left-button.png">',
    nextArrow:
      '<img class="a-right control-c next slick-next" src="/wp-content/themes/firstpage/assets/img/carousel-right-button.png">',
  });

  $(".services-carousel-sm").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 2000,
    prevArrow:
      '<img class="a-left control-c prev slick-prev" src="/wp-content/themes/firstpage/assets/img/carousel-left-button.png">',
    nextArrow:
      '<img class="a-right control-c next slick-next" src="/wp-content/themes/firstpage/assets/img/carousel-right-button.png">',
  });

  if ($(".brandSlider").length > 0) {
    $(".brandSlider").slick({
      dots: true,
      infinite: false,
      arrows: false,
      speed: 600,
      slidesToShow: 5,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 841,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
  }

  $(function () {
    // $('[data-toggle="popover"]').popover();
  });
  
});

//FAQ accordion
$(document).ready(function () {
  $(".testimonialBlock .question").on("click", function () {
    var ansBlock = $(this).parent(".blockwrapper").children(".answer");
    var questionBlock = $(this).parent(".blockwrapper").children(".question");
    $(".answer").not(ansBlock).slideUp();
    $(".question").not(questionBlock).removeClass("active");
    $(this).toggleClass("active");
    ansBlock.slideToggle();
  });

  $(".fullWidth-twoCol .row>div").matchHeight({ property: "min-height" });
});

var dateToday = new Date();
$(".datepicker")
  .datepicker({
    //dateFormat: 'dd-mm-yy',
    //dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
    //minDate: dateToday,
    //beforeShowDay: $.datepicker.noWeekends
  })
  .keyup(function (e) {
    if (e.keyCode == 8 || e.keyCode == 46) {
      $.datepicker._clearDate(this);
    }
  });

/*FIXED STICKY FOOTER SOLUTION*/
$(document).ready(function () {
  $(document.body).css("padding-bottom", $("div.stickyFooter").innerHeight());
});
$(window)
  .resize(function () {
    $(document.body).css("padding-bottom", $("div.stickyFooter").innerHeight());
  })
  .resize();

$(document).ready(function () {
  $("#popup-submit").on("submit", function (evt) {
    evt.preventDefault();
    setTimeout(function () {
      window.location.reload();
    }, 0);
    this.submit();
  });
});


jQuery(function ($) {
  $("#filter").submit(function () {
    var filter = $("#filter");
    $.ajax({
      url: filter.attr("action"),
      data: filter.serialize(), // form data
      type: filter.attr("method"), // POST
      beforeSend: function (xhr) {
        filter.find("button").text("Processing..."); // changing the button label
      },
      success: function (data) {
        filter.find("button").text("Apply filter"); // changing the button label back
        $("#response").html(data); // insert data
        // $(".filter-output").append(result);
      },
    });
    return false;
  });
});

$(document).ready(function (e) {
  $(".input-category-filter").on("change", function (e) {
    $("#applyFilter").click();
    var abc = $(this).val();
    console.log(this);
    // var id = $(this).attr("id");
    // console.log(id);
    // $("#" + id).attr("checked", "checked");

    if (this.checked == true) {
      $("#posts-pagination").hide();
      $(".category-filter-button." + abc).show();
      $(this).prop("checked", true);
    } else {
      $(".category-filter-button." + abc).hide();
      $(this).prop("checked", false);
    }
    var checked = $(".input-category-filter:checked");
    if (checked.length === 0) {
      $(".select-to-filter").hide();
      location.reload();
    } else {
      $(".select-to-filter").show();
    }
  });

  $(".category-filter-button").click(function () {
    var id = $(this).attr("id");
    $(".input-category-filter." + id).prop("checked", false);
    $(".custom-control-label." + id).removeClass("checked");
    $(this).hide();
    $("#applyFilter").click();
    var checked = $(".input-category-filter:checked");
    if (checked.length === 0) {
      $(".select-to-filter").hide();
      location.reload();
    } else {
      $(".select-to-filter").show();
    }
  });

  $(".clear-all-filters").click(function () {
    $(".select-to-filter").hide();
    location.reload();
    $(".input-category-filter").prop("checked", false);
    $(".custom-control-label").removeClass("checked");
  });

  $(".custom-control-label").click(function () {
    console.log(this);
    $(this).toggleClass("checked");
  });
});

$(document).click(function(e) {
  if ((!$(e.target).closest('.navbar-collapse').length)) {
    if ($('.navbar-collapse').hasClass('show')){
      $('#nav-mask-cover').hide();
    }

    $('#navbarSupportedContent').removeClass( "show" );
  }
});

// Mobile nav mask
var mobileNavMask = function() {
  // Open
  $('.nav-ham').on('click', function(){
    $('#nav-mask-cover').show();
  });

  // Close
  $('.navbar-toggler-close').on('click', function(){
    $('#nav-mask-cover').hide();
  });

  $(window).resize(function() {
    if ($(window).width() > 992) {
      $('#nav-mask-cover').hide();
    } else {
      if ($('.navbar-collapse').hasClass('show')){
        $('#nav-mask-cover').show();
      }
    }
  });
}
mobileNavMask();

var scrollingAnimation = function () {
  const caseStudySection = $('.section-casestudy');
  const animatedSections = gsap.utils.toArray('.scroll-trigger');
  
  if (caseStudySection.length > 0) {
    let caseTimeLine = gsap.timeline({
      scrollTrigger: {
        trigger: ".section-casestudy .stats-container",
        start: "top bottom"
      }
    });

    caseTimeLine.from(".section-casestudy .content-area .stats", {x: -100})
    .to(".section-casestudy .content-area .stats", {x: 0});

    caseTimeLine.from(".section-casestudy .content-area .info", {opacity: 0})
    .to(".section-casestudy .content-area .info", {opacity: 1});
  }

  if (animatedSections.length > 0){
    animatedSections.forEach(section => {
      var target = section.querySelector(".scroll-trigger-tar");
      gsap.to(target, { 
        y: 0,
        opacity: 1,
        scrollTrigger: {
          trigger: section,
          start: "top center",
          // scrub: true
        }
      })
    });
  }
}
// scrollingAnimation();