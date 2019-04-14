<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Creating your first HTML webpage</h1>
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
			Regardless of if you are using a windows or a macintosh computer, the most important thing to remember 
			when writing your first webpage is that the file MUST be saved as an html file. To do this in one of the programs mentioned before, 
			simply add “.htm” or “.html” to the end of your file name. After saving your file with this extension, you can open this file in any browser of your choice.
		</p>
		<p>
			<strong>NOTE:</strong> It’s important to remember that every browser reads html differently! 
			If you are building a website or even a simple webpage, don’t forget to check it on EVERY browser before making it live. The browsers used today are:
		</p>
		<ul>
			<li><a href="https://www.google.com/intl/en/chrome/browser/desktop/
				index.html#brand=CHMB&utm_campaign=en&utm_source=en-ha-na-us-sk&utm_medium=ha" target="_blank">Google Chrome</a></li>
			<li><a href="https://www.apple.com/safari/" target="_blank">Safari</a></li>
			<li><a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a></li>
			<li><a href="https://support.microsoft.com/en-us/help/17621/internet-explorer-downloads" target="_blank">Internet Explorer</a></li>
			<li><a href="http://www.opera.com/" target="_blank">Opera</a></li>
		</ul>
		<p>
			Once we have started a blank html file and saved it with an html extension, we are ready to begin creating our webpage!
		</p>
		<p>
			The first thing we want to do is name our document type. We ALWAYS want to name the type of document we are about to write. 
			Since we are about to write an HTML page, we will add the following declaration:
		</p>
		<div class="mp-code-example">
			&lt;!DOCTYPE html&gt;
		</div>
		<p>
			This tells the browser that we are writing an HTML page.
		</p>
		<a href="<?php echo $siteurl ?>/php/lessons/html.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
		<a href="<?php echo $siteurl ?>/php/lessons/html-2.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>

<?php include("../masters/footer.php"); ?>