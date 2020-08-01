<!-- modal -->
<div class="modal fade" id="enquirymodal" aria-modal="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title"><b>Enquiry Form</b></h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	  		<form class="contact-form" action="contact-form.php" method="POST">
                <input type="text" name="name" placeholder="Name" class="contact-input">
                <input type="text" name="phone" placeholder="Phone Number" class="contact-input">
                <input type="email" name="email" placeholder="Email" class="contact-input">
                <input type="text" name="subject" placeholder="Subject" class="contact-input">
                <textarea rows="5" class="contact-input">Your Messages</textarea>
                <input type="submit" name="submit" value="Send Message" class="contact-button">
              </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!-- modal -->

<!-- footer -->
<footer class="bg-dark pd50">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<h4>Contact Info</h4>
					<div class="foot-cnt">
						<ul>
							<li>
								<i class="fa fa-map-marker"></i>
								Chennai - 600 028
							</li>
							<li>
								<i class="fa fa-phone"></i>
								+91 12345 67890
							</li>
							<li>
								<i class="fa fa-envelope"></i>
								<a href="mailto:info@test.com">info@test.com</a>
							</li>
						</ul>
					</div>	
				</div>
				<div class="col-lg-2 col-md-6 col-12 footer-link">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#!">About Us</a></li>
							<li><a href="#!">Gallery</a></li>
							<li><a href="#!">Blog</a></li>
							<li><a href="#!">Contact Us</a></li>
						</ul>	
							
				</div>		
				<div class="col-lg-2 col-md-6 col-12 footer-link">
						<h4>Service</h4>
						<ul>
						<?php
                        $servicedetailshow2="SELECT * FROM servicedetail ORDER BY serviceid";
                        $serviceresult2 = $DBcon->query($servicedetailshow2);
                        while($servicerow2 = $serviceresult2->fetch_assoc()) { ?>
							<li><a href="services.php?pgid=<?php echo $servicerow2['servicepageid'] ?>"><?php echo $servicerow2['servicetitle'] ?></a></li>	
							<?php
							}
							?>
						</ul>	
							
				</div>	
				<div class="col-lg-4 col-md-6 col-12">
					<h4>Quick Enquiry</h4>
					<form action="enquiry-form.php" method="POST">
						<div class="row">
							<!-- col -->
								<div class="col-lg-6 col-md-6">
									<input type="text" name="name" placeholder="Name">
								</div>
							<!-- col -->
							<!-- col -->
								<div class="col-lg-6 col-md-6">
									<input type="email" name="email" placeholder="Email">
								</div>
							<!-- col -->
							<!-- col -->
								<div class="col-lg-12 col-md-12">
									<textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
								</div>
							<!-- col -->
							<!-- col -->
								<div class="col-lg-12 col-md-12">
									<button class="btn-style" type="submit">Submit</button>
								</div>
							<!-- col -->
						</div>
					</form>
				</div>
			</div>
			</div>	
		</div>
	</footer>
<section class="pg-footer">
    <div class="container">
        <div class="row">
            <!-- col -->
            <div class="col-lg-6">
               <div class="social-icon">
                    <ul>
                        <li><a href="#!"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#!"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#!"><i class="fa fa-instagram"></i></a></li>
                    </ul>
               </div>
            </div>
            <!-- col -->
            <!-- col -->
            <div class="col-lg-6 text-right">
            <p>© Gnana Veedu 2020 Allright Reserved</p>
            </div>
            <!-- col -->
        </div>
    </div>
</section>
<!-- footer -->