
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/practice/styles/index.css">
    <title>About Us | Vrum</title>
    <style>
        /* Apply this only to the About Us page using the .about-page class */
        .about-page {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            line-height: 1.6;
            color: #333;
		
        }

        .about-page header {
            position: relative;
            text-align: center;
            color: #fff;
            padding: 100px 20px;
            background: url('/practice/assets/images/AboutUs/AboutCar.jpg') no-repeat center center/cover;
        }

        .about-page header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6); /* Semi-transparent black overlay */
            z-index: 1;
        }

        .about-page header h1, .about-page header p {
            position: relative;
            z-index: 2; /* Ensures text stays above the overlay */
        }

        .about-page header h1 {
			padding-top:40px;
            margin: 0;
            font-size: 3em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .about-page header p {
            font-size: 1.2em;
            margin-top: 1px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
        }

        .about-page .container {
            width: 90%;
            max-width: 1200px;
            margin: 20px auto;
        }

        .about-page .intro {
            text-align: center;
            padding: 40px;
        }

        .about-page .intro p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .about-page .intro hr {
            border: 0;
            border-top: 2px solid #ccc;
            width: 90%; /* Increased width for a longer separator */
            margin: 40px auto;
        }

        .about-page .section {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .about-page .section img {
            width: 300px;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px;
        }

        .about-page .section div {
            flex: 1;
        }

        .about-page .section:nth-child(even) {
            flex-direction: row-reverse;
        }

        .about-page .section:nth-child(even) img {
            margin-right: 0;
            margin-left: 20px;
        }

        .about-page .section h2 {
            margin-bottom: 10px;
            color: #222;
        }

        .about-page .section p {
            margin-bottom: 10px;
        }

        .about-page .section ul {
            padding-left: 20px;
            list-style-type: disc;
        }


    </style>
</head>
<body class="about-page">
<?php include 'navBar.php'; ?>
    <header>
        <h1>About Vrum</h1>
        <p>Your Trusted Car Rental Partner</p>
    </header>

    <!-- Intro Section -->
    <div class="intro">
        <p>Vrum is more than just a car rental service—we are your partner in creating stress-free travel experiences. Founded on a commitment to reliability and excellence, Vrum caters to a diverse range of mobility needs, from daily commutes to road trip adventures. Our extensive fleet includes everything from compact city cars to spacious SUVs, ensuring that you’ll find the perfect vehicle for your journey.</p>
        <hr> <!-- Longer line separator -->
    </div>

    <div class="container">
        <!-- Section 1 -->
        <div class="section">
            <img src="/practice/assets/images/AboutUs/CarsFleet.jpg" alt="Car Fleet">
            <div>
                <h2>Who We Are</h2>
                <p>Vrum is your partner in creating stress-free travel experiences. With a wide range of vehicles, from compact city cars to spacious SUVs, we’re here to meet all your travel needs.</p>
            </div>
        </div>
        <!-- Section 2 -->
        <div class="section">
            <img src="/practice/assets/images/AboutUs/HappyCustomer.jpg" alt="Happy Customers">
            <div>
                <h2>Why Choose Us</h2>
                <ul>
                    <li><strong>Reliable Fleet:</strong> Regularly maintained vehicles for a smooth experience.</li>
                    <li><strong>Affordable Rates:</strong> Transparent pricing without hidden charges.</li>
                    <li><strong>24/7 Support:</strong> Assistance available whenever you need it.</li>
                    <li><strong>Sustainability:</strong> Eco-friendly options with hybrid and fuel-efficient vehicles.</li>
                </ul>
            </div>
        </div>
        <!-- Section 3 -->
        <div class="section">
            <img src="/practice/assets/images/AboutUs/CustomerSupport.jpg" alt="Customer Support">
            <div>
                <h2>Our Mission</h2>
                <p>We aim to empower our customers with freedom of movement by providing exceptional service, high-quality vehicles, and a hassle-free rental experience. Your journey is our priority.</p>
            </div>
        </div>
		
    </div>
	<?php include 'footer.php'; ?>


</body>
</html>
