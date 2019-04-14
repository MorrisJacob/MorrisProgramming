<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 2</h1>
							<h2>Using Arrays in <span class="redcolor">Visual Basic</span>.</h2>
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
				Arrays are one variable that can carry a series of one datatype. To declare an array we can simply use this formatting:
			</p>
			<div class="mp-code-example">
				Dim ArrayName() As ArrayType = {1, 2, 3, 4, 5}
			</div>
			<p>
				If we know the number of elements entering the array, but not the values of the elements themselves, we can declare an array without setting the values. Here is an example of an array of 3 strings without values.
			</p>
			<div class="mp-code-example">
				Dim ArrayStrings(3) As String
			</div>
			<p>
				Some arrays are more than one-dimensional. By this, I mean they are not simply a line of elements. 
				If you are defining a two-dimensional array, you must declare the values regarding BOTH dimensions of the array. Here is an example of a two-dimensional array of Integers:
			</p>
			<div class="mp-code-example">
				Dim intArray(,) As Integer = {{1,2},{3,4},{5,6},{7,8}}
			</div>
			<div class="mp-right-table">
				<table>
					<tbody>
						<tr>
							<td>
								1 <sup>(0,0)</sup>
							</td>
							<td>
								2 <sup>(0,1)</sup>
							</td>
						</tr>
						<tr>
							<td>
								3 <sup>(1,0)</sup>
							</td>
							<td>
								4 <sup>(1,1)</sup>
							</td>
						</tr>
						<tr>
							<td>
								5 <sup>(2,0)</sup>
							</td>
							<td>
								6 <sup>(2,1)</sup>
							</td>
						</tr>
						<tr>
							<td>
								7 <sup>(3,0)</sup>
							</td>
							<td>
								8 <sup>(3,1)</sup>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<p>
				This code would create the array to the right. When specifying a position in a two-dimensional array, the first number represents the row, while the second number represents the column. 
				The comma is to show that this is a two-dimensional array. However, it does not define how many objects are in the array.
			</p>
			<p>
				Array retrieval and storage is always 0-based. Therefore, using our above example, the following code would result in Example having a value of 2.
			</p>
			<div class="mp-code-example">
				Dim Example as Integer<br/>
				Example = intArray(0,1)
			</div>
			<p>
				If you need to resize an array in VB, you use the ReDim word. Here is an example of this:
			</p>
			<div class="mp-code-example">
				Dim ArrayNumbers(10,10) As Integer<br/>
				ReDim ArrayNumbers(20,20)
			</div>
			<p>
				However, this formats the array, deleting all of the values. To fix this, we use “Preserve” like this:
			</p>
			<div class="mp-code-example">
				ReDim Preserve ArrayNumbers(10,20)
			</div>
			<p>
				<strong>NOTE:</strong> When using Preserve, you cannot ReDim the first number (the row). This will create a runtime error.
			</p>
			<p>
				As you’d probably guess, Arrays are not very useful unless you know the number of elements beforehand. Because of this, many people prefer ArrayLists, which is next.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-1.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-3.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>