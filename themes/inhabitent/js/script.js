(function($) {
  $(function() {
    $('.site-header .icon-search').click(function(event) {
      event.preventDefault();

      $('.site-header .search-field .input').toggleClass('active');
      $(".site-header input[type='text']").focus();
    });

    $('.site-header .search-field .input').blur(function() {
      $(this).toggleClass('active');
    });
  });
})(jQuery);
