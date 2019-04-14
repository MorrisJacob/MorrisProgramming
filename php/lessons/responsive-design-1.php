<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Responsive Design</h1>
							<h2>Build your own <span class="redcolor">Responsive Web Page</span>.</h2>
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
				First, we should understand that, unlike previous pages that are usually built using a table, we will build our website using "div" tags. 
				These tags should have classes of all different types in Bootstrap.
			</p>
			<p>
				<strong>NOTE:</strong> Keep in mind that the examples throughout this section of the website is examples of code IN YOUR BODY TAG. 
				If this doesn't make any sense to you, it is STRONGLY recommended that you visit both the <a href="<?php echo $siteurl ?>/php/lessons/html.php">HTML guide</a> 
				AND the <a href="<?php echo $siteurl ?>/php/lessons/css.php">CSS guide</a> for a better understanding.
			</p>
			<p>We can start by adding a div tag with a class of "container". Our page should look something like this:</p>
			<div class="mp-code-example">
				&lt;div class="container"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;
			</div>
			<p>
				Once you have your container for your page, we can start adding rows. You can view these as table rows if you wish. 
				These rows are to help build a table layout for your page. 
				However, it can be extremely helpful to have an idea of how your page will look once you reach the phone size. 
				With that being said, let's add a total of three rows!
			</p>
			<div class="mp-code-example">
				&lt;div class="container"&gt;<br/>
				&lt;div class="row"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;div class="row"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;div class="row"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;/div&gt;
			</div>
			<p>
				Once we have three rows, we can add columns to these rows. These columns may change width depending on the device that you are on. 
				For example, you may want a page to have three columns of information on a desktop computer. 
				However, once you hit a portrait tablet the text might be a bit too small. In this case, it would be better to use two columns instead of three. 
				Finally, one column is always a good choice when you get down to portrait phone!
			</p>
			<p>
				To define how many columns you want at a certain screen size, we use CSS classes provided to us from Bootstrap. 
				These always have a certain structure to the class name. The structure is "col-", followed by the two-lettered size 
				(xs, sm, md, or lg), followed by another "-", and finally the number of columns this will be spread across. 
				For our example, the code may look like this:
			</p>
			<div class="mp-code-example">
				&lt;div class="container"&gt;<br/>
				&lt;div class="row"&gt;<br/>
				&lt;div class="col-lg-4 col-sm-6 col-xs-12"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;div class="col-lg-4 col-sm-6 col-xs-12"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;div class="col-lg-4 col-sm-6 col-xs-12"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;div class="row"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;div class="row"&gt;<br/>
				&lt;/div&gt;<br/>
				&lt;/div&gt;
			</div>
			<p>
				Notice that I use more than one column class on each div. This is to represent the different columns at different screen sizes. 
				By using "col-lg-4" I am saying that all three of these should be 4 columns wide, for a total of 12 columns on a large screen size. 
				Once we reach the small size, "col-sm-6" is saying that each tag will be 6 columns wide on a small screen size. 
				Finally, the "col-xs-12" says that the information will be all 12 columns wide on an extra small screen size. 
				Also notice that even though I did not define the medium screen size, it will inherit the small CSS screen size.
			</p>
			<p>
				Now that you have a basic understanding of the Bootstrap framework, please play around with it to understand it better. 
				This framework is loaded with a large amount of CSS and JavaScript framework, and is always a wonderful addition to any website!
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/responsive-design.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>