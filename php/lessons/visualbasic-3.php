<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 3</h1>
							<h2>Using ArrayLists in <span class="redcolor">Visual Basic</span>.</h2>
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
				The ArrayList is a type of collection. These allow dynamic resizing. ArrayLists are actual objects. Therefore, we must define them like this:
			</p>
			<div class="mp-code-example">
				Dim listName As New ArrayList()
			</div>
			<p>
				ArrayLists are not strongly typed. This means (although not recommended) you can put different datatypes into a single ArrayList. For example:
			</p>
			<div class="mp-code-example">
				listName.Add("one")<br/>
				listName.Add(4)<br/>
				listName.Add(5.04)<br/>
			</div>
			<p>
				<strong>NOTE: </strong>Again, using ArrayLists in this way is bad programming and is NOT recommended. Only do this if you absolutely have to.
			</p>
			<p>
				To retrieve a value from an ArrayList, we use another variable. For example:
			</p>
			<div class="mp-code-example">
				Dim FirstItem As String = CType(listName(0), String)
			</div>
			<p>
				In this scenario, we set the value of the string FirstItem as the value of the first value (0) in the ArrayList listName. 
				When using an ArrayList in this way, we must use the CType function to ensure the value of the object is the correct type of object. 
				The CType function takes a value and converts it to the specified variable type (in this case a String).
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-2.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-4.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>