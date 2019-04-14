<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 1</h1>
							<h2>Using Variables in <span class="redcolor">Visual Basic</span>.</h2>
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
				Visual Basic, like all object-oriented programming languages. has many different variable types. To declare a variable in VB, we can simply write:
			</p>
			<div class="mp-code-example">
				Dim VariableName as VariableType
			</div>
			<p>
				For example, a string named strName could be declared by writing:
			</p>
			<div class="mp-code-example">
				Dim strName as String
			</div>
			<p>
				To concatenate, or combine, two strings together we use the “&” symbol. For example:
			</p>
			<div class="mp-code-example">
				Dim strFullName = strFirst & ” ” & strSecond
			</div>
			<p>
				<strong>NOTE:</strong> We can also use the “+” symbol for concatenation. However, this is not used as often in Visual Basic because it is not as straightforward.
			</p>
			<p>
				If a line of code gets too long, you can extend it to the next line by using an underscore. For example:
			</p>
			<div class="mp-code-example">
				strString = strFirst & strSecond & _<br/>
				strThird
			</div>
			<p>
				Visual Basic has many types of variables. The most common are:
			</p>
			<ul>
				<li><strong>Byte - </strong>An integer from 0 to 255</li>
				
				<li><strong>Short - </strong>An integer from -32,768 to 32,767</li>
				
				<li><strong>Integer - </strong>An integer from -2,147,483,648 to 2,147,483,647</li>
				
				<li><strong>Long - </strong>An integer from about -9.2 X 10<sup>18</sup> to 9.2 X 10<sup>18</sup></li>
				
				<li><strong>Single - </strong>A single precision floating point number from approximately -3.4 X 10<sup>38</sup> to 3.4 X 10<sup>38</sup> (for big numbers), 
				or from -1.5 X 10<sup>-45</sup> to 1.5 X 10<sup>-45</sup> (for small, fractional numbers)</li>
							      
				<li><strong>Double - </strong>A double-precision floating point number from approximately -1.8 X 10<sup>308</sup> to 1.8 X 10<sup>308</sup> (for big numbers), 
				or from -5.0 X 10<sup>-324 to 5.0 X 10</sup>-324 (for small fractional numbers)</li>
				
				<li><strong>Decimal - </strong>A 128-bit fixed-point fractional number that supports up to 28 significant digits</li>
				
				<li><strong>Char - </strong>A single 16-bit unicode character</li>
				
				<li><strong>String - </strong>A variable-length series of unicode characters</li>
				
				<li><strong>Boolean - </strong>A true or false value</li>
				
				<li><strong>Date - </strong>Represents any date and time from 12:00:00 AM, January 1 of the year 1 in theGregorian calendar, to 11:59:59 PM, December 31 of the year 9999. 
				Time values can resolve values to 100 nanosecond increments. Internally, this datatype is stored as a 64-bit integer.</li>
				
				<li><strong>TimeSpan - </strong>Represents a period of time, such as 10 seconds or 3 days. The smallest possible interval is 1 tick (100 nanoseconds)</li>
				
				<li><strong>Object - </strong>The ultimate base class of all object types. This can hold any datatype or object.</li>
				
			</ul>
			<p>
				In Visual Basic, all variables initialize by default. For example:
			</p>
			<div class="mp-code-example">
				Dim intNumber as Integer<br/>
				Dim strString as String
			</div>
			<p>
				Once this code runs, intNumber will instantiate to 0, and strString will instantiate to an empty string, or “”. Also, you can declare some variables without a datatype is obvious. For example:
			</p>
			<div class="mp-code-example">
				Dim strayCat = “Look, a stray cat!”
			</div>
			<p>
				Because Visual Basic understands what type of variable you were trying to create, it will automatically declare this as a string.
			</p>
			<p>
				<strong>NOTE:</strong> You must be careful using this enhancement. For example:
			</p>
			<div class="mp-code-example">
				Dim numberOne = 10<br/>
				Dim numberTwo = 10.1
			</div>
			<p>
				numberOne will be declared as an integer, while numberTwo will be declared as a double. Because the two numbers are declared as different variables, your code may not work.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-2.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>