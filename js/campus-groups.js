// JavaScript Document


// LEFT NAVIGATION SLIDE OUT
$(document).ready(function () {
  $('[data-toggle=offcanvas]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
});

$(document).ready(function () {
  $('a.btn.btn-breadcrumb').click(function () {
	$(this).toggleClass('active')
	$(this).find("span").toggleClass("glyphicon-map-marker");
	$(this).find("span").toggleClass("glyphicon-remove");
  });
});

// NAVIGATION TOP BAR FIX

$('#nav').affix({
	   offset: {
        top: $('#portal-banner').height()
      }
});