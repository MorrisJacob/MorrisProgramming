<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>CSS Properties</h1>
							<h2><span class="redcolor">Learning the ropes</span> of CSS3.</h2>
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
				A CSS property is used to define what specific style of the CSS you are referencing. CSS will always look like this:
			</p>
			<div class="mp-code-example">
				selector{<br/>
				property: value;<br/>
				property: value;<br/>
				...<br/>
				}<br/>
			</div>
			<p>
				For example, to make your text red in all &lt;p&gt; tags, your CSS may look something like this:
			</p>
			<div class="mp-code-example">
				p{<br/>
				color:red;<br/>
				}<br/>
			</div>
			<p>
				Here is a list of CSS properties. All of these CSS properties can be used to build onto your HTML website!
			</p>
			<ul>
				<li class="margin-bottom10pix"><strong>color</strong> - this changes the color of the text. The value for this property would be the desired color.</li>
				
				<li class="margin-bottom10pix"><strong>font-size</strong> - this changes the size of the text. 
				The value for this property would be the desired size (px, pt, em, %, etc).</li>
				
				<li class="margin-bottom10pix"><strong>font-family</strong> - this changes the type of the text. 
				The value for the property would be the desired font family (arial, times new roman, etc).</li>
				
				<li class="margin-bottom10pix"><strong>background-color</strong> - this changes the color of the background. The value for this property would be the desired color.</li>
				
				<li class="margin-bottom10pix"><strong>background-image</strong> - this changes the image of the background. 
				The value for this property would be the desired image. (flower.jpg, images/background-sun.jpg, etc).</li>
				
				<li class="margin-bottom10pix"><strong>float</strong> - this floats the element to the specified side of the screen. 
				The value for this property is usually "left", "right", or "auto"</li>
				
				<li class="margin-bottom10pix"><strong>text-align</strong> - this aligns the text (or object) in a specified way. 
				The value for this property is the desired alignment (left, right, center, etc).</li>

				<li class="margin-bottom10pix"><strong>padding</strong> - this adds padding to the element. 
				The value for this property would be the desired amount of padding (px, pt, em, %, etc).</li>
				
				<li class="margin-bottom10pix"><strong>margin</strong> - this adds margins to the element. 
				The value for this property would be the desired amount of margins (px, pt, em, %, etc).
					<p>
						<strong>NOTE:</strong> There are both similarities and differences between margin and padding that are worth mentioning. 
						First, you can define certain sides of both by adding "-bottom", "-left", "-top", or "-right" to the end of the property. 
						For example you might want to use:
					</p>
					<div class="mp-code-example">
						margin-top: 5%;
					</div>
					<p>
						This will add 5% margin to the top of the element.
					</p>
					<p>
						Also keep in mind that, unlike padding, margins can be negative. For example, you may want to use:
					</p>
					<div class="mp-code-example">
						.move-up{<br/>
						margin-top:-15%;<br/>
						}<br/>
					</div>
					<p>
						Using this, you can pull objects higher their current position. This can be very helpful. For example, This may be necessary to pull text over an image.
					</p>
				</li>
			</ul>
			<p>
				<strong>NOTE:</strong> Keep in mind that CSS can accept hexadecimal codes for colors anywhere it can accept a color!
			</p>
			<p>
				Some CSS properties are browser specific. 
				For example, the following css will make a non-a tag clickable. 
				However, notice that properties are listed multiple times because this functionality is not yet unified across all browsers.
			</p>
			<div class="mp-code-example">
				.clickable-div{<br/>
				&nbsp;&nbsp;-webkit-user-select: none; /* Chrome/Safari */<br/>
				&nbsp;&nbsp;-moz-user-select: none; /* Firefox */<br/>
				&nbsp;&nbsp;-ms-user-select: none; /* IE10+ */<br/>
				&nbsp;&nbsp;/* Rules below not implemented in browsers yet */<br/>
				&nbsp;&nbsp;-o-user-select: none;<br/>
				&nbsp;&nbsp;user-select: none;<br/>
				&nbsp;&nbsp;cursor: pointer;<br/>
				}
			</div>
			<p>
				The number of properties you can use in CSS is pretty much endless. Luckily, you can learn them as needed! For more CSS properties, please visit 
				<a href="http://www.w3schools.com/cssref/" target="_blank">W3Schools</a>.
			</p>
			<p>
				Just for a quick tip, here's a responsive IFrame cheat!
			</p>
			<div class="mp-code-example">
				.videoWrapper {<br/>
				&nbsp;&nbsp;position: relative;<br/>
				&nbsp;&nbsp;padding-bottom: 56.25%; /* 16:9 */<br/>
				&nbsp;&nbsp;padding-top: 25px;<br/>
				&nbsp;&nbsp;z-index:1000;<br/>
				}<br/>
				<br/>
				.videoWrapper iframe {<br/>
				&nbsp;&nbsp;position: absolute;<br/>
				&nbsp;&nbsp;top: 0;<br/>
				&nbsp;&nbsp;left: 0;<br/>
				&nbsp;&nbsp;width: 100%;<br/>
				&nbsp;&nbsp;height: 100%;<br/>
				}
			</div>
			<p>Don't know what CSS is? <a href="<?php echo $siteurl ?>/php/lessons/css.php" title="CSS">Click here to learn about how to write CSS.</a></p>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>