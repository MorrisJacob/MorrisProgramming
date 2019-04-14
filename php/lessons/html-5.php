<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
	<div class="display-t">
		<div class="display-tc animate-box" data-animate-effect="fadeIn">
			<h1>Creating your first HTML webpage: Part 5</h1>
			<h2>Using your first <span class="redcolor">&lt;img /&gt;</span> tag to add a picture!</h2>
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
				To add an image to our webpage, it would usually be best to add the image to our folder first. 
				We can use any picture for this. If you don’t have a picture to work with, you might want to take one from a free picture-sharing website, such as 
				<a href="http://www.stockvault.net/" target="_blank">StockVault</a>.
			</p>
			<p>
				Once we have a picture in the same folder as your HTML page, we can add that picture to our webpage. 
				We start by adding an &lt;img /&gt; tag. As you can see, this tag is a self-closing tag. In case you forgot, this means that the tag has no ending tag. 
				This tag can go anywhere in the body, but we can put it right after our &lt;/a&gt; tag, and before our &lt;/BODY&gt; tag.
			</p>
			<p>
				Now that we have an &lt;img /&gt; tag, we can add an attribute that links this tag to our picture. 
				This attribute is the “src” attribute. 
				Notice that while some attributes are universal and can be applied to any HTML element, some attributes are specific to certain elements. 
				The “href” is specific to the &lt;a&gt; tag, and the “src” attribute is specific to the &lt;img /&gt; tag.
			</p>
			<p>
				If I choose a picture named “sunset.jpg”, then my attribute would be "src='sunset.jpg'". 
				Keep in mind that when you link to your picture, you MUST include the file extension (.jpg, .gif, .png, etc). 
				All pictures should also use the attribute “alt”, with text that will appear if the image cannot be displayed for some reason. 
				Once we have these attributes on our &lt;img /&gt; tag, our code should look something like this:
			</p>
			<div class="mp-code-example">
				&lt;!DOCTYPE html&gt;
				&lt;HTML&gt;
				&lt;HEAD&gt;
				&lt;TITLE&gt;Hello, world!&lt;/TITLE&gt;
				&lt;link rel="shortcut icon" href="favicon.ico" /&gt;
				&lt;link rel="stylesheet" type="text/css" href="mystyle.css" /&gt;&lt;!- -this is optional- -&gt;
				&lt;/HEAD&gt;
				&lt;BODY&gt;
				Jacob Morris
				&lt;a href="https://www.facebook.com">Facebook&lt;a&gt;
				&lt;a href="secondpage.html"&gt;This should open my second HTML page!!&lt;/a&gt;
				&lt;img src="sunset.jpg" alt="a sunset" /&gt;
				&lt;/BODY&gt;
				&lt;/HTML&gt;
			</div>
			<p>
				The next step is very simple, yet is used all over the internet. 
				If we wanted to link our image to another webpage, we could simply put an &lt;a&gt; and corresponding &lt;/a&gt; tag around the image. 
				Let’s do this by simply taking our “&lt;img src=”sunset.jpg” /&gt;” code, and placing it inside our &lt;a&gt; tag that links to our external HTML page. 
				Once this is done, that section of our code should look something like:
			</p>
			<div class="mp-code-example">
				&lt;a href=”secondpage.html”&gt;
				This should open my second HTML page!!&lt;img src=”sunset.jpg” alt=”a sunset” /&gt;
				&lt;/a&gt;
			</div>
			<p>
				There are tons of other HTML tags to use on your page! Go to my HTML tag list and try them out!
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/html-4.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/html-6.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>

<?php include("../masters/footer.php"); ?>