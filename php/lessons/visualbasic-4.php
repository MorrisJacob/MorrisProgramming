<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 4</h1>
							<h2>Using Mathematical Functions in <span class="redcolor">Visual Basic</span>.</h2>
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
				In Visual Basic, you can use all of the normal mathematical symbols to perform mathematical functions. For example:
			</p>
			<ul>
				<li><strong>+ -</strong> Used for addition, like 1+1=2.</li>
				<li><strong>- -</strong> Used for subtraction, like 5-3=2.</li>
				<li><strong>* -</strong> Used for multiplication, like 3*2=6</li>
				<li><strong>/ -</strong> Used for division, like 5/2=2.5</li>
				<li><strong>MOD -</strong> This one is a bit stranger. This gets the remainder after an integer division. For example, 7 MOD 3 = 1, or 19 MOD 5 = 4.</li>
			</ul>
			<p>
				<strong>NOTE: </strong>When using the ampersand (&) to concatenate two variables, VB will automatically attempt to convert both variables to strings.
			</p>
			<p>
				When doing mathematical equations, VB has a few shortcuts. For example, rather than writing:
			</p>
			<div class="mp-code-example">
				intVariable = intVariable + 10
			</div>
			<p>
				We can simply write:
			</p>
			<div class="mp-code-example">
				intVariable += 10
			</div>
			<p>
				Other math operations include:
			</p>
			<ul>
				<li><strong>Math.Sqrt(number) -</strong> Returns the square root of the number within the parentheses. </li>
				<li><strong>Math.Round(number to round, number of decimal places) -</strong> Rounds the number to the specified number of decimal places.</li>
				<li><strong>Math.Abs(number) -</strong> Returns the absolute value of the number within the parentheses.</li>
				<li><strong>Math.Pi -</strong> Returns the number Pi.</li>
			</ul>
			<p>
				There are also ways to convert strings to integers, or integers to strings. We will discuss conversions on the next page.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-3.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-5.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>