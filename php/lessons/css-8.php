<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 8</h1>
							<h2>using <span class="redcolor">pseudo-class selectors</span> in CSS.</h2>
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
				A pseudo-class is a little different from previous CSS uses. CSS pseudo-classes are used to define styles at certain states of the HTML tag. 
				For example, you may use a pseudo-class to have a &lt;DIV&gt; or &lt;a&gt; tag change colors when you hover over or click on them. 
				To create a pseudo-class, you add a colon (:) after the last CSS selector. Below are some examples.
			</p>
			<p>
				We know that to add CSS styles to an &lt;a&gt; tag, I simply use CSS that would look something like this:
			</p>
			<div class="mp-code-example">
				a{<br/>
				/*any CSS styles written inside of these curly brackets would alter all of the &lt;a&gt; tags*/<br/>
				color:black;<br/>
				}
			</div>
			<p>
				Now, if we want to change the color to blue when we hover over this a tag, we can use the :hover pseudo-class. Here is an example:
			</p>
			<div class="mp-code-example">
				a:hover{<br/>
				color:blue;<br/>
				}
			</div>
			<p>
				This tag may look something like this:
			</p>
			<p>
				<a href="javascript:;" class="hover-blue">Empty Link</a>
			</p>

			<p>
				There are tons of pseudo-classes in CSS. Some of these include:
			</p>
			<ul>
				<li><strong>:hover</strong> - hover over the object</li>
				
				<li><strong>:active</strong> - the object you are currently clicking</li>
				
				<li><strong>:visited</strong> - objects you have already clicked on</li>
				
				<li><strong>:first-child</strong> - the first time the corresponding tag appears. 
					Note that the doctype must be declared for this to work. You can also do, for example:
					<div class="mp-code-example">
						P h1:first-child{<br/>
						/*any CSS styles written inside of these curly brackets would alter the first h1 tag in EVERY p tag on the page*/<br/>
						}
					</div>
				</li>
				<li><strong>:lang</strong> - allows you to define special roles for different languages. For example:
					<div class="mp-code-example">
						P:lang(no){<br/>
						quotes:”~” “~”;<br/>
						}
					</div>
					<p>
						This would add squiggly lines before and after any p tag with the attribute lang=”no”
					</p>
				</li>
				<li><strong>:checked</strong> – selects checked elements</li>
				<li><strong>:empty</strong> - selects every tag that has no inner tag</li>
				<li><strong>:not(selector)</strong> - selects every element that is not the selector</li>
				<li><strong>:read-only</strong> - selects only elements with a "readonly" property specified</li>
				<li><strong>:before</strong> - allows you to insert content before all certain elements</li>
				<li><strong>:after</strong> - allows you to insert content after all certain elements</li>
			</ul>
			<p>
				For all pseudo-classes, <a href="http://www.w3schools.com/css/css_pseudo_classes.asp" target="_blank">please visit w3schools.</a>
			</p>
			<p>
				Now that you know all of the ways you can select tags on your HTML page, let's discuss the CSS styles you can add to these tags.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/css-7.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-9.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>