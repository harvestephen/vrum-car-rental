//JQUERY EVENT HANDLERS
$(document).ready(function () {
  const xValues = [50,60,70,80,90,100,110,120,130,140,150];
  const yValues = [7,8,8,9,9,9,10,11,14,14,15];
  new Chart($("#myChart"), {
    type: "line",
    data: {
      labels: xValues,
      datasets: [{
        fill: false,
        lineTension: 0,
        backgroundColor: "rgba(0,0,255,1.0)",
        borderColor: "rgba(0,0,255,0.1)",
        data: yValues
      }]
    },
    options: {
      legend: {display: false},
      scales: {
        yAxes: [{ticks: {min: 6, max:16}}],
      }
    }
  });
  $(".accordion").click(function () {
    $(this).toggleClass("active");
    let panel = $(this).next(".panel");
    panel.slideToggle(100);
  });

  $(".sign-up-alt").on("click", function() {
    if ($("#loginModal").css("display") == "none") {
      $("#loginModal").fadeIn(100);
      $("#registerModal").fadeOut(100);
    } else {
      $("#loginModal").fadeOut(100);
    }
  });
  $(".register-up-alt").on("click", function() {
    if ($("#registerModal").css("display") == "none") {
      $("#registerModal").fadeIn(100);
      $("#loginModal").fadeOut(100);
    } else {
      $("#registerModal").fadeOut(100);
    }
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

  // Show the User Menu Modal when "username" is clicked
  $('#usernameTrigger').on('click', function (e) {
    e.preventDefault(); // Prevent any default behavior
    $('#userMenuModal').toggle(); // Toggle the modal visibility
  });

  // Optional: Close modal if clicked outside
  $(document).on('click', function (e) {
    if (!$(e.target).closest('#userMenuModal, #usernameTrigger').length) {
      $('#userMenuModal').hide(); // Hide modal if clicked outside
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

$(window).on("scroll", function () {
  // Close the modals on scroll
  $("#registerModal").fadeOut(100);
  $("#loginModal").fadeOut(100);
  $("#termsModal").fadeOut(100);
  $("#userMenuModal").fadeOut(100);
});

  $(".carToRent").on("click", function () {
    $("#carSelectionTab").removeClass("active");
    $("#carSelection").css("display", "none");
    $("#carInfoTab").addClass("active");
    $("#carInfo").css("display", "block");
  });

  $("#submitCarInfo").on("click", function () {
    const fromDateValue = document.getElementById("fromDate").value.trim();
    const toDateValue = document.getElementById("toDate").value.trim();
    const gov_IDValue = document.getElementById("gov_ID").value.trim();

    if (fromDateValue !== "" && toDateValue !== "" && gov_IDValue !== "") {
      $("#carInfoTab").removeClass("active"); 
      $("#carInfo").css("display", "none");
      $("#carCheckoutTab").addClass("active");
      $("#carCheckout").css("display", "block");
      $("#car-rental-info-fillOut").css("display", "none");
      $("#car-rental-info-fillOutSpacer").css("display", "block");
      $("#error-message").css("display", "none"); 
    } else {
      $("#car-rental-info-fillOut").css("display", "block");
      $("#car-rental-info-fillOutSpacer").css("display", "none");
      $("#error-message").css("display", "none"); 
    }
  });

  $("#returnCarSelection").on("click", function () {
    $("#carInfoTab").removeClass("active");
    $("#carInfo").css("display", "none");
    $("#carSelectionTab").addClass("active");
    $("#carSelection").css("display", "flex");
  });

  $("#confirmCheckout").on("click", function () {
    const CHNameValue = document.getElementById("cardHolderName").value.trim();
    const cardNumberValue = document.getElementById("cardNumber").value.trim();
    const expiryDateValue = document.getElementById("expiryDate").value.trim();
    const codeValue = document.getElementById("cvv_cvc").value.trim();
    const billAddressValue = document.getElementById("billAddress").value.trim();

    if (CHNameValue !== "" && cardNumberValue !== "" && expiryDateValue !== "" && codeValue !== "" && billAddressValue !== "") {

      $("#carCheckoutTab").removeClass("active");
      $("#carCheckout").css("display", "none");
      $("#carApprovalTab").addClass("active");
      $("#carApproval").css("display", "flex");
    } else {
      $("#car-rental-info-fillOut").css("display", "block");
      $("#car-rental-info-fillOutSpacer").css("display", "none");
    }

    
  });

  $("#returnCarInfo").on("click", function () {
    $("#carCheckoutTab").removeClass("active");
    $("#carCheckout").css("display", "none");
    $("#carInfoTab").addClass("active");
    $("#carInfo").css("display", "block");
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
      }).catch((error) => {
        console.error('Error:', error);
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
            var form = $("<form></form>");
            form.attr("method", "POST");
            form.attr("action", "./backend/database/queries/accounts/signup.php");
            $("<input>")
              .attr({
                type: "hidden",
                name: "role",
                value: user.role,
              })
              .appendTo(form);
            $("<input>")
              .attr({
                type: "hidden",
                name: "username",
                value: username,
              })
              .appendTo(form);
              
            $("body").append(form);
            form.submit();
            /** 
            fetch("./backend/database/queries/database/user.php", {
              headers: {
                "Content-Type": "application/json; charset=UTF-8",
              },
              method: "POST",
              body: JSON.stringify({
                'username': username,
              }),
            })
              .then((res) => {
                return res.text(); //buy time
              })
              .then((data) => {
                console.log(data);
                window.location.href = "./";
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
const reqAppointmentForm = async () => {
  event.preventDefault();
  const formData = $("#reqAppointmentForm").serializeArray();
  const fromDate = formData[0].value;
  const toDate = formData[1].value;
  const cardHolderName = formData[2].value;
  const cardNumber = formData[3].value;
  const expiryDate = formData[4].value;
  const cvv_cvc = formData[5].value;
  const billAddress = formData[6].value;
  const gov_ID = document.getElementById("gov_ID").files[0];

  const sendData = async () => {
    const myHeaders = new Headers();
    myHeaders.append("Content-Type", "application/json; charset=UTF-8");

    const request = new Request(
      "./backend/database/queries/transactions/appointments/requestAppointment.php",
      {
        headers: myHeaders,
        method: "POST",
        body: JSON.stringify({
          fromDate: fromDate,
          toDate: toDate,
          gov_ID: gov_ID,
          cardHolderName: cardHolderName,
          cardNumber: cardNumber,
          expiryDate: expiryDate,
          cvv_cvc: cvv_cvc,
          billAddress: billAddress,
        }),
      }
    )
    fetch(request)
      .then((res) => {
        return res.text(); //buy time
      })
      .then((data) => {
        console.log(data);
      }).catch((error) => {
        console.error('Error:', error);
      });
  };
  sendData();
};

function filterCars(carType) {
  const buttons = document.querySelectorAll(".car-selection-filter-btn");
  const cards = document.querySelectorAll(".car-selection-card");

  // Remove active class from all filter buttons
  buttons.forEach((button) => button.classList.remove("active"));

  // Add active class to the clicked button
  event.target.classList.add("active");

  // Show or hide the kar cards based on the selected filter
  cards.forEach((card) => {
    if (carType === "all") {
      card.style.display = "block"; // Show all kars
    } else if (card.classList.contains(carType)) {
      card.style.display = "block"; // Show the matching kar type
    } else {
      card.style.display = "none"; // Hide non-matching kar types
    }
  });
}

const fromDate = document.getElementById("fromDate");
const toDate = document.getElementById("toDate");
const submitButton = document.getElementById("submit-button");
const errorMessage = document.getElementById("error-message");

// Set today's date as the minimum date
const today = new Date();
const todayString = today.toISOString().split("T")[0];
fromDate.setAttribute("min", todayString);
toDate.setAttribute("min", todayString);

function validateDates() {
  const from = new Date(fromDate.value);
  const to = new Date(toDate.value);
  const toChangeSpacer = document.getElementById("car-rental-info-fillOutSpacer");
  const toChangeError = document.getElementById("car-rental-info-fillOut");

  if (fromDate.value && toDate.value) {
    if (to >= from) {
      errorMessage.style.display = "none";
      toChangeSpacer.style.display = "block";
      submitButton.disabled = false;  
    } else {
      errorMessage.style.display = "block";
      toChangeSpacer.style.display = "none";
      toChangeError.style.display = "none";
      submitButton.disabled = true;
    }
  } else {
    submitButton.disabled = true;
  };
};

fromDate.addEventListener("input", validateDates);
toDate.addEventListener("input", validateDates);

submitButton.addEventListener("click", function () {
  alert(`Rental period: From ${fromDate.value} to ${toDate.value}`);
});

function filterBookingCars(status) {
  const buttons = document.querySelectorAll('.booking-car-filter-btn');
  const cards = document.querySelectorAll('.booking-car-card');
  const filterHeader = document.getElementById('filterHeader');

  buttons.forEach(button => button.classList.remove('active'));
  const clickedButton = event.currentTarget;
  clickedButton.classList.add('active');

  // Update the filter header text
  switch (status) {
    case 'all':
      filterHeader.textContent = 'All Cars';
      break;
    case 'pending':
      filterHeader.textContent = 'Pending Cars';
      break;
    case 'approved':
      filterHeader.textContent = 'Approved Cars';
      break;
    case 'review':
      filterHeader.textContent = 'Review Cars';
      break;
    default:
      filterHeader.textContent = 'Cars';
  }

  cards.forEach(card => {
    card.style.display = status === 'all' || card.classList.contains(status) ? 'block' : 'none';
  });
}

/**
 *
 * wag na gumawa bagong $(document).ready(function () {} kasi may isa na sa taas.
 *
 */



