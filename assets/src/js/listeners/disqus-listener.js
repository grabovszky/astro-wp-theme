const disqus = jQuery('#disqus_thread');

disqus.ready(function() {
  disqus.css('opacity', '0');
  setTimeout(function() {
    if (disqus.children().length >= 3) {
      const comments = disqus.find('iframe:nth-child(2)').detach();
      disqus.empty().append(comments);
      disqus.css('opacity', '1');
    }
  }, 2000);
  setTimeout(function() {
    disqus.css('opacity', '1');
  }, 2001);
});
