<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
	<div class="display-t">
		<div class="display-tc animate-box" data-animate-effect="fadeIn">
			<h1>Creating your first HTML webpage: Part 4</h1>
			<h2>Using your first <span class="redcolor">&lt;a&gt;</span> tag, 
							and understanding <span class="redcolor">Attributes</span>.</h2>
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
				To link to a page outside of our own, or even to a section of our webpage, we use the &lt;a&gt; tag and the corresponding &lt;/a&gt; element. 
				Your link can go to any webpage you wish. For my example, I will create a link that goes to Facebook. Once you add the &lt;a&gt; tags to your page, 
				any text you enter between these tags will become your link. In my example, I can enter “Facebook” or “FACEBOOK” or even “Click here to go to Facebook!”
			</p>
			<p>
				Although you can type anything between these tags, there are some obviously incorrect things to type into this spot. 
				For example, typing “Twitter” or “Instagram” would not make any sense, whatsoever. 
				It is also known as entirely improper to write something along the lines of “CLICK HERE!” because the user has no idea where this link will take them.
			</p>
			<p>
				Now that you have text between your tags, let’s go ahead and make this tag active. 
				To do this we will add an attribute to your &lt;a&gt; tag. Attributes are modifiers of HTML elements. 
				Attributes can change HTML elements in a number of ways. In our case, we are going to use the “href” attribute on our &lt;a&gt tag. 
				This attribute adds a hypertext reference to our element, allowing us to create a link to wherever we’d like to go.
				 Although we add this attribute to our &lt;a&gt; tag, we don’t have to change anything to our &lt;/a&gt; tag.
			</p>
			<p>
				Attributes are each seperated by a space within the tag. 
				However, the tagname must always come first. once we add our href attribute, we must set it to a value. 
				For my example, I would add “href=”https://www.facebook.com”. Note that each attribute’s value must have either single or double quotes around it. 
				If you’re not sure where you want your link to go yet, it’s always smart to set the hypertext reference to “#”. 
				Once we add our &lt;a&gt; element and attribute, our code should look something like this:
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
				Jacob Morris
				&lt;a href=”https://www.facebook.com”&gt;Facebook&lt;a&gt;<br/>
				&lt;/BODY&gt;<br/>
				&lt;/HTML&gt;<br/>
			</div>
			<p>
				<strong>NOTE:</strong> Excluding the “www.” from your link is not recommended, although your link will still work. 
				However, if we remove the “http://” or “https://” from the beginning of our link, The browser thinks 
				we are trying to access a file within our directories, and therefore our link stops working.
			</p>
			<p>
				Now we can try to add an internal link! 
				To do this, we must first create another HTML page. I recommend simply saving your file again, only changing your name to something different, 
				such as “secondpage.html” You can make a duplicate file of your current one by simply going to “file-&lt;Save as.” 
				Be sure to save it in the same folder, but use a different name! Once you have done this, we are ready to create an internal link.
			</p>
			<p>
				We start just as before. We will create an &lt;a&gt; tag and corresponding &lt;/a&gt; tag. 
				Now we add the attribute “href”. Once we have done this, we can set the value of the href to the name we gave our other HTML page.
				 For example, your link may be:
			</p>
			<div class="mp-code-example">
				&lt;a href=”secondpage.html”&gt;This should open my second HTML page!!&lt;/a&gt;
			</div>
			<p>
				<strong>NOTE:</strong> If your new HTML file is in a different folder, you can still access the file by simply defining the folder’s name, 
				followed by a “/”. For example, if my file is multiple folders deep, my href may look something like “foldersampleone/foldersample2/secondpage.html”. 
				On the same note, if my file is in folders above my first HTML file, I can signify that I want to move up folders by using 
				“../” instead of the file name. For example, if my file is two folders above my current one, my href may look something like “../../secondpage.html”.
			</p>
			<p>
				Once we have done this, we can learn how to add an image!
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/html-3.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/html-5.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>

<?php include("../masters/footer.php"); ?>