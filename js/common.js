//* Load
jQuery(window).bind('load', function() {
    damaxOwlCarousel();
    // priceMatchHeight();
    // stickyHeader();
});

//* Resize
jQuery(window).resize(function() {
    // priceMatchHeight();
});

//* Scroll
jQuery(window).scroll(function() {
    // damaxStickyHeader();
});

//* Register
function damaxRegister() {
    damaxOwlCarousel();
    damaxToggleMenu();
    // priceMatchHeight();
}
damaxRegister();
//** BEG CUSTOM FUNCTIONS **//


// function priceMatchHeight() {
//  jQuery(function() {
//         jQuery('.build-info p').matchHeight();
//         jQuery('.top-right h3').matchHeight();
//     });
// }



$(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
      $('.header-popup').addClass("hide");
    }
  });



$('.input-phone').intlInputPhone();

jQuery('.popup-btn').magnificPopup({
    type: 'inline',
    duration: 400,
    removalDelay: 500,
    callbacks: {
        beforeOpen: function() {
         this.st.mainClass = this.st.el.attr('data-effect');
     }
 },
 midClick: true
});


jQuery('.close-btn').click(function(event) {
    event.preventDefault();
    jQuery.magnificPopup.close();
});

function incrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal)) {
    parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

function decrementValue(e) {
  e.preventDefault();
  var fieldName = $(e.target).data('field');
  var parent = $(e.target).closest('div');
  var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

  if (!isNaN(currentVal) && currentVal > 0) {
    parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
  } else {
    parent.find('input[name=' + fieldName + ']').val(0);
  }
}

$('.input-group').on('click', '.button-plus', function(e) {
  incrementValue(e);
});

$('.input-group').on('click', '.button-minus', function(e) {
  decrementValue(e);
});


$('body').click(function(e) {
    if ($(e.target).closest('.header-cabiner').length === 0) {
        $(".cabinet-lots").hide();
        $(".cabinet-user").hide();
    }
});





function damaxToggleMenu() {
    $("#toggle").click(function() {
        $(".cabinet-menu-container").toggleClass(" active");
        $("body").toggleClass("menu_expand");
    });

    $(".close-menu-btn").click(function() {
        $(".cabinet-menu-container").toggleClass(" active");
        $("body").toggleClass("menu_expand");
    });

    $(".category-menu-show").click(function() {
        $(".category-container").slideToggle();
        $("body").toggleClass("menu_expand");
    });

    $(".filter-mob-btn").click(function() {
        $(".filter-block-container").slideToggle();
        $("body").toggleClass("menu_expand");
    });

    $(".filter-select").click(function() {
        $(".category-container").slideToggle();
        $("body").toggleClass("menu_expand");
    });

    $("#close-filter").click(function() {
        $(".filter-block-container").slideToggle();
        $("body").toggleClass("menu_expand");
    });

    $(".close-menu").click(function() {
        $(".category-container").slideToggle();
        $("body").toggleClass("menu_expand");
    });

    $(".icon-calendar").click(function() {
        $(".calendar-block").toggleClass(" active");
        $(this).toggleClass(" active");
    });

    $(".cabinet-btn1").click(function() {
        $(".cabinet-lots").slideToggle();
        $(".cabinet-user").hide();
    });

    $(".cabinet-btn2").click(function() {
        $(".cabinet-user").slideToggle();
        $(".cabinet-lots").hide();
    });
}


jQuery(".phone-input").inputmask({"mask": "+7(999) 999 99 99"});



function damaxOwlCarousel() {

  var team = $("#product-slider");

  team.owlCarousel({
    dots: false,
    nav: true,
    items:4,
    margin: 30,
    loop: true,
    mouseDrag: false,
    navText: ["<img src='img/prev.svg'>","<img src='img/next.svg'>"],
    responsive:{
        0:{
            items: 1,
        },
        767:{
            items:3,
        },
        992:{
            items:4,
        }
    }
});


  var work = $("#work-slider");

work.owlCarousel({
    dots: true,
    nav: false,
    items:3,
    margin: 20,
    loop: true,
    mouseDrag: false,
    autoWidth: true,
    responsive:{
        0:{
            items: 1,
        },
        767:{
            items: 2,
        },
        992:{
            items:4,
        }
    }
});

var thank = $(".thank-sld");

thank.owlCarousel({
    dots: true,
    nav: false,
    items:1,
    margin: 25,
    loop: true,
    mouseDrag: false,
    responsive:{
        0:{
            items: 1,
        },
        767:{
            items: 1,
        },
        992:{
            items:1,
        }
    }
});


}



  $('.slick-slider').slick({
    infinite: true,
    dots: false,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.slick-thumbs',
     responsive: [
    {
      breakpoint: 1024,
      settings: {
      }
    },
    {
      breakpoint: 992,
      settings: {
        dots: true,
      }
    },
    {
      breakpoint: 480,
      settings: {
         dots: true,
      }
    }
    ]
  });

  $('.slick-thumbs').slick({
    infinite: true,
    dots: false,
    arrows: true,
    prevArrow: "<a href='javascript:;' class='pic-prev slider-arrow'><img src='img/prev.svg' alt=''></a>",
    nextArrow: "<a href='javascript:;' class='pic-next slider-arrow'><img src='img/next.svg' alt=''></a>",
    autoplay: false,
    focusOnSelect: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.slick-slider',
  });


  $( function() {
    $( "#slider-bet" ).slider({
      range: true,
      min: 0,
      max: 100000,
      values: [ 5000, 50000 ],
      slide: function( event, ui ) {
        $( "#bet" ).val(ui.values[ 0 ]);
        $( "#bet2" ).val(ui.values[ 1 ] );
      }
    });

     $( "#bet" ).val($( "#slider-bet" ).slider( "values", 0 ) );
     $( "#bet2").val($( "#slider-bet" ).slider( "values", 1 ) );
  } );


  $( function() {
    $( "#slider-price" ).slider({
      range: true,
      min: 0,
      max: 111111,
      values: [ 11111, 111111 ],
      slide: function( event, ui ) {
        $( "#price" ).val(ui.values[ 0 ]);
        $( "#price2" ).val(ui.values[ 1 ] );
      }
    });

     $( "#price" ).val($( "#slider-price" ).slider( "values", 0 ) );
     $( "#price2").val($( "#slider-price" ).slider( "values", 1 ) );
  } );

    $( function() {
    $( "#slider-time" ).slider({
      range: true,
      min: 0,
      max:100,
      values: [ 1, 72 ],
      slide: function( event, ui ) {
        $( "#time" ).val(ui.values[ 0 ]);
        $( "#time2" ).val(ui.values[ 1 ] );
      }
    });

     $( "#time" ).val($("#slider-time" ).slider( "values", 0 ) );
     $( "#time2").val($("#slider-time" ).slider( "values", 1 ) );
  } );


      const tabLinks = document.querySelectorAll(".tabs a");
    const tabPanels = document.querySelectorAll(".tabs-panel");

    for (let el of tabLinks) {
        el.addEventListener("click", e => {
            e.preventDefault();

            document.querySelector(".tabs li.active").classList.remove("active");
            document.querySelector(".tabs-panel.active").classList.remove("active");

            const parentListItem = el.parentElement;
            parentListItem.classList.add("active");
            const index = [...parentListItem.parentElement.children].indexOf(parentListItem);

            const panel = [...tabPanels].filter(el => el.getAttribute("data-index") == index);
            panel[0].classList.add("active");
        });
    }


$('img.svg').each((i, e) => {

    const $img = $(e);

    const imgID = $img.attr('id');

    const imgClass = $img.attr('class');

    const imgURL = $img.attr('src');

    $.get(imgURL, (data) => {
        // Get the SVG tag, ignore the rest
        let $svg = $(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', `${imgClass}replaced-svg`);
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr(`viewBox 0 0  ${$svg.attr('height')} ${$svg.attr('width')}`);
        }

        // Replace image with new SVG
        $img.replaceWith($svg);
    }, 'xml');
});