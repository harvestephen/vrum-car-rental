//JQUERY EVENT HANDLERS
$(document).ready(function () {
  $(".accordion").click(function () {
    $(this).toggleClass("active");
    let panel = $(this).next(".panel");
    panel.slideToggle(100);
  });

  $("#registerModalBtn").on("click", function () {
    if ($("#registerModal").css("display") == "none") {
      $("#registerModal").fadeIn(100);
      $("#loginModal").fadeOut(100);
    } else {
      $("#registerModal").fadeOut(100);
    }
  });

  $("#loginModalBtn").on("click", function () {
    if ($("#loginModal").css("display") == "none") {
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
  });

  $(".slider-rightBtn").on("click", function () {
    const cardWidth = $(".card").css("width");
    const element = $(".slider").get(0);
    console.log(element);
    $(".slider").animate(
      { scrollLeft: "+=" + String(parseInt(cardWidth) + 50) },
      400
    );
    setInterval(() => {
      if (element.scrollLeft >= element.scrollWidth - element.clientWidth) {
        $(".slider-rightBtn").fadeOut(200);
      } else {
        $(".slider-rightBtn").fadeIn(200);
      }
    }, 300);
  });

  $(".slider-leftBtn").on("click", function () {
    const cardWidth = $(".card").css("width");
    $(".slider").animate(
      { scrollLeft: "-=" + String(parseInt(cardWidth) + 50) },
      400
    );
    console.log($(".slider").scrollLeft());
    setInterval(() => {
      if ($(".slider").scrollLeft() === 0) {
        $(".slider-leftBtn").fadeOut(200);
      } else {
        $(".slider-leftBtn").fadeIn(200);
      }
    }, 300);
  });

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

/**
 * FORM VALIDATIONS
 */

const validateRegisterForm = async () => {
  event.preventDefault();
  //get form data
  const formData = $("#registerForm").serializeArray();
  const username = formData[0].value;
  const email = formData[1].value;
  const phoneNumber = formData[2].value;
  const password = formData[3].value;
  const confirmPassword = formData[4].value;
  let hasName;
  let hasEmail;

  const changeHasName = (bool) => {
    hasName = bool;
  };
  const changeHasEmail = (bool) => {
    hasEmail = bool;
  };
  const sendData = async () => {
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json; charset=UTF-8");

    const request = new Request(
      "./backend/database/queries/accounts/register.php",
      {
        headers: myHeaders,
        method: "POST",
        body: JSON.stringify({
          username: username,
          email: email,
          phone: phoneNumber,
          password: password,
        }),
      }
    );

    fetch(request)
      .then((res) => {
        return res.text(); //buy time
      })
      .then((data) => {
        console.log(data);
        window.location.href = "./index.php";
      });
  };

  //validate password and confirm password
  if (password !== confirmPassword) {
    console.log();
    $("#confirmPass").css("display", "block");
  }

  //Get all username from database
  const fetchData = async () => {
    const data = await fetch(
      "./backend/database/queries/database/getUserInfo.php"
    );
    return data;
  };

  fetchData()
    .then((result) => {
      if (result.status == 200) {
        return result.text(); // Return the text response for further processing
      } else {
        console.log("Error fetching data");
        return Promise.reject("Error fetching data");
      }
    })
    .then((userArray) => {
      // Parse the JSON string and return the resulting object/array
      return JSON.parse(userArray);
    })
    .then((data) => {
      const usernames = [];
      const emails = [];
      for (let user of data) {
        usernames.push(user.username);
        emails.push(user.email);
      }
      const hasName = usernames.some(
        (databaseUsername) => databaseUsername === username
      );
      const hasEmail = emails.some((databaseEmail) => databaseEmail === email);
      changeHasName(hasName);
      changeHasEmail(hasEmail);

      if (password !== confirmPassword) {
        $("#confirmPass").css("display", "block");
      } else {
        $("#confirmPass").css("display", "none");
      }
      if (hasName) {
        $("#usernameRegister").css("display", "block");
      } else {
        $("#usernameRegister").css("display", "none");
      }
      if (hasEmail) {
        $("#emailRegister").css("display", "block");
      } else {
        $("#emailRegister").css("display", "none");
      }
      if (password === confirmPassword && !hasName && !hasEmail) {
        sendData();
      }
    })
    .catch((error) => {
      console.error(error); // Handles any errors during the fetch or processing
    });

  //check if username have a match
  //get username in database

  //check if email have a match

  //if no match, send data to php controller.
};

const validateLoginForm = async () => {
  event.preventDefault();
  const formData = $("#loginForm").serializeArray();
  const username = formData[0].value;
  const password = formData[1].value;

  //get username
  const fetchData = async () => {
    const data = await fetch(
      "./backend/database/queries/database/getUserInfo.php"
    );
    return data;
  };

  fetchData()
    .then((result) => {
      return result.text(); // Return the text response for further processing
    })
    .then((data) => {
      const array = JSON.parse(data);
      const hasName = array.some(
        (databaseUsername) => databaseUsername.username === username
      );
      if (hasName) {
        $("#loginusername").css("display", "none");
        for (user of array) {
          if (user.username === username && user.password === password) {
            window.location.href = "./?username=" + username;
            /**
             * 
             
            fetch("./index.php", {
              headers: {
                "Content-Type": "application/json; charset=UTF-8",
              },
              method: "GET",
              body: JSON.stringify({
                'username': username,
              }),
            })
              .then((res) => {
                return res.text(); //buy time
              })
              .then((data) => {
                console.log(data);
                window.location.href = "./index.php";
              });
              */
            $("#loginpassword").css("display", "none");
            break;
          } else {
            $("#loginpassword").css("display", "block");
          }
        }
      } else {
        $("#loginusername").css("display", "block");
      }
    });
};

/**
 *
 * wag na gumawa bagong $(document).ready(function () {} kasi may isa na sa taas.
 *
 */
