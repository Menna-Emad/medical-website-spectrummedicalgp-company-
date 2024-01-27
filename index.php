

<?php
$title='Home';
include_once "layouts/header.php";
include_once "layouts/nav.php";
include_once "app/models/Company.php";
?>

	
	<!-- Start Banner -->
	<div class="ulockd-home-slider">
		<div class="container-fluid">
			<div class="row">
				<div class="pogoSlider" id="js-main-slider">
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/images/Temporal-Facial.jpg);height: 70%;">
						<div class="lbox-caption pogoSlider-slide-element">
							<!-- <div class="lbox-details">
								<h1>Welcome to Health Lab</h1>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="#" class="btn">Contact Us</a>
							</div> -->
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/images/ePTFE_facial.jpg);height: 70%;">
						<div class="lbox-caption pogoSlider-slide-element">
							<!-- <div class="lbox-details">
								<h1>We are Expert in The Field of Health Lab</h1>
								<p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum</p>
								<a href="#appointment" class="btn">Appointment</a>
							</div> -->
						</div>
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/images/s.jpg);height: 70%;">
						<div class="lbox-caption pogoSlider-slide-element">
							<!-- <div class="lbox-details">
								<h1>Welcome to SpectrumMedicalgp</h1>
								 <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="#" class="btn">Contact Us</a> -->
							<!-- </div>  -->
						</div>
						
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/images/scaleo2.png);height: 70%;">
						<div class="lbox-caption pogoSlider-slide-element">
							<!-- <div class="lbox-details">
								<h1>Welcome to SpectrumMedicalgp</h1>
								 <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="#" class="btn">Contact Us</a> -->
							<!-- </div>  -->
						</div>
						
					</div>
					<div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/images/Cim.jpg);height: 70%;">
						<div class="lbox-caption pogoSlider-slide-element">
							<!-- <div class="lbox-details">
								<h1>Welcome to SpectrumMedicalgp</h1>
								 <p>Fusce convallis ante id purus sagittis malesuada. Sed erat ipsum </p>
								<a href="#" class="btn">Contact Us</a> -->
							<!-- </div>  -->
						</div>
						
					</div>
				</div><!-- .pogoSlider -->
			</div>
		</div>
	</div>
	<!-- End Banner -->
	
	
	
	<!-- Start Services -->
	<div id="services" class="services-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Our Agencies</h2>
						
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
					<div class="owl-carousel owl-theme">
					<?php
						$companyObject=new Company;
                        $companyData=$companyObject->read();
						if($companyData){
							$companyResults=$companyData->fetch_all(MYSQLI_ASSOC);
							foreach($companyResults as $index=>$companyResult){
						?>
						<div class="item">
						
							<div class="serviceBox">
							
								<img src="images/images/<?=$companyResult['image']?>" alt=""></img>
								<!-- <div class="service-icon"><i class="fa fa-h-square" aria-hidden="true"></i></div> -->
								<!-- <h3 class="title"></h3>
								<p class="description">
									
								</p> -->
								<!-- <a href="#" class="new-btn-d br-2">Read More</a> -->
								
							</div>
							
						</div>
						<?php
								}
							}?>
						
						
						
						
					</div>
				</div>
			</div>			
		</div>
	</div>
	<!-- End Services -->
	
	
	<!-- Start Gallery -->


	<div id="gallery" class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Gallery</h2>
						
					</div>
				</div>
			</div>
			
			<div class="popup-gallery row clearfix">
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/images/578-GELZONE-Wrap-–-2×16-innn.jpg" alt="">
						<div class="box-content">	
							<h3 class="title">GELZONE Wrap 2"x16"</h3>
							<ul class="icon">
								<li><a href="images/images/578-GELZONE-Wrap-–-2×16-inn.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/images/GELZONE-Pressure-Pillow22.jpg" alt="">
						<div class="box-content">
							<h3 class="title">GELZONE Pressure Pillow</h3>
							<ul class="icon">
								<li><a href="images/images/GELZONE-Pressure-Pillow2.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/images/ACPI.jpg" alt="">
						<div class="box-content">							
							<ul class="icon">
								<li><a href="images/images/ACPI.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/images/Lollipop-single.jpg" alt="">
						<div class="box-content">	
							<h3 class="title">Cimeosil Gel Sheeting-Vertical Mastopexy 'lollipop'</h3>
							<ul class="icon">
								<li><a href="images/images/Lollipop-single.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/images/TMAA.jpg" alt="">
						<div class="box-content">							
							<h3 class="title">Lateral Mandibular Angle</h3>
							<ul class="icon">
								<li><a href="images/images/TMA.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">					
					<div class="box-gallery">
						<img src="images/images/579-GELZONE-Wrap-–-1×12-inn.jpg" alt="">
						<div class="box-content">
							<h3 class="title">GELZONE Wrap 1"x12"</h3>
							<ul class="icon">
								<li><a href="images/images/579-GELZONE-Wrap-–-1×12-in.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/images/GELZONE-Wrap–4-24-inchh.jpg" alt="">
						<div class="box-content">
							<h3 class="title">GELZONE Wrap 4"x24"</h3>
							<ul class="icon">
								<li><a href="images/images/GELZONE-Wrap–4-24-inch.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="box-gallery">
						<img src="images/images/WMA.jpg" alt="">
						<div class="box-content">		
							<h3 class="title">Widening Mandibular Angle</h3>
							<ul class="icon">
								<li><a href="images/images/WMA.jpg"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
	
	
	
	<!-- Start Contact -->
	<div id="contact" class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Contact us</h2>
						<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p> -->
					</div>
				</div>
			</div>
			<div class="row">
				
				<div class="col-lg-12 col-xs-12">
				  <div class="contact-block">
					<form id="contactForm">
					  <div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
								<div class="help-block with-errors"></div>
							</div>                                 
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" placeholder="Your number" id="number" class="form-control" name="number" required data-error="Please enter your number">
								<div class="help-block with-errors"></div>
							</div> 
						</div>
						<div class="col-md-12">
							<div class="form-group"> 
								<textarea class="form-control" id="message" placeholder="Your Message" rows="8" data-error="Write your message" required></textarea>
								<div class="help-block with-errors"></div>
							</div>
							<div class="submit-button text-center">
								<button class="btn btn-common" id="submit" type="submit">Send Message</button>
								<div id="msgSubmit" class="h3 text-center hidden"></div> 
								<div class="clearfix"></div> 
							</div>
						</div>
					  </div>            
					</form>
				  </div>
				</div>
				
				
				<div class="col-lg-12 col-xs-12">
					<div class="left-contact">
						<h2>Address</h2>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-location-arrow" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Address</h4>
								<p> 23 Hassan EL-Amin Street-El Tawfiqia Club-El-Mohandessien</p>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Email</h4>
								<a href="#">ceo@spectrummedicalgp.com  </a><br>
								<a href="#">Spectrummedicalgp2015@gmail.com  </a>
							</div>
						</div>
						<div class="media cont-line">
							<div class="media-left icon-b">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							</div>
							<div class="media-body dit-right">
								<h4>Phone Number</h4>
								<a href="#">+201009505300</a><br>
								<!-- <a href="#">12345 67890</a> -->
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<!--map-->
	<div  class="google-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2619.769741576038!2d31.206981686768927!3d30.067206845674157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458411bd23d532f%3A0x927620cbf5bca969!2z2LXZitiv2YTZitipINivLiDYpdiz2YXYp9i52YrZhA!5e0!3m2!1sen!2seg!4v1705857670356!5m2!1sen!2seg"
	 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	
	</div>
	<style>
	.google-map {
     padding-bottom: 50%;
     position: relative;
}

.google-map iframe {
     height: 100%;
     width: 100%;
     left: 0;
     top: 0;
     position: absolute;
}	
	</style>
	
	<?php
	include_once "layouts/footer-scripts.php";
	include_once "layouts/footer.php";
	
	?>
	
	
