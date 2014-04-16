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
	$(document).ready(function () {
      $('.checkall').on('click', function () {
        $(this).closest("table").find(':checkbox:visible').prop('checked', this.checked);
      });
    });
	
//	$(document).ready(function () {
//      $('#toggle-all').on('click', function () {
//        $("table:first-of-type").find(':checkbox').prop('checked', 'checked');
//      });
//    });
	
	$(document).ready(function () {
      $('.checkall').on('click', function () {
        $(this).closest(".row").next(".row").find(':checkbox').prop('checked', 'checked');
      });
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
	
// FILTER GROUP RESULTS
	var rows = $('table.groups-list tr');
	var black = rows.filter('.black');
	var white = rows.filter('.white');
	var red = rows.filter('.red');
	var green = rows.filter('.green');
	
	$('#showAllButton').click(function() {
		black.show();
		white.show();
		red.show();
		green.show();
	});
	
	$('#showBlackButton').click(function() {
		black.show();
		white.hide();
		red.hide();
		green.hide();
		$("table.groups-list").find(':checkbox').prop('checked', false);
	});
	
	$('#showWhiteButton').click(function() {
		white.show();
		black.hide();
		red.hide();
		green.hide();
		$("table.groups-list").find(':checkbox').prop('checked', false);
	});
	
	$('#showRedButton').click(function() {
		red.show();
		black.hide();
		white.hide();
		green.hide();
		$("table.groups-list").find(':checkbox').prop('checked', false);
	});
	
	$('#showGreenButton').click(function() {
		green.show();
		black.hide();
		white.hide();
		red.hide();
		$("table.groups-list").find(':checkbox').prop('checked', false);
	});
	
	$("button.list-group-item").on("click", function(){
    $(this)
    .addClass("active")
    .siblings()
      .removeClass("active");
    });