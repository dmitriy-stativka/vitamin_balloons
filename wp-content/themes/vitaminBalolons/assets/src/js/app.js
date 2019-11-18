// ====== sly slider init !!!
(function () {
  var $frame = $('#cycleitems');
  var $wrap  = $frame.parent();

  // Call Sly on frame
  $frame.sly({
    horizontal: 1,
    itemNav: 'basic',
    smart: 1,
    activateOn: 'click',
    mouseDragging: 1,
    touchDragging: 1,
    releaseSwing: 1,
    startAt: 0,
    scrollBar: $wrap.find('.scrollbar'),
    scrollBy: 1,
    speed: 1000,
    elasticBounds: 1,
    easing: 'easeOutExpo',
    dragHandle: 1,
    dynamicHandle: 1,
    clickBar: 1,

    // Cycling
    cycleBy: 'items',
    cycleInterval: 0,
    pauseOnHover: 1,

    // Buttons
    prev: $wrap.find('.prev'),
    next: $wrap.find('.next')
  });

  
}());

$('.reviews-list').slick({
  infinite: false,
  slidesToShow: 3,
  slidesToScroll: 2,
  dots: true,
  responsive: [
    {
    breakpoint: 991,
    settings: {
        slidesToShow: 2,
        slidesToScroll: 1
    }
    },
    {
    breakpoint: 700,
    settings: {
        slidesToShow: 1,
        slidesToScroll: 1
    }
    }
  ]
});

var p = $('.popup__overlay')
$('.popup__toggle').click(function() {
    p.addClass('popup_open')
})
$('.popup__close').click(function() {
    p.removeClass('popup_open')
})

var j = $('.popupProduct')
$('.example-item').click(function() {
    j.addClass('popup-ajax')
})
$('.popup__close').click(function() {
    j.removeClass('popup-ajax')
})
 
var m = $('.popup__call--back')
$('.popup__call').click(function() {
    m.addClass('popup_open_in')
})

$('.popup__close').click(function() {
    m.removeClass('popup_open_in')
})


$('.accordion-item .heading').on('click', function(e) {
    e.preventDefault();

    // Add the correct active class
    if($(this).closest('.accordion-item').hasClass('active')) {
        // Remove active classes
        $('.accordion-item').removeClass('active');
    } else {
        // Remove active classes
        $('.accordion-item').removeClass('active');

        // Add the active class
        $(this).closest('.accordion-item').addClass('active');
    }

    // Show the content
    var $content = $(this).next();
    $content.slideToggle(100);
    $('.accordion-item .content').not($content).slideUp('fast');
});

$('.tabs li:first-child').addClass('active');
$('.tabs-content .tabs-panel:first-child').addClass('active');


$('.tabs-panel').each(function(val) {
    $(this).attr('data-index', val);
});