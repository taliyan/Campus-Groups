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

// NAVIGATION TOP ICON SWITCH
	$(document).ready(function () {
	  $('.navbar-toggle').click(function () {
		$(this).toggleClass('active')
		$(this).find("span").toggleClass("glyphicon-th-list");
		$(this).find("span").toggleClass("glyphicon-remove");
	  });
	});

// SIDEBAR TEXT SWITCH
	$(document).ready(function () {
	  $('.btn-sidebar-show').click(function () {
		var text = $(this).text() == 'Show Sidebar' ? 'Hide Sidebar' : 'Show Sidebar';
		  $('element').slideToggle();
		  $(this).text(text);
	  });
	});

// SELECT ALL CHECKBOX
	$('#toggle-all').click(function() {
   	   $('.table-add input[type="checkbox"]').prop('checked', true);
	});
	
//JAVASCRIPT ENABLE LINK TO TAB
	var hash = document.location.hash;
	var prefix = "tab_";
	if (hash) {
		$('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
	} 

// GO TO SPECIFIC TAB
	$('.nav-tabs a').on('shown', function (e) {
		window.location.hash = e.target.hash.replace("#", "#" + prefix);
	});