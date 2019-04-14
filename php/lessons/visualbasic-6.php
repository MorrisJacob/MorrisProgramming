<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 6</h1>
							<h2>Using Internal Functions in <span class="redcolor">Visual Basic</span>.</h2>
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
				This next example, taken from the book "Beginning ASP.NET 3.5 in VB 2008," perfectly shows the manipulation techniques found in VB.NET.
			</p>
			<p>
				<strong>NOTE: </strong>In Visual Basic, we can write comments by adding a single quote ("'") to the beginning of the line.
			</p>
			<div class="mp-code-example">
				Dim MyString As String = "This is a test string&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<br/>
				MyString = MyString.Trim()<br/>
				'the Trim function removes the outer spaces.<br/>
				'MyString now has the value "This is a test string"<br/>
				MyString = MyString.Substring(0,4)<br/>
				'the Substring function takes a smaller string out of the whole string.<br/>
				'MyString has the value "This"<br/>
				MyString = MyString.ToUpper()<br/>
				'the ToUpper function capitalizes all of the letters in the string.<br/>
				'MyString has the value "THIS"<br/>
				MyString = MyString.Replace("IS","AT")<br/>
				'the Replace function replaces all instances of one string with another.<br/>
				'MyString has the value "THAT"<br/>
				Dim Length As Integer = MyString.Length<br/>
				'the Length function returns the number of characters in the string.<br/>
				'Length has the value 4.
			</div>
			<p>
				<strong>NOTE: </strong>The Substring function has two arguments. The first being the first index of the substring, and the second beiong the length.
			</p>
			<p>
				<strong>NOTE: </strong>The Replace function has two arguments. The first being the value to replace, and the second being the value to replace it with.
			</p>
			<p>
				Another function worth mentioning is the IndexOf(arg). This function accepts one argument and returns the first position of that argument in the string. 
				Keep in mind that the index counts the first position as "0", similar to the array.
			</p>
			<p>
				Functions can also be used one directly after another on the same object. For example:
			</p>
			<div class="mp-code-example">
				Dim strExample As String = "hello&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<br/>
				strExample.Trim().Substring(0,2).ToUpper().Replace("HE","SHE")
			</div>
			<p>
				If you followed that example along, the final product is "SHE." Oddly enough, you can also use these functions on a string before even defining it to a variable. For example:
			</p>
			<div class="mp-code-example">
				Dim strExample As String = "hello".Replace("he","she")
			</div>
			<p>
				This will set the variable strExample to "shello"
			</p>
			<p>
				Here are some other popular functions:
			</p>
			<ul>
				<li><strong>.Length() -</strong> Returns the number of characters in the string as an integer.</li>
				<li><strong>.ToUpper() -</strong> Returns the string in all uppercase.</li>
				<li><strong>.ToLower() -</strong> Returns the string in all lowercase.</li>
				<li><strong>.TrimStart() -</strong> Returns the string after trimming all of the white space at the start of the string.</li>
				<li><strong>.TrimEnd() -</strong> Returns the string after trimming all of the white space at the end of the string.</li>
				<li><strong>.Trim() -</strong> Returns the string after trimming all of the white space at both the start and end of the string</li>
				
				<li><strong>.PadLeft(int StringSize, String to use for padding) -</strong> Returns a string after adding padding to the left of your string to force it to a certain length. For example:
					<div class="mp-code-example">
						Dim hiString As String = "hi".PadLeft(8, "#")
					</div>
					<p>
						hiString will be set with a value of "######hi"
					</p>
				</li>
				<li><strong>.PadRight(int StringSize, String to use for padding) -</strong> Returns a string after adding padding to the right of your string to force it to a certain length.</li>
				<li><strong>.Insert(int Index, String to insert) -</strong> Inserts a string into an existing string at the set index.</li>
				<li><strong>.Remove(int index to start, int number of spaces) -</strong> Removes the substring from the specified start index to the specified number of spaces thereafter.</li>
				<li><strong>.StartsWith(String to check) -</strong> Checks if the specified string to check is at the beginning. Returns a Boolean (true/false).</li>
				<li><strong>.EndsWith(String to check) -</strong> Checks if the specified string to check is at the end. Returns a Boolean (true/false).</li>
				<li><strong>.LastIndexOf -</strong> Returns the index (integer) of what you are looking for when it last appears.</li>
				
				<li><strong>.Split(String to split by) -</strong> Splits a string up by the argument, and puts the substrings into an array. For example:
					<div class="mp-code-example">
						Dim ArrayName() as String = "hi, how is it going?".Split("i")
					</div>
					<p>
						ArrayName() now has these values:
					</p>
					<ul>
						<li>ArrayName(0) = "h"</li>
						<li>ArrayName(1) = ", how "</li>
						<li>ArrayName(2) = "s "</li>
						<li>ArrayName(3) = "t go"</li>
						<li>ArrayName(4) = "ng?"</li>
					</ul>
				</li>
				
				<li><strong>.Join(String to seperate substrings with) -</strong> The argument in this function is optional. This function does the opposite of .Split(). 
				For example, we can use the following code to reverse the above example:
					<div class="mp-code-example">
						ArrayName.Join("i")
					</div>
				</li>
			</ul>
			<p>
				Next, we will discuss the DateTime and TimeSpan objects in Visual Basic.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-5.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-7.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>