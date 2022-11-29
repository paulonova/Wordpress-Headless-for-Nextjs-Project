/**
 * Hamburgare Menu
 */

jQuery("#toggle").click(function () {
  jQuery(this).toggleClass("active");
  jQuery("#overlay").toggleClass("open");
});
