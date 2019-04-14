<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 6</h1>
							<h2>Difference between <span class="redcolor">IDs</span> and <span class="redcolor">classes</span> in CSS.</h2>
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
				HTML IDs are NOT the same as CSS Class selectors. here are some distinct differences:
			</p>
			<ol>
				<li><strong>IDs are used for MUCH more than just CSS.</strong>
					<br/>
					<p>
						CSS class selectors, as the name implies, are almost always, if not always, used for changing the CSS styles of an element or set of elements. 
						However, an ID can be used to add events to a specific HTML tag. 
						These IDs can be used in client-side languages, such as JavaScript, as well as server-side languages, such as PHP or .NET. 
						IDs are helpful in this way because they are unique to each of their corresponding HTML tags. 
						Which brings us to the next difference.
					</p>
				</li>
				<li><strong>Each ID is unique.</strong>
					<br/>
					<p>
						When you set a certain ID to one HTML tag, you cannot set that same ID to a different HTML tag on this page. 
						This is because, again, IDs are used to reference a particular element on a page. 
						In other words, once you use a certain ID for one tag, you cannot define another tag with that same ID. 
						However, CSS classes are made specifically to be used more than once. 
						Classes should be used freely and in multiple locations (to a certain extent).
					</p>
				</li>
			</ol>
			<br/>
			<p>
				On the following page, you will see a few more examples on how to use class selectors.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/css-5.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-7.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>