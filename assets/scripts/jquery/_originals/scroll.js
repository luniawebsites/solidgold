$('a[data-smoothscroll="yes"]').on("click", function(t) {
	t.preventDefault(), $("html, body").animate({
		scrollTop: $($(this).attr("href")).offset().top - 74
	}, 350, "linear")
});