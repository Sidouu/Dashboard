$(function() {
	// INITIAL STATE
	$("#dash-sidemenu").hide();

	// HIDE ELEMENTS BY ESC
	$(document).on('keydown', function (e) {
	    if (e.keyCode === 27) {
	        $("#dash-sidemenu").hide('slide');
			$("header i.icon-reorder").removeClass('open');
	    }
	});

	// NAV MAIN ACTIVE
	$("nav.main ul a").click(function() {
		$("nav.main ul a").each(function() {
			$(this).removeClass("active");
		});
		$(this).addClass("active");
	});

	// DISPLAY SUB NAV
	$("nav.sub").hide();
	$("nav.main ul a:last").on('click', function() {
		var tab = $(this),
			index = tab.parent().index() - 2,
			content = $("nav.sub").eq(index),
			contents = $('nav.sub:visible');
		if (content.is(':visible')) {
			content.slideUp();
			$("nav.main ul a").removeClass("active");
		} else {
			contents.hide(100);
			content.slideDown(500);
		}
	});

	// NAV SUB ACTIVE
	$("nav.sub ul a").click(function() {
		$("nav.sub ul a").each(function() {
			$(this).removeClass("active");
		});
		$(this).addClass("active");
	});

	// SIDEMENU
	$("#icon-sidemenu").click(function() {
		$("#dash-sidemenu").toggle('slide');
		$("header i.icon-reorder").toggleClass('open');
	});

	// SIDEMENU SIZE HEIGHT
	var menuHeight = $("#dash-sidemenu").height() - $("header").height();
	$("#dash-sidemenu").height(menuHeight);

	// FORM CLASS CONTROLS
	$("form div div").addClass("controls");

	// PAGINATION LISTS
	$('.pag-objects').pajinate({
		items_per_page: 5
	});
});