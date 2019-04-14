<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 9</h1>
							<h2>Introduction to <span class="redcolor">CSS styles</span>.</h2>
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
				Strangely enough, the actual CSS styles are something we haven't discussed at all yet! CSS styles are the actual styles used to change the look of tags. 
				CSS styles consist of two things: properties and values. Using these CSS styles, you can visually change nearly anything on your Website! 
				Some css properties may include:
			</p>
			<ul>
				<li><strong>Color:</strong> - Selects the font color</li>
				<li><strong>background-color:</strong> - changes the background color</li>
				<li><strong>font-size:</strong> - changes the font size (this can be px, pt, em, in, %, etc.)</li>
				<li><strong>float:</strong> - floats the information to a specified side of the screen</li>
				<li><strong>text-align:</strong> - aligns the text a specified way</li>
			</ul>
			<p>
				For more CSS properties please visit our <a href="<?php echo $siteurl ?>/php/lessons/css-properties.php" title="list of CSS properties">list of CSS properties</a>.
			</p>
			<p>
				The number of CSS properties is endless, so you can imagine how many value there are for each of them!
			</p> 
			<p>
				For example, color can accept "green", "red", "blue", as well as hexadecimal codes. 
				font-size can accept any number you enter, as long as you specify the unit of measurement. Here are a few CSS examples.
			</p>
			<div class="mp-code-example">
				H1{ color:black;<br/>
				Text-align:left;}<br/>
				<br/>
				H2{<br/>
				Color: red;<br/>
				Text-size: 20px;<br/>
				/*background-color: #000080; */<br/>
				}<br/>
				<br/>
				#MyID{ float:left; position: absolute; }<br/>
				<br/>
				.MyClass{font-size: 100px;<br/>
				Margin-top: -100px; }<br/>
				<br/>
				A:hover{color: green;}
			</div>

			<p>
				Note that I can even use pseudoclasses with class names! For example:
			</p>

			<div class="mp-code-example">
				.Myclass:hover{color: blue;}
			</div>
			<p>
				<strong>NOTE:</strong> In some RARE situations, CSS does not work the way you want it to. The hierarchy of your CSS can fail you. 
				If this happens, you can add "!important;" after your CSS style value. THIS IS NOT RECOMMENDED!
			</p>
			<p>
				Congratulations! This is the end of our CSS tutorial. To see CSS examples of any page you could ever go to EVER, please 
				<a href="<?php echo $siteurl ?>/php/lessons/browser-development-tools.php" title="Using Browsers Development Tools">visit our Browser Development page!</a>
			</p>
			<p>
				Also, if you wish to learn about Bootstrap and building responsive websites, 
				please visit our <a href="<?php echo $siteurl ?>/php/lessons/responsive-design.php">Responsive Design</a> section.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/css-8.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>