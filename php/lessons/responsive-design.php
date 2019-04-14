<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Responsive Design</h1>
							<h2><span class="redcolor">Experience programming</span> with Responsive Design.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
			<p>
				Welcome to the future of web development! Responsive Design has become quite a big deal when creating a website! 
				Even Google indexes their searches by bringing Responsive websites to the front! (to see if your website is mobile-friendly, please visit 
				<a href="https://www.google.com/webmasters/tools/mobile-friendly/" target="_blank">Google's Mobile Friendly Test</a>.
			</p>
			<p>
				According to Wikipedia, "Responsive web design (RWD) is an approach to web design aimed at crafting sites to provide an optimal viewing experience—easy 
				reading and navigation with a minimum of resizing, panning, and scrolling—across a wide range of devices (from desktop computer monitors to mobile phones)."
			</p>
			<p>
				While everyone has always worked on making their website look nice on a desktop computer, they now have to focus on creating AND 
				maintaining a responsive website that is attractive on all devices and at all sizes!
			</p>
			<p>
				Luckily, there are some helpful files built by Twitter that make it easy and fairly simple to build a responsive website.
			</p>
			<p>
				These files are called <a href="http://www.getbootstrap.com/" target="_blank">Bootstrap.</a> 
				Bootstrap contains both CSS files and JavaScript files needed to build a nice, responsive website.
			</p>
			<p>
				When using Bootstrap, your website is viewed in four different sections. These are: 
			</p>
			<ul>
				<li><strong>Large (lg)</strong> - This is anything 1200 pixels and over, which includes most desktops.</li>
				<li><strong>Medium (md)</strong> - This is anything between 768 and 969 pixels, which includes some portrait tablets, most landscape tablets, and some desktops.</li>
				<li><strong>Small (sm)</strong> - This is anything between 767 and 481 pixels, which includes most landscape phones and most portrait tablets.</li>
				<li><strong>Extra Small (xs)</strong> - This is anything smaller than 480 pixels, which includes some landscape phones, most portrait phones, and anything smaller.</li>
			</ul>
			<p>
				Probably one of the easiest concepts of Bootstrap is that it allows you to take your website and divide it into twelve columns. 
				Although this may sound confusing at first, keep in mind that your information can be more than one column wide. 
				In fact, your information can be twelve columns wide.
			</p>
			<p>
				Once I have Bootstrap downloaded and i have a link to the css page, I can start building my responsive website!
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/responsive-design-1.php" class="btn btn-select-plan btn-sm btn-learn next-button">
			Make your own Responsive web page <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>