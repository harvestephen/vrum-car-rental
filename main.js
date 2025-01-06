$(document).ready(function () {

	$(".accordion").click(function() {
		$(this).toggleClass("active");
		let panel = $(this).next(".panel");
		panel.slideToggle(100);
	});

	$("#registerModalBtn").on("click", function () {
		if ($("#registerModal").css('display') == 'none') {
			$("#registerModal").fadeIn(100);
			$("#loginModal").fadeOut(100);
		} else {
			$("#registerModal").fadeOut(100);
		}
  });

	$("#loginModalBtn").on("click", function () {
		if ($("#loginModal").css('display') == 'none') {
			$("#loginModal").fadeIn(100);
			$("#registerModal").fadeOut(100);
		} else {
			$("#loginModal").fadeOut(100);
		}
  });

	$(document).click((e) => {
		if (e.target.id == "loginModal") {
			$("#loginModal").fadeOut(100);
		}
		if (e.target.id == "registerModal") {
			$("#registerModal").fadeOut(100);
		}
	})

});
