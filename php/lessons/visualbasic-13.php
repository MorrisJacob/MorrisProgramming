<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 13</h1>
							<h2>Learn about Parameters and Method Overloading in <span class="redcolor">Visual Basic</span>.</h2>
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
				Parameters allow you to pass values to methods. In Visual Basic, it is common convention to always start a parameter off with a lowercase letter. There are two ways to pass parameters: ByVal and ByRef.
			</p>
			<ul>
				<li>
					<strong>ByVal -</strong> By sending a variable ByVal, or by Value, you are only sending the value rather than the variable. 
					In other words, changing the value of the variable in the method called will not affect the value of the variable once the method has finished executing. 
					This is the default type of parameter.
				</li>
				<li>
					<strong>ByRef -</strong> By sending a variable ByRef, or by Reference, you are referencing the variable in the first method, not the value. 
					In other words, changing the value of the variable in the method called will affect the value of the variable.
				</li>
			</ul>
			<p>
				Here is an example of how you may pass a string and an Integer to a function which returns a string:
			</p>
			<div class="mp-code-example">
				Private Function MyFunction(ByVal stringname As String, intnum As Integer) As String<br/>
					&nbsp;&nbsp;Return stringname & intnum.ToString()<br/>
				End Function
			</div>
			<p>
				<strong>NOTE: </strong>Because I did not define the variable "intnum" as byVal or ByRef, Visual Basic will set it to the default, which is ByVal.
			</p>
			<p>
				To call this function, we can do the following:
			</p>
			<div class="mp-code-example">
				Dim strExample As String<br/>
				strExample = MyFunction("name", 4)
			</div>
			<p>
				In this example, strExample will end with a value of "name4." Next, we will discuss method overloading.
			</p>
			<h2 style="text-align:center;">Method Overloading</h2>
			<p>
				Method overloading is creating multiple methods with the same name, but accepting different types of parameters. 
				One good example of a method that has been overloaded is the ToString() Function. This method can be used on nearly any object, yet they all send different parameters.
			</p>
			<p>
				This may seem like bad programming. However, there are some scenarios where this can end up being very helpful. 
				For example, if you are accepting a user's input of their age in an input box, the user may enter a number, such as 24. 
				They may also enter a string, such as "Twenty-Four." Using method overloading, you can use the same method name for both of these. Here is an example:
			</p>
			<div class="mp-code-example">
				Private Overloads Sub SetUserAge(ByVal age As String)<br/>
				&nbsp;&nbsp;'Do something<br/>
				End Sub<br/>
				<br/>
				Private Overloads Sub SetUserAge(ByVal age As Integer)<br/>
				&nbsp;&nbsp;'Do something<br/>
				End Sub
			</div>
			<p>
				By doing this, I can now send a method named "SetUserAge" either a String or an Integer. 
				Notice that in Visual Basic you should use the term "Overloads" in your method to show that you are overloading that method. 
				Obviously, you cannot overload a method with the same type and number of parameters. By doing this, Visual Basic will not know which method you are referring to.
			</p>
			<p>
				I hope you have enjoyed this Visual Basic tutorial. 
				If you have any questions about any of this, please do not hesitate to email me at <a href="mailto:jacob@morrisprogramming" target="_top">jacob@morrisprogramming.com.</a>
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-12.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>