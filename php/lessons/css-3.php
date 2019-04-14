<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 3</h1>
							<h2>Using HTML tag selectors <span class="redcolor">in CSS</span>.</h2>
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
				When you add an inline style to an HTML tag it not only affects that tag, but also affects all 
				of the tags and elements within that tag (assuming an inner tag doesn't have another value for that CSS style to overrule it). 
				Here is an example of this:
			</p>
			<div class="mp-code-example">
				&lt;BODY style=”color: blue;”&gt;<br/>
				Hello, I am directly inside the body tag.<br/>
				&lt;p&gt;I am inside of a p tag!&lt;/p&gt;<br/>
				&lt;/BODY&gt;
			</div>
			<p>
				Will return:
			</p>
			<div style='color:blue;'>
				Hello, I am directly inside the body tag.
				<p>I am inside of a p tag!</p>
			</div>
			<p>
				<strong>NOTE:</strong> Keep in mind that a semicolon should ALWAYS come after a CSS style, 
				regardless of where that style is located (i.e. external style sheet, inline style, etc.).
			</p>
			<p>
				The following are some CSS examples to help you better understand CSS and how to select certain HTML tags:
			</p>

			<div class="mp-code-example">
				h1{<br/>
				/*any CSS rules written inside of these curly brackets would alter all of the h1 tags. */<br/>
				}
			</div>
			<div class="mp-code-example">
				h1, h2{<br/>
				/*any CSS rules written inside of these curly brackets would alter all of the h1 tags and all of the h2 tags*/<br/>
				}
			</div>
			<div class="mp-code-example">
				h1 h2{<br/>
				/*any CSS rules written inside of these curly brackets would alter all of the h2 tags that are found within any h1 tag */<br/>
				}
			</div>
			<p>
				In the CSS examples given above, the tags "h1" and "h2" can be replaced freely with any HTML tags you are wanting to use! For example:
			</p>
			<div class="mp-code-example">
				div p{<br/>
				/*any CSS rules written inside of these curly brackets would alter all of the p tags that are found within any div tag */<br/>
				}
			</div>

			<p>
				For a list of HTML tags, please visit my <a href="<?php echo $siteurl ?>/php/lessons/html-tags.php" title="list of HTML tags">list of HTML tags.</a>
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/css-2.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-4.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>