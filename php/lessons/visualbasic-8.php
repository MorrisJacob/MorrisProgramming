<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 8</h1>
							<h2>Continue learning about Arrays in <span class="redcolor">Visual Basic</span>.</h2>
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
				As discussed before, arrays are one variable that can hold multiple objects of the same type. 
				However, in .NET, Arrays are also viewed as their own type of object. This means they also come with their own built-in functions. 
				For example, if you want to find the number of objects in an array, you can use:
			</p>
			<div class="mp-code-example">
				Dim ExampleArray() As String = {"array", "strings", "here"}<br/>
				Dim ElementCount As Integer<br/>
				ElementCount = ExampleArray.Length
			</div>
			<p>
				In the above example, the variable "ElementCount" would end with a value of 3. 
				Although this is helpful for one-dimensional arrays, two-dimensional arrays may be a little more complex when obtaining the full structure. 
				However, we can use the GetUpperBound function for this.
			</p>
			<div class="mp-code-example">
				Dim ArrayOfNumbers() As Integer = {{2,4}, {5,3}, {5,5}}
			</div>
			<p>
				Notice that this array has three rows and two columns. If we didn't know this, we could still figure it out by using this code:
			</p>
			<div class="mp-code-example">
				Dim Rows As Integer<br/>
				Dim Columns as Integer<br/>
				Dim Rows = ArrayOfNumbers.GetUpperBound(0)<br/>
				Dim Columns = ArrayOfNumbers.GetUpperBound(1)
			</div>
			<p>
				Notice that when I use this, I pass it an integer. This integer represents the index-based dimension I am referencing. 
				For example, I am referencing the first dimension of the array to get the rows. Next, I am referencing the second dimension of the array to get the column. 
				An easy way to remember the rows versus the columns is to simply remember that a one-dimensional array is nothing but a row of objects. 
				Therefore, the second dimension will ALWAYS be adding the columns to the row.
			</p>
			<p>
				There are some other functions that are included for arrays. This includes:
			</p>
			<ul>
				<li><strong>.Length -</strong> Returns the total number of elements in all dimensions of the array as an integer.</li>
				<li><strong>.GetLowerBound -</strong> Returns the index of the first element in the array.</li>
				<li><strong>.GetUpperBound -</strong> Returns the index of the last element in the array.</li>
				<li><strong>.Clear() -</strong> Resets all of the values in the array to their initial empty values.</li>
				<li><strong>.IndexOf(Value to search for (Must be the same variable type as the array)) -</strong> Returns the index of the first matching value. Can only be used on one-dimensional arrays.</li>
				<li><strong>.LastIndexOf(Value to search for (Must be the same variable type as the array)) -</strong> Returns the index of the last matching value. Can only be used on one-dimensional arrays.</li>
				<li><strong>.Sort() -</strong> Sort a one-dimensional array. For example, integers will be sorted from least to greatest, while Strings will be sorted alphabetically.</li>
				<li><strong>.Reverse() -</strong> Sorts a one-dimensional array backwards. For example, integers will be sorted from greatest to least, while Strings will be sorted from Z to A.</li>
			</ul>
			<p>
				Now that you have a grasp on arrays, as well as how to use many of the internal functions of Visual Basic, we will start discussing Conditional logic.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-7.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-9.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>