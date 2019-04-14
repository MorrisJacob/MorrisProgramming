<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 5</h1>
							<h2>Using your first class selectors <span class="redcolor">in CSS</span>.</h2>
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
				Welcome to class selectors. If you are not familiar with CSS classes, you are about to meet your new best friend in CSS. 
				Classes are custom made CSS styles that you wish to bundle together, name whatever you want, and use them on any HTML tag you want. 
				If this Class is in your external CSS style sheet, you can use it throughout your entire website. Yup. That simple. 
				From 50 times in the same page to 0 times on the next, CSS classes are the greatest thing in CSS yet.
			</p>
			<p>
				Class selectors are easily named in the HTML tag using the "class" attribute. As mentioned before, these are custom named. 
				In other words, you can name this whatever you see fit. 
				However, it is <strong>STRONGLY</strong> advised that the name you choose is in some way related to either the 
				information within these tags, or to the actual styles the CSS provides.
			</p>

			<p>
				Classes were made specifically for CSS. This means that, unlike an ID, a class does not have to be unique to each tag. 
				Numerous tags can use the same CSS class. 
				To make it even better, if your class is being used 300 times throughout your website, you can make an adjustment to that class in one location! 
				In other words, if you want to change the color scheme of your website, you can do so in a matter of minutes, or even seconds.
			</p>

			<p>
				To create a rule for the CSS class you start with a "." in front of the class name. 
				Keep in mind that HTML tags have nothing in front of the selector, an HTML ID will have a "#" in front of the selector, 
				and CSS classes have a "." in front of the selector. Below is a CSS class selector example.
			</p>
			<p>
				HTML:
			</p>

			<div class="mp-code-example">
				&lt;HTML&gt;<br/>
				&lt;BODY&gt;<br/>
				&lt;H1 class="myclass" &gt;Title goes here&lt;/H1&gt;<br/>
				&lt;P&gt;Hello, world!&lt;/P&gt;<br/>
				&lt;BR /&gt;<br/>
				&lt;BR /&gt;<br/>
				&lt;div class="myclass"&gt;This is the same class!&lt;/div&gt;
			</div>
			<p>
				CSS:
			</p>
			<div class="mp-code-example">
				.myclass{<br/>
				Font-size: 25px;<br/>
				}
			</div>

			<p>
				This code may look something like:
			</p>
			<br/>
			<h1 style="font-size:25px;">Title goes here</h1>
			<p>Hello, world!</p>
			<br/>
			<br/>
			<div style="font-size:25px;">This is the same class!</div>
			<br/>
			<p>
				As you can see, once we create a CSS class, we can use that class anywhere we want. We can even use it multiple times in multiple pages! 
				This is just one of the things that differentiates CSS classes from IDs. 
				The next page further explains where to use an ID and where to use CSS classes!
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/css-4.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-6.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>