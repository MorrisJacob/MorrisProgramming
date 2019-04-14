<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Creating your first HTML webpage: Part 2</h1>
							<h2>Begin building your own <span class="redcolor">HTML5 web page</span>.</h2>
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
				When writing in HTML, nearly every tag has an ending tag. For example, 
				a &lt;p&gt; tag would show that you are starting a paragraph. Therefore, this tag must have a matching &lt;/p&gt; tag to show that you are ending a paragraph.
			</p>
			<p>
				However, some tags written in HTML do not have ending tags, and therefore should be “self-closing.”
				 A self-closing tag should end with “/&gt;” instead of “&gt;”. For example, when adding an image to a page, we use the html &lt;img&gt; tag. 
				 However, after defining the source of the image, we simply put a slash since this is a self-closing tag. For example:
			</p>
			<div class="mp-code-example">
				&lt;img src=”pictures/picturename.jpg” /&gt;
			</div>
			<p>
				As you can see, this tag has no corresponding ending tag.
			</p>
			<p>
				<strong>NOTE:</strong> Notice that the Doctype code we have previously entered does not have a slash, nor a closing tag. 
				This is because the Doctype is not actually an HTML tag, but a declaration.
			</p>
			<p>
				To start our webpage, we will add a &lt;HTML&gt; start tag, and corresponding &lt;/HTML&gt; closing tag. Once we enter these, our page should look something like this:
			</p>
			<div class="mp-code-example">
				&lt;!DOCTYPE html&gt;<br/><br/>
				&lt;HTML&gt;<br/><br/>
				&lt;/HTML&gt;
			</div>
			<p>
				Between our HTML tags we now need to add some head tags. 
				Head tags include the &lt;HEAD&gt; start tag, as well as a corresponding &lt;/HEAD&gt; tag. 
				The head tag holds many things, such as references to external JavaScript and/or CSS pages, internal JavaScript and/or CSS, and the title of your page. 
				Because we are discussing solely HTML here, we are only going to discuss the title.
			</p>
			<p>
				The title of our page will appear on the tab in your browser. 
				The title can be defined by adding the &lt;TITLE&gt; start tag, and corresponding &lt;/TITLE&gt; closing tag in between the head tags. 
				Any text written between your starting and ending title tags will be the title of your HTML page, and therefore will appear on your browser’s tab for your page.
			</p>
			<p>
				After running your page and noticing the change on the HTML tag, you may become curious as to how you can change the picture on this tab, as well! 
				To do this, we will add a tag in between our head tags, just like we did with the title. 
				This link tag is not related to the title, and therefore should be outside of the title tag. 
				We must define this link tag as a shortcut icon, as well as define what this picture is. 
				This picture must have a “.ico” extension, and we should know the location of the picture’s file relative to our page. 
				It may be easier to move the picture you are going to use to the same folder as our html page is now. 
				Our link tag should look something like this (where the picture would be named “favicon”):
			</p>
			<div class="mp-code-example">
				&lt;link rel=”shortcut icon” href=”favicon.ico” /&gt;
			</div>
			<p>
				if you have a picture to use, but it needs a .ico extension, you can convert your picture 
				<a href="http://www.favicon-generator.org/" target="_blank">Here</a>. (Just be sure to select “Generate only 16×16 favicon.ico”)
			</p>
			<p>
				After adding your link and title tags, your code should look something like:
			</p>
			<div class="mp-code-example">
				&lt;!DOCTYPE html&gt;<br/>
				&lt;HTML&gt;<br/>
				&lt;HEAD&gt;<br/>
				&lt;TITLE&gt;Hello, world!&lt;/TITLE&gt;<br/>
				&lt;link rel=”shortcut icon” href=”favicon.ico” /&gt;<br/>
				&lt;/HEAD&gt;<br/>
				&lt;/HTML&gt;<br/>
			</div>
			<a href="<?php echo $siteurl ?>/php/lessons/html-1.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/html-3.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>

<?php include("../masters/footer.php"); ?>