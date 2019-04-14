<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
<div class="col-md-8 col-md-offset-2 text-center">
	<div class="display-t">
		<div class="display-tc animate-box" data-animate-effect="fadeIn">
			<h1>HTML Tags</h1>
			<h2>Use HTML5 tags to <span class="redcolor">Experience Programming</span></h2>
		</div>
	</div>
</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
			<p>Here is a list of HTML tags. All of these tags can be used to build onto your HTML website!</p>
				<ul>
					<li class="margin-bottom10pix"><strong>&lt;HTML&gt;&lt;/HTML&gt;</strong> - These tags define where your HTML code begins and ends.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;HEAD&gt;&lt;/HEAD&gt;</strong> - These tags define where the head of your HTML document begins and ends. 
					Heads usually include links to external JavaScript or CSS pages, as well as Internal JavaScript or CSS code. They also include the title.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;TITLE&gt;&lt;/TITLE&gt;</strong> - These tags go inside of your HEAD tags, 
					and define the title of your page, which will appear in the browser's tab.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;link /&gt;</strong> - This tag is commonly used to link your HTML page to an external CSS page.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;script&gt;&lt;/script&gt;</strong> - These tags can go in between the &lt;HEAD&gt; 
					and &lt;/HEAD&gt; tags in your HTML code, and are commonly used to add JavaScript functions to your HTML web page. 
					For more about JavaScript, please <a href="<?php echo $siteurl ?>/php/lessons/javascript.php" title="JavaScript">read our JavaScript section!</a></li>
					
					<li class="margin-bottom10pix"><strong>&lt;BODY&gt;&lt;/BODY&gt;</strong> - 
					These tags define where the body of your HTML document begins and ends. The Body includes all HTML that will appear on your page.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;a&gt;&lt;/a&gt;</strong> - These tags allow you to link to both external 
					and internal web pages, as well as other sections of the current HTML web page.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;img /&gt;</strong> - This tag allows you to add an image onto your HTML web page.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;h1&gt;&lt;/h1&gt;</strong> - These are header tags used 
					for creating headers on your page. They include h1 through h6.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;p&gt;&lt;/p&gt;</strong> - These are paragraph tags. 
					Adding text between these tags create a nice paragraph feel to your website.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;BR /&gt;</strong> - This is called the break tag. 
					This element ends the current line on the webpage and starts a new line.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;table&gt;&lt;/table&gt;</strong> - this tag is used to create tables on your webpage. 
					Although this tag used to be used to create the entire layout of your website, it should now be strictly used to create tables. 
					Many companies nowadays would much rather use tags such as &lt;div&gt; or 
					&lt;span&gt; to create their website, since these tags are much more responsive.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;tr&gt;&lt;/tr&gt;</strong> - these tags go within the &lt;table&gt; 
					and &lt;/table&gt; tags, and are used to create new table rows.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;td&gt;&lt;/td&gt;</strong> - these tags go within the &lt;tr&gt; and &lt;/tr&gt; tags, 
					and are used to create new table data or table cells.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;div&gt;&lt;/div&gt;</strong> - Div tags are one of the most commonly used tags today. 
					They are used to divide certain sections of websites from one another. Anything after a div tag will start on a new line.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;span&gt;&lt;/span&gt;</strong> - 
					span tags are very similar to div tags, with the exception that anything after the span tag can remain on the same line.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;style&gt;&lt;/style&gt;</strong> - These tags can go in between the &lt;HEAD&gt; and &lt;/HEAD&gt; 
					tags in your HTML code, and are commonly used to add CSS rules to your HTML web page. For more about CSS, please 
					<a href="<?php echo $siteurl ?>/php/lessons/css.php" title="CSS">read our CSS section!</a></li>
					
					<li class="margin-bottom10pix"><strong>&lt;select&gt;&lt;/select&gt;</strong> - These tags start and end a dropdown list.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;option&gt;&lt;/option&gt;</strong> - These tags go in between the &lt;select&gt; 
					and &lt;/select&gt; tags, and hold the options for the dropdown list. 
					For example, to create a dropdown list that allows you to select your gender, you can write:</li>
					
					<div class="mp-code-example">
						&lt;select&gt;<br/>
						&lt;option selected&gt;Choose One&lt;/option&gt;<br/>
						&lt;option&gt;Male&lt;/option&gt;<br/>
						&lt;option&gt;Female&lt;/option&gt;<br/>
						&lt;/select&gt;
					</div>
					
					<br/>
					
					<li class="margin-bottom10pix"><strong>&lt;input /&gt;</strong> - These tags are used to receive some sort of input from the user. 
					You usually define the type of input you are trying to receive by a “type” attribute.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;ul&gt;&lt;/ul&gt;</strong> - These tags are used to start and end an unordered list, or bulleted list.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;ol&gt;&lt;/ol&gt;</strong> - These tags are used to start and end an ordered list, or numbered list.</li>
					
					<li class="margin-bottom10pix"><strong>&lt;li&gt;&lt;/li&gt;</strong> - These tags go between either the &lt;ul&gt; and &lt;/ul&gt; 
					or &lt;ol&gt; and &lt;/ol&gt; tags. These are the list items for your ordered or unordered list. For example, 
					to create an unordered list of the four Beatles, we can write:</li>
					
					<div class="mp-code-example">
						&lt;ul&gt;<br/>
						&lt;li&gt;John Lennon&lt;/li&gt;<br/>
						&lt;li&gt;Paul Mccartney&lt;/li&gt;<br/>
						&lt;li&gt;George Harrison&lt;/li&gt;<br/>
						&lt;li&gt;Ringo Starr&lt;/li&gt;<br/>
						&lt;/ul&gt;
					</div>
					
					<br />
				</ul>
				<p>
				The number of tags you can use in HTML is nearly endless. However, 
				a lot of the time you can get the same effect a tag may have by simply using CSS. For more tags, please visit 
				<a href="http://www.w3schools.com/tags/" target="_blank">W3Schools</a>.
				</p>


				<p>
					Don't know what HTML is? <a href="<?php echo $siteurl ?>/php/lessons/html.php" title="HTML">Click here to learn about how to write in HTML.</a>
				</p>
		</div>
	</div>
</div>

<?php include("../masters/footer.php"); ?>