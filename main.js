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

	$(".slider-rightBtn").on('click', function() {
		const cardWidth = $(".card").css('width');
		const element = $('.slider').get(0);
		console.log(element);
		$(".slider").animate({scrollLeft: "+=" + String(parseInt(cardWidth) + 50)}, 400); 
		setInterval(() => {
			if (element.scrollLeft >= element.scrollWidth - element.clientWidth){
				$(".slider-rightBtn").fadeOut(200);
			} else {
				$(".slider-rightBtn").fadeIn(200);
			}
		}, 300);
	});

	$(".slider-leftBtn").on('click', function() {
		const cardWidth = $(".card").css('width');
		$(".slider").animate({scrollLeft: "-=" + String(parseInt(cardWidth) + 50)}, 400); 
		console.log($(".slider").scrollLeft());
		setInterval(() => {
			if ($(".slider").scrollLeft() === 0){
				$(".slider-leftBtn").fadeOut(200);
			} else {
				$(".slider-leftBtn").fadeIn(200);
			}
		}, 300);
	});
	
});

$(document).ready(function () {
    // Show the Terms Modal when "Sign Up" is clicked
    $("#openTermsModalBtn").on("click", function (e) {
        e.preventDefault(); // Prevent any default behavior like form submission
        $("#registerModal").fadeOut(100); // Hide Register modal
        $("#termsModal").fadeIn(100); // Show Terms modal
    });

    // Close the Terms Modal when "Cancel" is clicked
    $(".cancelBtn").on("click", function () {
        $("#termsModal").fadeOut(100);
    });

    // Close the Terms Modal when clicking outside the modal box
    $(document).on("click", function (e) {
        // Check if the click is outside the modal box
        if ($(e.target).is("#termsModal")) {
            $("#termsModal").fadeOut(100);
        }
    });
});
