/**
 * Listens for a click on document, and if click is outside of search-form,
 * clears search-form
 *
 * @package Astro
 */

jQuery(document).on('click', function(e) {
  let target = e.target;

  if (!jQuery(target).is('#searchInput') &&
      !jQuery(target).parents().is('#searchInput')) {
    jQuery('#searchInput').trigger('reset');
  }
});
