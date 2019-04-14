<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 4</h1>
							<h2>Using your first HTML ID selectors <span class="redcolor">in CSS</span>.</h2>
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
				If an HTML tag has an ID, you can add CSS rules that apply to that specific tag, even in an external style sheet! 
				To do this, simple type a pound sign (#), followed by the id, followed by your rules in the normal curly brackets.
			</p>
			<p>
				For example, your HTML code may look something like:
			</p>
			<div class="mp-code-example">
				&lt;HTML&gt;<br/>
				&lt;BODY&gt;<br/>
				&lt;h1 ID="helloTitle"&gt;hello!&lt;/h1&gt;<br/>
				&lt;/BODY&gt;<br/>
				&lt;/HTML&gt;
			</div>
			<p>
				In this case, your CSS could look something similar to:
			</p>
			<div class="mp-code-example">
				#helloTitle{<br/>
				/*adding CSS into these curly brackets would alter the style of the tag with the id "helloTitle"*/<br/>
				}
			</div>

			<p>
				<strong>NOTE:</strong> every ID is unique, meaning you cannot use an ID on numerous HTML tags to add CSS rules to multiple different tags. 
				We will discuss this further on the following page.
			</p>
			<p>
				Keep in mind that although it is not incorrect to adjust CSS of an HTML element based on the ID of that element, it is not commonly practiced. 
				Many people will use an inline style for that specific tag, instead. However, another alternative is using the "class" attribute on your HTML tag. 
				This HTML attribute, along with the CSS Class selectors, is discussed on the next page.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/css-3.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-5.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>