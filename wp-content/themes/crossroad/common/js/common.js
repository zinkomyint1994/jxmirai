// JavaScript Document
$(document).ready(function() {
				$(".menu").click(function() {
					$(this).next(".gNav").slideToggle("fast");
					$(this).toggleClass("active");
					$(this).siblings(".menu").removeClass("active");
	});
});
