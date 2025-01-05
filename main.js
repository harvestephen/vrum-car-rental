	// Log in Modal Script
    var loginModal = document.getElementById("loginModal");
    var loginModalBtn = document.getElementById("loginModalBtn");

    loginModalBtn.onclick = function() {
        loginModal.style.display = "flex";
    }



    // Sign up Modal script
    var signupModal = document.getElementById("signupModal");
    var signupModalBtn = document.getElementById("signupModalBtn");

    signupModalBtn.onclick = function() {
        signupModal.style.display = "flex";
    }

    window.onclick = function(event) {
    if (event.target == signupModal) {
        signupModal.style.display = "none";
    }
    if (event.target == loginModal) {
        loginModal.style.display = "none";
    }
    }
    window.addEventListener("scroll", function() {
    	  const navBar = document.querySelector(".navBar");
    	  if (window.scrollY > 30) {
    	    navBar.classList.add("scrolled");
    	  } else {
    	    navBar.classList.remove("scrolled");
    	  }
    	});
    
    window.addEventListener('scroll', function() {
    	  const buttons = document.querySelectorAll('.navSelection'); // Select all buttons with the class "mybtn"
    	  
    	  buttons.forEach(button => {
    	    if (window.scrollY > 30) { // When scrolled more than 100px
    	      button.classList.add('scrolled');
    	    } else {
    	      button.classList.remove('scrolled');
    	    }
    	  });
    	});