<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning HTML</h1>
							<h2><span class="redcolor">Experience programming</span> with HTML5.</h2>
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
			HTML stands for HyperText Markup Language. There have been several versions of HTML, but we are currently on HTML5.
			 You have undoubtedly seen HTML code in action before. I know this because you are viewing a website right now!
			  All of the webpages on the internet are written using HTML code. HTML, along with CSS and JavaScript, are the future to the internet.
			   Using these three languages, you can write and form your webpages nearly any way you want! When creating a website:
			</p>
			
			<?php include("<?php echo $siteurl ?>/shared/lessons-webdesign.php"); ?>
			<p>
			HTML is a very easy language to learn, and one of the most convenient. 
			Unlike some of the popular object-oriented programming languages,
			 such as Visual Basic or Java, you probably won’t have to downl
			 oad any new programs to begin writing HTML pages. HTML can be easily written using an application such as Notepad or Notepad++. 
			 You can download Notepad++ <a href="https://notepad-plus-plus.org/download/v7.2.2.html" target="_blank">here</a>.
			</p>
			<p>
			If you have a Macintosh, you can also use something as simple as TextEdit or TextWrangler. 
			You can download TextWrangler <a href="http://www.barebones.com/products/textwrangler/download.html" target="_blank">here</a>.
			</p>
			<p>Once you think you are ready, click “Next” to begin your first HTML page!</p>
			
			<ol>
				<li><a href="<?php echo $siteurl ?>/php/lessons/html-1.php">Creating your first HTML webpage</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/html-2.php">Creating your first HTML webpage: Part 2</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/html-3.php">Creating your first HTML webpage: Part 3</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/html-4.php">Using your first &lt;a&gt; tag, and understanding Attributes</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/html-5.php">Using your first &lt;img&gt; tag to add an image to your website!</a></li>
			</ol>
			<p>
				Already know HTML? Take a look at some of our more helpful data!
			</p>
			<ul>
				<li><a href="<?php echo $siteurl ?>/php/lessons/html-tags.php">List of HTML tags</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/responsive-design.php">Learn about responsive design</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/browser-development-tools.php">Using Browser Development Tools</a></li>
			</ul>
			<a href="<?php echo $siteurl ?>/php/lessons/html-1.php" class="btn btn-select-plan btn-sm btn-learn next-button">Start Learning HTML <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>