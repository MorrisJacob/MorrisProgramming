<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Creating your first HTML webpage: Part 3</h1>
							<h2>Learning the ropes of <span class="redcolor">programming</span>.</h2>
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
				On the previous page we used a &lt;link&gt; tag to link to our favicon, or the picture located on the tab at the top of the browser. 
				We can use the same &lt;link&gt; tag to link our HTML page to an external CSS page. to do this, we simply write:
			</p>
			<div class="mp-code-example">
				&lt;link rel=”stylesheet” type=”text/css” href=”mystyle.css” /&gt;
			</div>
			<p>
				To learn more about CSS, please go to our <a href="<?php echo $siteurl ?>/php/lessons/css.php">CSS section</a>.
			</p>
			<p>
				Once we have done all of this, we are ready to build our webpage! HTML webpages are mainly filled with html tags similar to the ones we have already been using. 
				To begin building our webpage, we start by defining the body of our webpage. 
				The body of the webpage is basically all of the content that you will see in the browser window.
			</p>
			<p>
				To define the body, we simply add a starter &lt;BODY&gt; tag, and corresponding &lt;/BODY&gt; tag. 
				These tags are not a part of the head, and therefore belong after the head tag. 
				However, they are still a part of our HTML page, and therefore must be before the &lt;/HTML&gt; tag.
			</p>
			<p>
				Once we enter our &lt;BODY&gt; and corresponding &lt;/BODY&gt; tags, anything we add between these tags will appear on our webpage. 
				If you simply typed your name in between these two tags, your name would appear on the webpage. 
				Try it now! Just don’t forget to save your file before opening it. Also, don’t forget to refresh your browser! Your code now should look something like mine:
			</p>
			<div class="mp-code-example">
				&lt;!DOCTYPE html&gt;<br/>
				&lt;HTML&gt;<br/>
				&lt;HEAD&gt;<br/>
				&lt;TITLE&gt;Hello, world!&lt;/TITLE&gt;<br/>
				&lt;link rel=”shortcut icon” href=”favicon.ico” /&gt;<br/>
				&lt;link rel=”stylesheet” type=”text/css” href=”mystyle.css” /&gt;&lt;!- -this is optional- -&gt;<br/>
				&lt;/HEAD&gt;<br/>
				&lt;BODY&gt;<br/>
				Jacob Morris<br/>
				&lt;/BODY&gt;<br/>
				&lt;/HTML&gt;<br/>
			</div>
			<p>
				<strong>NOTE:</strong> the text I added that states “this is optional” is only a comment. 
				Every programming language has their own way of adding comments in their code that won’t be read. 
				In HTML, you can add a comment by adding a “&lt;” followed by an exclamation point and two dashes (-). Once you add your comment, you end with two dashes and a “&gt;”.
			</p>
			<p>
					Once we have this, let’s try to link to a page outside of our own!
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/html-2.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/html-4.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>

<?php include("../masters/footer.php"); ?>