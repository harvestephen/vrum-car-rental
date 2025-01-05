<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" type="text/css" href="/practice/styles/main.css">
	<link rel="stylesheet" type="text/css" href="/practice/styles/content.css">
  <title>Contact Us</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body.contact-page {
      font-family: Arial, sans-serif;
      line-height: 1.6;

    }

    /* Contact Header */
        .contact-page header {
            position: relative;
            text-align: center;
            color: #fff;
            padding: 100px 20px;
            background: url('Contact.jpg') no-repeat center center/cover;
        }

        .contact-page header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent overlay */
            z-index: 1;
        }

        .contact-page header h1 {
				padding-top:40px;
            position: relative;
            z-index: 2;
            margin: 0;
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .contact-page header p {
            position: relative;
            z-index: 2;
            margin-top: 1px;
			margin-bottom:18px;
            font-size: 1.2em;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

		    .contact-page .intro {
			text-align:center;
            padding-top: 70px;
            margin-bottom: 30px;
        }
    /* Line Separator */
    .separator-unique {
      width: 90%;
      margin: 1.5rem auto;
      border: 0;
      border-top: 1px solid #ccc;
    }

    /* Contact Section */
    .contact-container-unique {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 2rem;
    }

    .contact-info-unique, .map-unique {
      flex: 1;
      max-width: 400px;
      margin: 1rem;
      padding: 1rem;
      border: 1px solid #ddd;
      border-radius: 8px;
      background-color: #fff;
    }

    .contact-info-unique h2 {
      margin-bottom: 1rem;
      color: #333;
    }

    .contact-info-unique p {
      margin-bottom: 0.5rem;
    }

    .contact-info-unique a {
      color: #007BFF;
      text-decoration: none;
    }

    .contact-info-unique a:hover {
      text-decoration: underline;
    }

    iframe {
      width: 100%;
      height: 300px;
      border: none;
      border-radius: 8px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .contact-container-unique {
        flex-direction: column;
        align-items: center;
      }
    }
  </style>
</head>
<body class="contact-page">
<?php include '../../navBar.php'; ?>
  <header>
    <h1>Contact Us</h1>
    <p>Protecting your data and ensuring transparency in our practices</p>
  </header>

  <div class="intro">
    <p>We’re here to assist you! Whether you have questions about our car rental services, need help with an existing booking, or want to provide feedback, we’re happy to hear from you.</p>
    <p>Please use the contact details below to reach our customer service team, and we’ll respond as quickly as possible to address your needs.</p>
  </div>

  <!-- Line Separator -->
  <hr class="separator-unique">

  <main>
    <div class="contact-container-unique">
      <!-- Contact Information -->
      <div class="contact-info-unique">
        <h2>Anis Transport</h2>
        <p>📍 Villarico Street, Mandaluyong, Metro Manila, Philippines</p>
        <p>📱 <strong>Mobile:</strong> 0917-626-4022</p>
        <p>📞 <strong>Landline:</strong> 02-8353-9854</p>
        <p>📧 <strong>Email:</strong> booking@anistransport.com</p>
      </div>

      <!-- Map -->
      <div class="map-unique">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1930.2167349323966!2d120.9931246826316!3d14.594416721364204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9dd55233999%3A0x1b757388e4aa5291!2sPasig%20Ferry%20Lawton%20-%20PUP%20Sta.Mesa%20Pasig%20River%20Ferry%20Station%2C%20Manila%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1700563200000!5m2!1sen!2sph" 
          allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </main>
  	<?php include '../../footer.php'; ?>
<script src="../../main.js"></script>
</body>
</html>
