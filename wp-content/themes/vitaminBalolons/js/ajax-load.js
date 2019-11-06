jQuery(document).ready(function ($) {
  /*load post*/

  window.scrollToElement = function (block, shift, time) {
      var time = time || 600;
      var shift = shift || 0;
      if (!$(block).length) {
          block = "#" + block;
      }
      var top = $(block).offset().top;
      $('html, body').animate({
          scrollTop: top + shift
      }, time)
  };

  var ajaxIsActive = false;

  $('body').on('click', '.example-item', function (e) {
      e.preventDefault();
      if (ajaxIsActive) return;
      let $btn = $(this),
          $postOffset  = $btn.attr('post-id');

      $.ajax({
          type: "POST",
          dataType: "json",
          url: ajax_vars.ajax_url,
          beforeSend: function () {
              ajaxIsActive = true;
          },
          data: {
              action: 'loader_posts',
              postOffset: postOffset,
              postPerpage: postPerpage,
              postType: postType,
              nonce: ajax_vars.nonce
          },
          complete: function (response) {
              ajaxIsActive = false;
              scrollToElement($btn, -30, 800);
              data = response.responseJSON;
              $('.main-news__items-wrapp').append(data.content);
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



