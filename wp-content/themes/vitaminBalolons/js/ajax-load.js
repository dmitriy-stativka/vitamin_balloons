jQuery(document).ready(function ($) {
  /*load post*/

  // window.scrollToElement = function (block, shift, time) {
  //     var time = time || 600;
  //     var shift = shift || 0;
  //     if (!$(block).length) {
  //         block = "#" + block;
  //     }
  //     var top = $(block).offset().top;
  //     $('html, body').animate({
  //         scrollTop: top + shift
  //     }, time)
  // };

  var ajaxIsActive = false;

  $('body').on('click', '.example-item', function (e) {
      e.preventDefault();
      if (ajaxIsActive) return;
      let $btn = $(this),
          idPost = $btn.attr('data-id');
        
      $.ajax({
          type: "POST",
          dataType: "json",
          url: ajax_vars.ajax_url,
          beforeSend: function () {
              ajaxIsActive = true;
          },
          data: {
              action: 'loader_posts',
              idPost: idPost,
              nonce: ajax_vars.nonce
          },
          complete: function (response) {
              ajaxIsActive = false;
              // scrollToElement($btn, -30, 800);
              data = response.responseJSON;
              // console.log(data.content);

              $('.popupProduct .popupProduct-description').empty();
              $('.popupProduct .popupProduct-description').append(data.content);

              $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.slider-nav'
              });
              $('.slider-nav').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                centerMode: true,
                arrows: false,
                focusOnSelect: true,
                responsive: [
                    {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                    },
                    {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                    },
                    {
                      breakpoint: 340,
                      settings: {
                          slidesToShow: 2,
                          slidesToScroll: 1
                      }
                    }
                ]
              });

              return;  

              $('.guide_row').append(data.content);
              postOffset = parseInt(postOffset) + parseInt(postPerpage);
              if (postOffset >= postTotal) {
                  $btn.hide();
              }
              $btn.attr('data-post-offset', postOffset);
          },
          error: function (jqXHR, textStatus, errorThrown) {
              console.error('Ajax request failed', jqXHR, textStatus, errorThrown);
          }
      });
  });
});