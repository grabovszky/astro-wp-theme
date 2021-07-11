/**
 * Listens for a click on document, and if click is outside of newsletter-form,
 * clears newsletter-form
 *
 * @package Astro
 */

jQuery(document).on('click', function(e) {
  let target = e.target;

  if (!jQuery(target).is('#signup') &&
      !jQuery(target).parents().is('#signup')) {
    jQuery('#signup').trigger('reset');
  }
});
