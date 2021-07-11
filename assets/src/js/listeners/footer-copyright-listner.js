const copyrightText = jQuery('#footer-copyright');

copyrightText.on('mouseenter', function() {
  copyrightText.data('originalText', copyrightText.text());

  tOut = setTimeout(function() {
    copyrightText.fadeOut(400, function() {
      copyrightText.html(
          'Made by: ' +
          '<a href="https://www.gaborkristof.com">Gábor Kristóf</a>',
      ).fadeIn();
    });
  }, 2000);

}).on('mouseleave', function() {
  clearTimeout(tOut);
  copyrightText.text(copyrightText.data('originalText'));
});
