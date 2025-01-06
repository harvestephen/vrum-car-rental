<?php $rootDirectory = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/'); // Get root directory ?>
<div class="wrapper">
	<div class="MainContent">
		<div class="homepage">
			<div class="homepageTitle MainContent">
				<h1>RENT TODAY, MAKE MEMORIES TOMORROW</h1>
				<a class="rent">RENT NOW!</a>
			</div>
			<div class="new-header">
			</div>
		</div>
		<br /><br /><br />
		<div class="featured-vehicles">
			<div class="car-slider-wrapper">
				<div class="featured-header">
					<h2>Featured Vehicles</h2>
				</div>
				<div class="slider">
					<button class="slider-leftBtn">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
							<path
								d="M20 15h-8v3.586a1 1 0 0 1 -1.707 .707l-6.586 -6.586a1 1 0 0 1 0 -1.414l6.586 -6.586a1 1 0 0 1 1.707 .707v3.586h8a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1z">
							</path>
						</svg>
					</button>
					<button class="slider-rightBtn">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
							stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
							<path
								d="M4 9h8v-3.586a1 1 0 0 1 1.707 -.707l6.586 6.586a1 1 0 0 1 0 1.414l-6.586 6.586a1 1 0 0 1 -1.707 -.707v-3.586h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1z">
							</path>
						</svg>
					</button>
					<div class="card">
						<img class="img-card" src="<?php echo $rootDirectory . "/assets/images/cars/suv/honda/crv.png" ?>"
							alt="car image" />
						<div class="card-text">
							<h2>Car Name</h2>
							<div class="car-card-icons">
								<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="info"></g>
									<g id="icons">
										<g id="user">
											<ellipse cx="12" cy="8" rx="5" ry="6" />
											<path
												d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
										</g>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="M0 0H24V24H0z" fill="none" />
										<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
									</g>
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 8l0 8" />
									<path d="M12 8l0 8" />
									<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
								</svg>

								<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
									<path clip-rule="evenodd"
										d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
										fill="#fff" fill-rule="evenodd" />
								</svg>

							</div>
							<div class="card-subtext">
								<p class="price"><span>₱</span> 1,120/Day</p>
								<a href="#" class="more-btn">RENT</a>
							</div>
						</div>

					</div>
					<div class="card">
						<img class="img-card" src="<?php echo $rootDirectory . "/assets/images/cars/suv/honda/crv.png" ?>"
							alt="car image" />
						<div class="card-text">
							<h2>Car Name</h2>
							<div class="car-card-icons">
								<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="info"></g>
									<g id="icons">
										<g id="user">
											<ellipse cx="12" cy="8" rx="5" ry="6" />
											<path
												d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
										</g>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="M0 0H24V24H0z" fill="none" />
										<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
									</g>
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 8l0 8" />
									<path d="M12 8l0 8" />
									<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
								</svg>

								<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
									<path clip-rule="evenodd"
										d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
										fill="#fff" fill-rule="evenodd" />
								</svg>

							</div>
							<div class="card-subtext">
								<p class="price"><span>₱</span> 1,120/Day</p>
								<a href="#" class="more-btn">RENT</a>
							</div>
						</div>

					</div>
					<div class="card">
						<img class="img-card" src="<?php echo $rootDirectory . "/assets/images/cars/suv/honda/crv.png" ?>"
							alt="car image" />
						<div class="card-text">
							<h2>Car Name</h2>
							<div class="car-card-icons">
								<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="info"></g>
									<g id="icons">
										<g id="user">
											<ellipse cx="12" cy="8" rx="5" ry="6" />
											<path
												d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
										</g>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="M0 0H24V24H0z" fill="none" />
										<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
									</g>
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 8l0 8" />
									<path d="M12 8l0 8" />
									<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
								</svg>

								<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
									<path clip-rule="evenodd"
										d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
										fill="#fff" fill-rule="evenodd" />
								</svg>

							</div>
							<div class="card-subtext">
								<p class="price"><span>₱</span> 1,120/Day</p>
								<a href="#" class="more-btn">RENT</a>
							</div>
						</div>

					</div>
					<div class="card">
						<img class="img-card" src="<?php echo $rootDirectory . "/assets/images/cars/suv/honda/crv.png" ?>"
							alt="car image" />
						<div class="card-text">
							<h2>Car Name</h2>
							<div class="car-card-icons">
								<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="info"></g>
									<g id="icons">
										<g id="user">
											<ellipse cx="12" cy="8" rx="5" ry="6" />
											<path
												d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
										</g>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="M0 0H24V24H0z" fill="none" />
										<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
									</g>
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 8l0 8" />
									<path d="M12 8l0 8" />
									<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
								</svg>

								<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
									<path clip-rule="evenodd"
										d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
										fill="#fff" fill-rule="evenodd" />
								</svg>

							</div>
							<div class="card-subtext">
								<p class="price"><span>₱</span> 1,120/Day</p>
								<a href="#" class="more-btn">RENT</a>
							</div>
						</div>

					</div>
					<div class="card">
						<img class="img-card" src="<?php echo $rootDirectory . "/assets/images/cars/suv/honda/crv.png" ?>"
							alt="car image" />
						<div class="card-text">
							<h2>Car Name</h2>
							<div class="car-card-icons">
								<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="info"></g>
									<g id="icons">
										<g id="user">
											<ellipse cx="12" cy="8" rx="5" ry="6" />
											<path
												d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
										</g>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="M0 0H24V24H0z" fill="none" />
										<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
									</g>
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 8l0 8" />
									<path d="M12 8l0 8" />
									<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
								</svg>

								<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
									<path clip-rule="evenodd"
										d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
										fill="#fff" fill-rule="evenodd" />
								</svg>

							</div>
							<div class="card-subtext">
								<p class="price"><span>₱</span> 1,120/Day</p>
								<a href="#" class="more-btn">RENT</a>
							</div>
						</div>

					</div>
					<div class="card">
						<img class="img-card" src="<?php echo $rootDirectory . "/assets/images/cars/suv/honda/crv.png" ?>"
							alt="car image" />
						<div class="card-text">
							<h2>Car Name</h2>
							<div class="car-card-icons">
								<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
									xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
									<g id="info"></g>
									<g id="icons">
										<g id="user">
											<ellipse cx="12" cy="8" rx="5" ry="6" />
											<path
												d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
										</g>
									</g>
								</svg>

								<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
									<g>
										<path d="M0 0H24V24H0z" fill="none" />
										<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
									</g>
								</svg>

								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
									stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
									<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
									<path d="M5 8l0 8" />
									<path d="M12 8l0 8" />
									<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
								</svg>

								<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
									<path clip-rule="evenodd"
										d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
										fill="#fff" fill-rule="evenodd" />
								</svg>

							</div>
							<div class="card-subtext">
								<p class="price"><span>₱</span> 1,120/Day</p>
								<a href="#" class="more-btn">RENT</a>
							</div>
						</div>
					</div>
					</button>
				</div>
				<!-- 
			<div class="car-grid">
				<div class="car-card" style="background-image: url('./assets/images/cars/sedan/audi/q3.png');">
					<div class="car-card-content">
						<h3>Audi Q3</h3>
						<div class="car-card-icons">
							<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="info"></g>
								<g id="icons">
									<g id="user">
										<ellipse cx="12" cy="8" rx="5" ry="6" />
										<path
											d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
									</g>
								</g>
							</svg>

							<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g>
									<path d="M0 0H24V24H0z" fill="none" />
									<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
								</g>
							</svg>

							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 8l0 8" />
								<path d="M12 8l0 8" />
								<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
							</svg>

							<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
								<path clip-rule="evenodd"
									d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
									fill="#fff" fill-rule="evenodd" />
							</svg>

						</div>
						<p class="price">₱1,120/Day</p>
					</div>
					<a href="#" class="more-btn">More..</a>
				</div>

				<div class="car-card" style="background-image: url('./assets/images/cars/sedan/audi/q5.jpg');">
					<div class="car-card-content">
						<h3>Audi Q5</h3>
						<div class="car-card-icons">
							<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="info"></g>
								<g id="icons">
									<g id="user">
										<ellipse cx="12" cy="8" rx="5" ry="6" />
										<path
											d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
									</g>
								</g>
							</svg>

							<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g>
									<path d="M0 0H24V24H0z" fill="none" />
									<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
								</g>
							</svg>

							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 8l0 8" />
								<path d="M12 8l0 8" />
								<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
							</svg>

							<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
								<path clip-rule="evenodd"
									d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
									fill="#fff" fill-rule="evenodd" />
							</svg>

						</div>
						<p class="price">₱1,120/Day</p>
					</div>
					<a href="#" class="more-btn">More..</a>
				</div>
				<div class="car-card" style="background-image: url('./assets/images/cars/sedan/audi/q7.jpg');">
					<div class="car-card-content">
						<h3>Audi Q7</h3>
						<div class="car-card-icons">
							<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="info"></g>
								<g id="icons">
									<g id="user">
										<ellipse cx="12" cy="8" rx="5" ry="6" />
										<path
											d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
									</g>
								</g>
							</svg>

							<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g>
									<path d="M0 0H24V24H0z" fill="none" />
									<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
								</g>
							</svg>

							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 8l0 8" />
								<path d="M12 8l0 8" />
								<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
							</svg>

							<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
								<path clip-rule="evenodd"
									d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
									fill="#fff" fill-rule="evenodd" />
							</svg>

						</div>
						<p class="price">₱1,120/Day</p>
					</div>
					<a href="#" class="more-btn">More..</a>
				</div>
				<div class="car-card" style="background-image: url('./assets/images/cars/sedan/audi/q7.jpg');">
					<div class="car-card-content">
						<h3>Audi Q7</h3>
						<div class="car-card-icons">
							<svg style="enable-background:new 0 0 24 24;" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
								xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
								<g id="info"></g>
								<g id="icons">
									<g id="user">
										<ellipse cx="12" cy="8" rx="5" ry="6" />
										<path
											d="M21.8,19.1c-0.9-1.8-2.6-3.3-4.8-4.2c-0.6-0.2-1.3-0.2-1.8,0.1c-1,0.6-2,0.9-3.2,0.9s-2.2-0.3-3.2-0.9 C8.3,14.8,7.6,14.7,7,15c-2.2,0.9-3.9,2.4-4.8,4.2C1.5,20.5,2.6,22,4.1,22h15.8C21.4,22,22.5,20.5,21.8,19.1z" />
									</g>
								</g>
							</svg>

							<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
								<g>
									<path d="M0 0H24V24H0z" fill="none" />
									<path d="M3 21v-2h2V4c0-.552.448-1 1-1h12c.552 0 1 .448 1 1v15h2v2H3zm12-10h-2v2h2v-2z" />
								</g>
							</svg>

							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
								stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
								<path d="M5 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M19 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M12 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
								<path d="M5 8l0 8" />
								<path d="M12 8l0 8" />
								<path d="M19 8v2a3 2 0 0 1 -2 2h-11" />
							</svg>

							<svg fill="none" height="16" viewBox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
								<path clip-rule="evenodd"
									d="M10.7631 1.78588L8.99997 2.80383V5.11323L9.99999 5.69059L12 4.53591L12 2.50001L14 2.50001L14 4.53589L15.7631 5.55385L14.7631 7.2859L13 6.26795L11 7.42265V8.57735L13 9.73205L14.7631 8.7141L15.7631 10.4461L14 11.4641V13.5H12V11.4641L9.99997 10.3094L8.99997 10.8867V13.1961L10.7631 14.2141L9.76311 15.9461L7.99999 14.9282L6.23683 15.9462L5.23683 14.2141L6.99997 13.1962V10.8867L5.99999 10.3094L3.99997 11.4641L3.99997 13.5H1.99997L1.99997 11.4641L0.236816 10.4462L1.23682 8.71411L2.99995 9.73206L4.99997 8.57735V7.42264L2.99999 6.26795L1.23685 7.2859L0.236847 5.55385L1.99997 4.53591L1.99997 2.5H3.99997L3.99997 4.53589L5.99997 5.69059L6.99997 5.11324V2.80385L5.23684 1.7859L6.23684 0.0538512L7.99996 1.07179L9.76311 0.053833L10.7631 1.78588ZM8.99997 8C8.99997 8.55228 8.55225 9 7.99997 9C7.44768 9 6.99997 8.55228 6.99997 8C6.99997 7.44771 7.44768 7 7.99997 7C8.55225 7 8.99997 7.44771 8.99997 8Z"
									fill="#fff" fill-rule="evenodd" />
							</svg>

						</div>
						<p class="price">₱1,120/Day</p>
					</div>
					<a href="#" class="more-btn">More..</a>
				</div>

			</div>
			-->
			</div>

			<div class="what-we-offer">
				<div class="offer-grad"></div>
				<h2 class="what-we-offer-h2">What We Offer?</h2>
				<div class="offer-container">
					<div class="offer-wrap">
						<div class="offer">
							<img src="./assets/icons/wide-vehicle-icon.png" alt="Wide Vehicle Selection">
							<h3>Wide Vehicle Selection</h3>
							<p>We offer an extensive and varied selection of vehicles to meet all your transportation needs. Whether
								you're looking for an economical car for a solo trip or a spacious SUV for a family adventure, we have
								something for everyone. Our fleet includes a wide range of options, from compact economy cars perfect
								for city driving to spacious vans and versatile SUVs that can accommodate larger groups, families, or
								those with extra luggage. Whatever your travel plans may be, you can count on us to provide a vehicle
								that matches your preferences, ensuring a comfortable, reliable, and enjoyable journey.</p>
						</div>
						<div class="offer">
							<img src="./assets/icons/flexible-rental-icon.png" alt="Flexible Rental Plans">
							<h3>Flexible Rental Plans</h3>
							<p>We offer flexible rental plans designed to cater to a wide range of customer needs and preferences.
								Whether you require a vehicle for just a few hours, a full day, an entire week, or even for a long-term
								period, we have the right plan for you. Our hourly rentals provide convenience for short trips or
								specific tasks, while daily and weekly options give you more freedom for extended travels. For those
								with ongoing needs, our long-term rental plans offer great value and flexibility. Whatever your rental
								duration, we ensure a seamless and tailored experience to fit your schedule and requirements.</p>
						</div>
						<div class="offer">
							<img src="./assets/icons/insurance-icon.png" alt="Insurance Options">
							<h3>Insurance Options</h3>
							<p>We provide a variety of comprehensive insurance options, allowing customers to choose the level of
								coverage that best fits their needs and preferences. From basic coverage that offers essential
								protection to more extensive plans that ensure peace of mind on the road, we have something for every
								type of traveler. Whether you're looking for liability coverage, collision protection, or full coverage
								with roadside assistance, our insurance packages are designed to provide you with the right level of
								security and flexibility. You can select the coverage that suits your journey, ensuring you can drive
								with confidence and ease.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="faq-container">
				<h2>FAQs</h2>

				<button class="accordion">What documents do I need to rent a car?</button>
				<div class="panel">
					<p>You will need a valid driver’s license, a government-issued ID (e.g., passport), and a credit or debit
						card
						in the renter’s name. Additional requirements may apply for international renters.</p>
				</div>

				<button class="accordion">Is there an age requirement for renting a car?</button>
				<div class="panel">
					<p>Yes, the minimum age to rent a car is typically 21 years old. Renters under 25 may be subject to a young
						driver surcharge.</p>
				</div>

				<button class="accordion">Can I return the car to a different location?</button>
				<div class="panel">
					<p>Yes, we offer one-way rentals between select locations. Additional fees may apply. Contact us in advance
						to
						arrange a different drop-off point.</p>
				</div>

				<button class="accordion">What happens if I return the car late?</button>
				<div class="panel">
					<p>Late returns may incur additional charges. We recommend contacting us if you expect any delays to avoid
						penalties.</p>
				</div>

				<button class="accordion">Do you offer insurance coverage for rentals?</button>
				<div class="panel">
					<p>Yes, we provide optional insurance packages to cover damage, theft, and liability. You can select your
						preferred coverage plan during booking or at pickup.</p>
				</div>
			</div>
		</div>