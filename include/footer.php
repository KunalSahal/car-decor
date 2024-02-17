       <form action="newsletter-process.php" method="post">
			<div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
				<div class="row justify-content-center">
					<div class="col-lg-10 border rounded p-1">
						<div class="border rounded text-center p-1">
							<div class="bg-white rounded text-center p-5">
								<h4 class="mb-4">Subscribe Our <span class="text-primary text-uppercase">Newsletter</span></h4>
								<div class="position-relative mx-auto" style="max-width: 400px;">
									<input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
									<button type="submit" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Submit</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </form>
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html">
								<h1 class="text-white text-uppercase mb-3">
									<?php echo $companyName?>
								</h1>
							</a>
                            <p class="mb-0" style="color:#0F172B;font-weight:600;">
								Best in class car detailing shop. One stop destination for all your car needs. Here we repair what you care.
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2">
							<i class="fa fa-map-marker-alt me-3"></i>
							<?php echo $companyAddress?>
						</p>
                        <p class="mb-2">
							<i class="fa fa-phone-alt me-3"></i>
							<?php echo $companyNumber?>	
						</p>
                        <p class="mb-2">
							<i class="fa fa-envelope me-3"></i>
							<?php echo $companyEmail?>
						</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="test1.php">Home</a>
								<a class="btn btn-link" href="test-booking.php">Booking</a>
                                <a class="btn btn-link" href="test-contact.php">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="test1.php#service">
									Ceramic Coating
								</a>
                                <a class="btn btn-link" href="test1.php#service">
									PPF
								</a>
                                <a class="btn btn-link" href="test1.php#service">Oil Change Service</a>
                                <a class="btn btn-link" href="test1.php#service">Full Car Wash</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="">Potential Softech</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>	
</body>
<?php
	$stmt=null;
	$conn=null;
?>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('.hide1').hide();
		$('.hide2').hide();
		$('.opt0').hover(function(){
			$('.hide1').hide()
			$('.hide2').hide()
		});
		$('.opt1').hover(function(){
			$('.hide1').fadeIn()
			$('.hide2').hide()
		});
		$('.opt2').hover(function(){
			$('.hide1').hide()
			$('.hide2').fadeIn()
		});
		$('.opt3').hover(function(){
			$('.hide1').hide()
			$('.hide2').hide()
		});
		$('.opt4').hover(function(){
			$('.hide1').hide()
			$('.hide2').hide()
		});
		$('.carousel1').hover(function(){
			$('.hide1').hide()
			$('.hide2').hide()
		});
	});
</script>