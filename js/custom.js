// Full Page Search

const fullPageSearch = jQuery("#full-page-search"),
	fullPageSearchBtn = jQuery("#full-page-search-btn"),
	searchCloseBtn = jQuery("#search-close-btn"),
	modalSearchField = jQuery("#modal-search-field"),
	siteMain = jQuery(".site");

fullPageSearchBtn.on("click", function () {
	siteMain.addClass("site--move");
	fullPageSearch.addClass("active");
	modalSearchField[0].focus();
});

jQuery(document).on("keyup", function (e) {
	if (e.key == 27) {
		siteMain.removeClass("site--move");
		fullPageSearch.removeClass("active");
		modalSearchField.val("");
		// right nav
		siteMain.removeClass("site--move-right");
		rightNav.removeClass("right-navbar-menu-open");
	} else if (e.keyCode == 27) {
		siteMain.removeClass("site--move");
		fullPageSearch.removeClass("active");
		modalSearchField.val("");
		// right nav
		siteMain.removeClass("site--move-right");
		rightNav.removeClass("right-navbar-menu-open");
	}
});

searchCloseBtn.on("click", function () {
	siteMain.removeClass("site--move");
	fullPageSearch.removeClass("active");
	modalSearchField.val("");
});

// Tooltip
jQuery(function () {
	jQuery('[data-toggle="tooltip"]').tooltip();
});

// Scroll Top

jQuery(function () {
	const btn = jQuery("#scroll-top-button");

	jQuery(window).on("scroll", function () {
		if (jQuery(window).scrollTop() > 500) {
			btn.addClass("show");
		} else {
			btn.removeClass("show");
		}
	});

	btn.on("click", function (e) {
		e.preventDefault();
		jQuery("html, body").animate({ scrollTop: 0 }, "500");
	});
});

// ajax filter

jQuery(function () {
	jQuery(document).on("click", ".filter-project-item", function (e) {
		e.preventDefault();

		var category = jQuery(this).data("category");

		jQuery.ajax({
			url: wpAjax.ajaxUrl,
			data: { action: "filter", category: category },
			type: "post",
			success: function (result) {
				jQuery(".filter-projects").html(result);

				jQuery(function () {
					const grid = document.querySelector(".masonry-grid");

					const masonry = new Masonry(grid, {
						itemSelector: ".masonry-grid-block",
						gap: "1rem",
					});
				});
			},
			error: function (result) {
				console.warn(result);
				console.log("fuck naman oh");
			},
		});
	});
});

// Project Masonry

jQuery(function masonry() {
	const grid = document.querySelector(".masonry-grid");

	const masonry = new Masonry(grid, {
		itemSelector: ".masonry-grid-block",
		gap: "1rem",
	});
});

// right navbar

const pageContainer = jQuery("#page"),
	rightNavButton = jQuery("#btn-right-navbar"),
	rightNav = jQuery("#navbar-offset-right"),
	navCloseBtn = jQuery("#nav-close-btn");

rightNavButton.on("click", function () {
	rightNav.addClass("right-navbar-menu-open");
	siteMain.addClass("site--move-right");
});

navCloseBtn.on("click", function () {
	siteMain.removeClass("site--move-right");
	rightNav.removeClass("right-navbar-menu-open");
});

// 3rd level dropdown menu

jQuery(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
	if (!jQuery(this).next().hasClass("show")) {
		jQuery(this)
			.parents(".dropdown-menu")
			.first()
			.find(".show")
			.removeClass("show");
	}
	var $subMenu = jQuery(this).next(".dropdown-menu");
	$subMenu.toggleClass("show");

	jQuery(this)
		.parents("li.nav-item.dropdown.show")
		.on("hidden.bs.dropdown", function (e) {
			jQuery(".dropdown-submenu .show").removeClass("show");
		});

	return false;
});

// check if the element is in viewport

function isIntoView(elem) {
	const documentViewTop = jQuery(window).scrollTop(),
		documentViewBottom = documentViewTop + jQuery(window).height(),
		elementTop = jQuery(elem).offset().top,
		elementBottom = elementTop + jQuery(elem).height();

	return elementBottom <= documentViewBottom && elementTop >= documentViewTop;
}

// number counter

jQuery(window).on("scroll", function animateCountUp(e) {
	if (isIntoView(jQuery(".services-counter"))) {
		// the counter function
		jQuery(".counter").each(function () {
			jQuery(this)
				.prop("Counter", 0)
				.animate(
					{
						Counter: jQuery(this).text(),
					},
					{
						duration: 3500,
						easing: "swing",
						step: function (now) {
							jQuery(this).text(Math.ceil(now));
						},
					}
				);
		});
		jQuery(this).off(e);
	}
});
