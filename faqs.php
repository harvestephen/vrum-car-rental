<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f9f9f9;
  margin: 0;
  padding: 20px;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
  font-weight: bold;
}

.accordion {
  background-color: white;
  color: #444;
  cursor: pointer;
  padding: 15px 20px;
  width: 100%;
  border: none;
  text-align: center;
  outline: none;
  font-size: 16px;
  transition: background-color 0.3s, border-bottom 0.3s;
  border-bottom: 1px solid #ddd;
}

.accordion:last-child {
  border-bottom: none;
  text-align:center;
}

.accordion:hover {
  background-color: #f0f0f0;
}

.panel {
  padding: 10px 20px;
  display: none;
  background-color: #fff;
  border-bottom: 1px solid #ddd;
}

.panel p {
  margin: 0;
}
</style>
</head>
<body>

<h2>FAQs</h2>

<button class="accordion">What documents do I need to rent a car?</button>
<div class="panel">
  <p>You will need a valid driver’s license, a government-issued ID (e.g., passport), and a credit or debit card in the renter’s name. Additional requirements may apply for international renters.</p>
</div>

<button class="accordion">Is there an age requirement for renting a car?</button>
<div class="panel">
  <p>Yes, the minimum age to rent a car is typically 21 years old. Renters under 25 may be subject to a young driver surcharge.</p>
</div>

<button class="accordion">Can I return the car to a different location?</button>
<div class="panel">
  <p>Yes, we offer one-way rentals between select locations. Additional fees may apply. Contact us in advance to arrange a different drop-off point.</p>
</div>

<button class="accordion">What happens if I return the car late?</button>
<div class="panel">
  <p>Late returns may incur additional charges. We recommend contacting us if you expect any delays to avoid penalties.</p>
</div>

<button class="accordion">Do you offer insurance coverage for rentals?</button>
<div class="panel">
  <p>Yes, we provide optional insurance packages to cover damage, theft, and liability. You can select your preferred coverage plan during booking or at pickup.</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>
