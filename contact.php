<?php include("php/masters/header.php"); ?>
<?php include("php/pagecode/contact.php"); ?>
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Contact Us</h1>
							<h2>Feel free to <a href="mailto:contact@morrisprogramming.com" class="redcolor">Email</a>, <a href="tel://3176430663" class="redcolor">Call</a>, or <a href="tel://3176430663" class="redcolor">Text</a> Us at anytime!</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul>
							<li class="address">Kokomo, IN 46901</li>
							<li class="phone"><a href="tel://3176430663">(317)643-0663</a></li>
							<li class="email"><a href="mailto:contact@morrisprogramming.com">contact@morrisprogramming.com</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Get In Touch</h3>
					<form id="frmContact" action="contact.php" method="POST">
						<div class="row form-group">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="email">Email *</label>
								<input type="text" id="email" name="email" class="form-control required" placeholder="Your email address">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="subject">Subject *</label>
								<input type="text" id="subject" name="subject" class="form-control required" placeholder="Your subject of this message">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Send Message" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

<script>
$(document).ready(function(){
	$("#frmContact").on("submit", function(e){
		var count = 0;
  		$(".required").each(function(){
        		if($(this).val() == ""){
			       	count++;
 			       	$(this).css("border", "2px solid red");
 			       	$(this).focus();
 			}
        	});
        	if(count != 0){
        	e.preventDefault();
        	}
	});
});
</script>
<?php include("php/masters/footer.php"); ?>
