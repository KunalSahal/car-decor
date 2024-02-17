<?php
	require "include/company.php";
	require "include/head.php";
	require "include/top.php";
	require "include/nav-bar.php";
?>
        <div class="container-fluid page-header mb-5 p-0 carousel1">
            <div class="container-fluid page-header-inner py-5 bg-booking-img">
                <div class="container text-center pb-5" style=" position: relative;">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form action="test-booking-process.php" method="post">
			<div class="container-xxl py-5">
				<div class="container">
					<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
						<h6 class="section-title text-center text-primary text-uppercase">Service Booking</h6>
						<h1 class="mb-5">Book Your <span class="text-primary text-uppercase">Premium Service</span></h1>
					</div>
					<div class="row g-5" id="booking">
						<div class="col-lg-6">
							<div class="row g-3">
								<div class="col-6 text-end">
									<video autoplay muted loop  class="rounded wow zoomIn" data-wow-delay="0.1s" style="margin: 1px 63px;width: 100%; height: 306px;">
										<source src="img/booking-1.mp4" type="video/mp4" >
									</video>
								</div>
								<div class="col-6 text-start">
									<video autoplay muted loop  class="rounded wow zoomIn" data-wow-delay="0.3s" style="margin:27px 0px;width: 100%; height: 229px;">
										<source src="img/booking-2.mp4" type="video/mp4" >
									</video>
								</div>
								<div class="col-6 text-end">
									<video autoplay muted loop  class="rounded wow zoomIn" data-wow-delay="0.5s" style="margin: -5px 89px;width: 100%; height: 212px;">
										<source src="img/booking-3.mp4" type="video/mp4" >
									</video>
								</div>
								<div class="col-6 text-start">
								   <video autoplay muted loop  class="rounded wow zoomIn" data-wow-delay="0.7s" style="margin: -57px 34px;width: 100%; height: 343px;">
										<source src="img/booking-5.mp4" type="video/mp4" >
									</video>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="wow fadeInUp" data-wow-delay="0.2s">
								<form>
									<div class="row g-3">
										<div class="col-md-6">
											<div class="form-floating">
												<input type="text" class="form-control" name="clientName" placeholder="Your Name">
												<label for="name">Your Name</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-floating">
												<input type="number" class="form-control" name="clientNumber">
												<label for="number">Your Contact Number</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-floating date" id="date3" data-target-input="nearest">
												<input type="date" class="form-control datepicker-input" name="date" data-target="#date3" data-toggle="datepicker" />
												<label for="checkin">Date to Visit</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-floating time" id="date4" data-target-input="nearest">
												<input type="time" class="form-control timepicker-input" name="time" data-target="#date4" data-toggle="timepicker" />
												<label for="checkout">Time of Visit</label>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-floating">
												<select class="form-select" name="carCompany">
													<option value="1">Tata</option>
													<option value="2">Kia</option>
													<option value="3">Porsche</option>
												</select>
												<label for="select1">Select Company</label>
											  </div>
										</div>
										<div class="col-md-6">
											<div class="form-floating">
												<select class="form-select" name="carModel">
													<option value="1">Nexon</option>
													<option value="2">Tiago</option>
												</select>
												<label for="select2">Select Model</label>
											  </div>
										</div>
										<div class="col-md-12">
											<div class="form-floating">
												<select class="form-select" name="carService">
													<option value="1">
														Exterior Car Wash
													</option>
													<option value="2">
														Car State Inspection
													</option>
													<option value="3">
														Oil Change Service
													</option>
													<option value="4">
														Full Car Wash Service
													</option>
												</select>
												<label for="select2">Select Service</label>
											  </div>
										</div>
										<div class="col-12">
											<div class="form-floating">
												<textarea class="form-control" name="clientMessage" style="height: 100px"></textarea>
												<label for="message">Special Request</label>
											</div>
										</div>
										<div class="col-12">
											<button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
        </form>
<?php
	require "include/footer.php";
?>