<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 1</h1>
							<h2>Creating your first <span class="redcolor">Style Sheet</span>.</h2>
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
			CSS can be used in three different locations in your HTML.
		</p>
		<ol>
			<li><strong>An external CSS page</strong>
				<p>
					If you choose to use an external style sheet, you must save your style sheet with a ".css" extension. 
					For example, "styles.css" or "main.css". To do this in a program such as notepad, simply click File->Save as, 
					and change the extension from ".txt" to ".css". Once you have done this, you are ready to link your css page to your HTML page!
				</p>
				<p>
					This page can be linked to your HTML page using a &lt;link&gt; HTML tag in the head portion of your HTML page. For example:
				</p>
				<div class="mp-code-example">
					&lt;link rel="stylesheet" type="text/css" href=”styles.css”&gt;
				</div>
				<p>
					The above example links to a stylesheet in the same folder directory named "styles.css". 
					If, for example, you would like to add a stylesheet that is in the folder "stylesheets" then you could do this:
				</p>
				<div class="mp-code-example">
					&lt;link rel="stylesheet" type="text/css" href=”stylesheets/styles.css”&gt;
				</div>
				<p>
				<strong>NOTE:</strong> To go up one folder we use "../" like this:
				</p>
				<div class="mp-code-example">
					&lt;link rel="stylesheet" type="text/css" href=”../styles.css”&gt;
				</div>
			</li>
			<br/>
			<li><strong>An internal CSS page</strong>
				<p>
					An internal CSS page is helpful if you want to add CSS styles to different tags and classes for ONE SPECIFIC HTML PAGE. 
					In other words, if your CSS rules have any possibility of being used on a different HTML page, 
					it is strongly recommended that you add your CSS rules to an external CSS page. In fact, some programmers suggest that you only use external CSS pages. 
					By doing this, you can keep all of your CSS rules together and separate from your HTML code.
				</p>
				<p>
					To add a CSS internal style sheet, we will add the &lt;style&gt; tag and &lt;/style&gt; tag to our HTML HEAD section. 
					However, it may be helpful to note that you can add these tags anywhere in the body as well, though this is not as common. 
					Good practice usually means keeping both your CSS and your JavaScript in your HEAD tag.
				</p>
				<p>
					Once you add your style tag, your page may look something like this:
				</p>
				<div class="mp-code-example">
					&lt;!DOCTYPE HTML&gt;<br/>
					<br/>
					&lt;HTML&gt;<br/>
					&lt;HEAD&gt;<br/>
					<br/>
					&lt;title&gt;Sample page&lt;/title&gt;<br/>
					<br/>
					&lt;style&gt;<br/>
					/*Your CSS styles go here */<br/>
					&lt;/style&gt;<br/>
					<br/>
					&lt;/HEAD&gt;<br/>
					<br/>
					&lt;BODY&gt;<br/>
					<br/>
					This is a sample page.<br/>
					<br/>
					&lt;/BODY&gt;<br/>
					&lt;/HTML&gt;
				</div>
			</li>
			<br/>
			<li><strong>In the HTML tag</strong>
				<p>
					Writing a style within an HTML tag is rarely the way to go when styling your tags. 
					Although this can be helpful for a quick "let's figure out how to get this to work" type of deal, 
					it can prove extremely tiresome when you want to make a change. Most programmers suggest to never leave any inline styles in, 
					and to create a rule for every change using an external style sheet. 
					Some even say you should create an external style sheet with basic simple CSS styles you may use multiple times.
				</p>
				<p>
					To add an inline style to one of your HTML tags, we use the "style" attribute within the tag. 
					This attributes value is all of the CSS styles you wish to add to this tag. Unlike a CSS rule, we leave out the curly brackets, 
					leaving only the CSS property and CSS value. For example:
				</p>
				<div class="mp-code-example">
					&lt;p style="color:red;"&gt;hello!&lt;/p&gt;
				</div>
				<p>
					Once loaded within a browser, this line of code will appear like this:
				</p>
				<p style="color:red;">
					hello!
				</p>
				<p style="font-weight:bold;">
					As mentioned multiple times throughout this page, it is STRONGLY recommended that you use an external style sheet. 
					Without using an external style sheet, your CSS may quickly become increasingly difficult to maintain!
				</p>
			</li>
			<a href="<?php echo $siteurl ?>/php/lessons/css.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-2.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>