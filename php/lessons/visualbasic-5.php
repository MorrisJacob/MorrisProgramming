<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 5</h1>
							<h2>Using Conversions in <span class="redcolor">Visual Basic</span>.</h2>
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
				To convert a string to a number in Visual Basic, we use this:
			</p>
			<div class="mp-code-example">
				Dim MyNumber as Integer<br/>
				Dim MyString as String = "32"<br/>
				MyNumber = MyString
			</div>
			<p>
				It's as simple as that!
			</p>
			<p>
				<strong>NOTE: </strong>This can be dangerous. Some strings may not convert properly, causing a runtime error.
			</p>
			<p>
				If you find this risky, you can force safe conversions by adding "Option Explicit On to the top of your VB page.
			</p>
			<p>
				To convert correctly, we can use CType. Some other examples of CType are:
			</p>
			<ul>
				<li><strong>CStr(arg) -</strong> Converts argument to a string.</li>
				<li><strong>CInt(arg) -</strong> Converts argument to an integer.</li>
				<li><strong>CBool(arg) -</strong> Converts argument to a boolean.</li>
				<li><strong>Val(arg) -</strong> Converts argument to an integer. This one is a bit nicer because if the argument has no numeric value, it will simply return a "0" rather than an error.</li>
			</ul>
			<p>
				If you are using .NET, you can use some of the built in functions, as well. Since .NET rightly views all variables as objects, any object (or variable) has its own premade functions. 
				For example, you could convert a number to a string by using the ToString() function. Here is an example:
			</p>
			<div class="mp-code-example">
				Dim MyNumber as Integer = 4<br/>
				Dim MyString as String = ""<br/>
				MyString = MyNumber.ToString()
			</div>
			<p>
				After this code has compiled, MyString would have the value "4"
			</p>
			<p>
				Next we will continue to discuss the built in functions in VB.NET!
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-4.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-6.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>