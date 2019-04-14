<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning CSS: Part 2</h1>
							<h2>Creating your first <span class="redcolor">CSS Comments</span>.</h2>
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
				Once you understand the different ways you can use CSS with your HTML code, we can begin building our first CSS style sheet. 
				For this example, let's start by building an external style sheet. 
				As mentioned before, you can start your style sheet by saving an average text (.txt) file as a CSS (.css) file. 
				Once you have done this, we are ready to begin.
			</p>
			<p>
				If you are coming to CSS for the first time, it may come as a shock (and a relief!) that CSS pages have no definitive beginning or endings. 
				By this, I mean there are no beginning or ending marks or tags. CSS pages can be nothing but CSS rules from top to bottom. 
				However, it can sometimes be helpful to add some notes to the top of your CSS page to describe what that page is used for. 
				It can also be helpful to write notes explaining what certain CSS properties and rules do.
			</p>
			<p>
				To add a comment in CSS, we use the "/*" and the "*/" symbols.
			</p>
			<p>
				<strong>NOTE:</strong> CSS notes can also be written into an inline style, but this can make your HTML code appear extremely confusing and therefore is not recommended.
			</p>
			<p>
				Here is an example of a CSS comment:
			</p>
			<div class="mp-code-example">
				/* This is my first style sheet! */
			</div>

			<p>
				These comments do not have to be on their own line. For example:
			</p>

			<div style="margin:5px; background-color:#E8E8DC; color:black;">
				p{<br/>
				color: red; /*this style changes all text within a p tag to red */<br/>
				}
			</div>

			<p>
				When debugging CSS, it is sometimes helpful to comment out the CSS styles you are not using at the moment, but may want to use in the future. 
				For example:
			</p>
			<div class="mp-code-example">
				Body{<br/>
				Font-size: 20px;<br/>
				/* font-weight: bold; */<br/>
				}
			</div>
			<p>
				Finally, when adding comments that are longer than one line, you simply add the starting 
				and ending comment marks at the beginning and end of the comments, respectively. For example:
			</p>

			<div class="mp-code-example">
				/*Styles are fun!<br/>
				There are many different styles we can learn.<br/>
				You will probably never know every style in CSS */
			</div>
			<a href="<?php echo $siteurl ?>/php/lessons/css-1.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/css-3.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>