<!-- navigation -->
<header class="hd-cont">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<ul>
						<li><i class="fa fa-phone"></i> <a href="tel:+919876543210">+91 98765 43210</a></li>
						<li><i class="fa fa-envelope"></i> <a href="mailto:info@test.com">info@test.com</a></li>
					</ul>
				</div>
				<div class="col-md-6 text-right">
					<ul>
						<li><a href="#!"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#!"><i class="fa fa-whatsapp"></i></a></li>
						<li><a href="#!"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#!"><i class="fa fa-twitter"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>
<!-- Navigation bar -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top">
	<div class="container">
			<a href="index.php" class="navbar-brand"><img src="images/logo.png" title="" alt="" class="img-fluid"></a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
				<span class="navbar-toggler-icon"></span>
			</button>
	
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav ml-auto">
					<li class=""><a href="index.php" class="nav-item nav-link">Home</a></li>
					<li class=""><a href="about-us.php" class="nav-item nav-link">About Us</a></li>
					<!-- drop down -->
					<!-- system -->
					<li class="dropdown d-none d-lg-block">
						<a href="#" class="nav-item nav-link ">Services</a>
						<ul class="dropdown-content">

						<?php
                        $servicedetailshow1="SELECT * FROM servicedetail ORDER BY serviceid";
                        $serviceresult1 = $DBcon->query($servicedetailshow1);
                        while($servicerow1 = $serviceresult1->fetch_assoc()) { ?>
							<li><a href="services.php?pgid=<?php echo $servicerow1['servicepageid'] ?>"><?php echo $servicerow1['servicetitle'] ?></a></li>	
							<?php
							}
							?>
						</ul>
					</li>
					<!-- system -->
					<!-- mobile -->
					<li class="mobile-menu">
						<a href="#" class="nav-item nav-link">Services</a> <a data-toggle="collapse" data-target="#myDropdown"><i class="fa fa-plus"></i></a>
						<ul class=" collapse navbar-collapse" id="myDropdown">
						<?php
                        $servicedetailshow2="SELECT * FROM servicedetail ORDER BY serviceid";
                        $serviceresult2 = $DBcon->query($servicedetailshow2);
                        while($servicerow2 = $serviceresult2->fetch_assoc()) { ?>
							<li><a href="services.php?pgid=<?php echo $servicerow2['servicepageid'] ?>"><?php echo $servicerow2['servicetitle'] ?></a></li>	
							<?php
							}
							?>
						</ul>
					</li>
					<!-- mobile -->
					<!-- drop down -->
					<!-- drop down -->
					<!-- system -->
					<li class="dropdown d-none d-lg-block">
						<a href="#" class="nav-item nav-link ">Gallery</a>
						<ul class="dropdown-content">
                        	<li><a href="gallery-photos.php">Photos</a></li>
							<li><a href="gallery-video.php">Videos</a></li>
						</ul>
					</li>
					<!-- system -->
					<!-- mobile -->
					<li class="mobile-menu">
						<a href="#" class="nav-item nav-link">Gallery</a> <a data-toggle="collapse" data-target="#myDropdown1"><i class="fa fa-plus"></i></a>
						<ul class=" collapse navbar-collapse" id="myDropdown1">
                        	<li><a href="gallery-photos.php">Photos</a></li>
							<li><a href="gallery-video.php">Videos</a></li>
						</ul>
					</li>
					<!-- mobile -->
					<!-- drop down -->
					<li class=""><a href="blog.php" class="nav-item nav-link">Blog</a></li>
					<li class=""><a href="contact-us.php" class="nav-item nav-link">Contact Us</a></li>
				</ul>
			</div>
	</div>
</nav>
<!-- Navigation -->