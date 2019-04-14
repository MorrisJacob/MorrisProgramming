<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 12</h1>
							<h2>Learn about Methods in <span class="redcolor">Visual Basic</span>.</h2>
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
				Methods are an easy way to organize your code. Methods can also be helpful because you may have a section of code that needs to be used more than once, depending on a user's action. 
				Methods, along with functions, are essential for object-oriented programming.
			</p>
			<p>
				In Visual Basic there are two types of methods: subroutines and functions. The difference is very easy to understand. 
				When you call a function, it will return a value to you. However, when you call a subroutine, it will only execute code, and no value will come back.
			</p>
			<p>
				For example, you may have two Methods. One may be called "getFullName" and one could be called "setFullName." 
				getFullName would return to you your full name. However, setFullName would more likely allow you to set your name. 
				Set doesn't need to return your name, only run code to set your name. However, getFullName is REQUIRED to return a value (your name). Let's look at some examples:
			</p>
			<div class="mp-code-example">
				Private Function getFullName() As String<br/>
				&nbsp;&nbsp;Dim FullName As String = "Jacob A. Morris"<br/>
				&nbsp;&nbsp;Return FullName<br/>
				End Function
			</div>
			<p>
				If I were to call this Function from another Method, it would return my full name as the value. 
				Notice that "Private" means you cannot access this function from another Class. The "As String" Is declaring what type of value this function will return. 
				You use the word "Return" followed by the value (or variable) to actually return the value. 
				Lastly, you must show that the function has ended in Visual Basic by writing "End Function." Now let's take a look at a subroutine.
			</p>
			<div class="mp-code-example">
				Private Sub setFullName(ByVal Name As String)<br/>
				&nbsp;&nbsp;Dim FullName As String<br/>
				&nbsp;&nbsp;FullName = Name<br/>
				End Sub 
			</div>
			<p>
				Notice in this example that we use the word "Sub" rather than "Function." 
				This is to show that it is a subroutine. We also use the corresponding "End Sub." 
				Notice that there is no Return, as well as no type to return. Inside of the parentheses is a variable that I can pass to the subroutine. 
				These are called Parameters, and we will discuss them next.
			</p>
			<p>
				You can call a method by writing the method's name, followed by parentheses. If the method takes a parameter, you must give the parameter, as well. For example:
			</p>
			<div class="mp-code-example">
				setFullName("Jacob Morris")
			</div>
			<p>
				This would set the FullName variable to "Jacob Morris" by calling the subroutine setFullName. Here is how you could call the function.
			</p>
			<div class="mp-code-example">
				Dim strName As String<br/>
				strName = getFullName()
			</div>
			<p>
				This would set the strName variable to "Jacob A. Morris," because that is what the function would return. 
				Notice that just because a function returns a value does not mean you must set a variable to that value. For example, I could call the function like this:
			</p>
			<div class="mp-code-example">
				getFullName()
			</div>
			<p>
				Although it returned my name, I don't necessarily have to set a variable to my name, or even use it in any way.
			</p>
			<p>
				Next, we will learn about Parameters and Method Overloading.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-11.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-13.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>