<?php
	require "include/company.php";
	require "include/head.php";
?>
	.parallax-1 
	{
		background-image: url("img/carwash-img-1.jpg");
		min-height: 500px; 
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.parallax-2 
	{
		background-image: url("img/carwash-img-2.jpg");
		min-height: 500px; 
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.parallax-3 
	{
		background-image: url("img/carwash-img-3.jpg");
		min-height: 600px; 
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.parallax-4 
	{
		background-image: url("img/carwash-img-4.jpg");
		min-height: 600px; 
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	.para
	{
		width : 100%;
		height:auto;
		font-size:14px;
		padding: 27px 49px;
		background-color : white;
	}
	h2
	{
		font-weight : 500;
		font-size : 22px;
	}
	.cc-btn
	{
		color : white;
		font-size : 20px;
		font-weight : 600;
	}
	.cc-btn:hover
	{
		color : white;
		background-color : #f89705;
	}
<?php
	require "include/top.php";
	require "include/nav-bar.php";
?>
	<div class="parallax-1"></div>
	<div class="para">
		<h1 class="mb-5">
			<span class="text-primary text-uppercase">
				CAR WASH
			</span>
			 : FULL SERVICE
		</h1>
		Affordable car wash is the criteria for many when they search for a car wash workshop. Oxocare comes up with mind-boggling offers and deals to make your car wash as cost-effective as possible and you can easily find offers of up to 40% at your nearest service centre. With hundreds of car workshops in the same destination, you can go for your most suitable one for your super-luxury sedan or a beautiful hatchback, or can book for the nearest one to you and providing you with the best deal and quality is our guarantee. Options to choose form are as follows :
		<br>
		<br>
	</div>
	<div class="parallax-2"></div>
	<div class="para">
		<h1 class="mb-5">
			<span class="text-primary text-uppercase">
				1) Silver Package 
			</span>
		</h1>
		Our Silver full-service Package will provide your automobile with an amazing car wash experience. We’ll not only take care of your exterior. We’ll also clean your automobile’s interior. Here are some of the perks you’ll receive with this package :
		<br><br>
		->Pre-soaking penetrating spray: We’ll use gentle pre-treaters to loosen any grime.
		<br>
		->Pre-soaking penetrating spray: We’ll use gentle pre-treaters to loosen any grime.
		<br>
		->Spa foam cleaner: Our effective cleanser removes dirt without harming your car’s exterior.
		<br>
		->Spa soft cloth tunnel wash: After our pre-treatments, we’ll place your car into the tunnel to ensure your car is immaculate.
		<br>
		->Spot-free rinse services: This high-power rinse will get rid of soap, dust, and dirt, so your vehicle dries without any leftover residue.
		<br>
		->In-tunnel wheel cleaner: Your car’s axles will sparkle and shine after this process.
		<br>
		->Foam polish wax: This initial high-quality car polish service will protect from the elements.
		<br>
		->Clearcoat wax: This second layer will add extra gloss and shine.
		<br>
		->Interior vacuum services: We’ll make sure your carpets are free from soil and other debris you might track in.
		<br>
		->Dash, console, and door jambs wiped or dusted: Our car experts will hand clean the interior.
		<br>
		->Tire shine services: We’ll remove all remaining debris from your wheels.
		<br>
		->Air freshener: Your car will smell nice and clean with our custom scents.
	</div>
	<div class="parallax-3"></div>
	<div class="para">
		<h1 class="mb-5">
			<span class="text-primary text-uppercase">
				2) Platinum Package 
			</span>
		</h1>
		This package is perfect for autos that need an extra special touch. 
		<br>The Platinum Package includes all the services in the Silver Full Service Package in addition with :
		<br><br>
		->Pre-soaking penetrating spray: We’ll use gentle pre-treaters to loosen any grime.
		<br>
		->Pre-soaking penetrating spray: We’ll use gentle pre-treaters to loosen any grime.
		<br>
		->Spa foam cleaner: Our effective cleanser removes dirt without harming your car’s exterior.
		<br>
		->Spa soft cloth tunnel wash: After our pre-treatments, we’ll place your car into the tunnel to ensure your car is immaculate.
		<br>
		->Spot-free rinse services: This high-power rinse will get rid of soap, dust, and dirt, so your vehicle dries without any leftover residue.
		<br>
		->In-tunnel wheel cleaner: Your car’s axles will sparkle and shine after this process.
		<br>
		->Foam polish wax: This initial high-quality car polish service will protect from the elements.
		<br>
		->Clearcoat wax: This second layer will add extra gloss and shine.
		<br>
		->Interior vacuum services: We’ll make sure your carpets are free from soil and other debris you might track in.
		<br>
		->Dash, console, and door jambs wiped or dusted: Our car experts will hand clean the interior.
		<br>
		->Tire shine services: We’ll remove all remaining debris from your wheels.
		<br>
		->Air freshener: Your car will smell nice and clean with our custom scents.
		<br>
		-><b>Spa Carnauba Wax<b> : This wax forms a durable, protective barrier that leaves a beautiful shine and lasting protection.
	</div>
	<div class="parallax-4">
		<form action="test-booking.php#booking" method="post">
			<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 86px 0px;">
				<div class="row justify-content-center">
					<div class="col-lg-10 p-1">
						<div class="text-center p-1">
							<div class="rounded text-center p-5" >
								<h4 class="mb-4" style="color:white;font-size:40px;">Book Your <span class="text-primary text-uppercase">Appointment</span></h4>
								<button type="submit" class="btn btn-sm rounded py-2 px-4 cc-btn" >Book Now</button>
							</div>
						</div>
					</div>
				</div>
			</div>
        </form>
	</div>
<?php
	require "include/footer-2.php"
?>