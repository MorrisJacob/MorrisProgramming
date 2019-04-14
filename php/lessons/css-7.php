<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 7</h1>
							<h2>using <span class="redcolor">class selectors</span> with <span class="redcolor">HTML tags</span>.</h2>
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
				Just as discussed before, you can also signify that you want to add a style to all of the HTML tags within a tag with a certain class by writing:
			</p>

			<div class="mp-code-example">
				.myclass p{<br/>
				/*any CSS styles written inside of these curly brackets would alter all of the p tags within any tag with the class "myclass"*/<br/>
				}
			</div>
			<p>
				A new way of using CSS selectors is to select all instances of a certain TAG with your class. For example:
			</p>

			<div class="mp-code-example">
				p.myclass{<br/>
				/*any CSS styles written inside of these curly brackets would alter all of the p tags with the class "myclass"*/<br/>
				}
			</div>
			<a href="<?php echo $siteurl ?>/php/lessons/css-6.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-8.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>