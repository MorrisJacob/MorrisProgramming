<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 11</h1>
							<h2>Learn about Loops in <span class="redcolor">Visual Basic</span>.</h2>
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
				Loops are one of the most helpful things you will find when programming. 
				Loops allow you to run a block of code as many times as you would like. Visual Basic has three different types of loops. 
				All of these loops have specific times to use them. However, you will probably use one more than the others. The loops found in Visual Basic are:
			</p>
			<ul>
				<li><strong>For Next Loop -</strong> Allows you to loop a block of code a set number of times.</li>
				<li><strong>For Each Loop -</strong> Allows you to loop a block of code a number of times dependent upon the number of items in a collection of data.</li>
				<li><strong>Do Loop -</strong> Allows you to loop a block of code a number of times until a certain condition is met.</li>
			</ul>
			<p>
				Now that you know the three types of loops, let's take a closer look at each of them.
			</p>
			<h2 style='text-align:center;'>For Next Loop</h2>
			<p>
				You will see the For loop in many programming languages throughout your experience. This allows you to repeat a block of code a set number of times. An example of the For Next loop may loop something like this:
			</p>
			<div class="mp-code-example">
				For intCount As Integer = 1 To 10<br/>
				&nbsp;&nbsp;'Code here<br/>
				Next
			</div>
			<p>
				In this code, the intCount variable will be incremented by one each time the code is ran. Once intCount is equal to 10, the loop will stop. 
				In some scenarios, you may want to increase the counter two at a time instead of one. If this is the case, you can use this:
			</p>
			<div class="mp-code-example">
				For intCount As Integer = 1 To 10 Step 2<br/><br/>
				&nbsp;&nbsp;'Code here<br/>
				Next
			</div>
			<p>
				As you would expect, this code now only runs 5 times, because the variable intCount is being incremented by two.
			</p>
			<p>
				In many cases you may want a For Next loop to repeat a number of times that is dependent upon something else, such as the number of elements in an array. In this case, we can do something like this:
			</p>
			<div class="mp-code-example">
				Dim ArrayOfIntegers() = {1, 2, 3, 5, 8, 19, 4, 2}<br/>
				For intCount As Integer = 0 To ArrayOfIntegers.Length() - 1<br/>
				&nbsp;&nbsp;'Code here<br/>
				Next
			</div>
			<p>
				Notice that in this example, I used the function Length() to obtain the number of elements in the array. I also subtracted one because my counter, intCount, starts at zero, not one.
			</p>
			<p>
				Next, we will learn about the For Each loop!
			</p>
			<h2 style='text-align:center;'>For Each Loop</h2>
			<p>
				This is a common loop used in Visual Basic. This loop makes your life much easier for scenarios like the previous example, because it allows you to loop through certain types of collection variables. 
				With this kind of loop, you can create a variable that represents the type of variable you are looping through. 
				This removes the potentially unneeded counter. For example, we could have used a For Each loop for the example above like so:
			</p>
			<div class="mp-code-example">
				Dim ArrayOfIntegers() = {1, 2, 3, 5, 8, 19, 4, 2}<br/>
				For Each CurrentInteger As Integer in ArrayOfIntegers<br/>
				&nbsp;&nbsp;'Code here<br/>
				Next
			</div>
			<p>
				Using this type of loop, I can now use the variable "CurrentInteger" to work with the integers in my array as they are being looped. 
				In this example, CurrentInteger will equal 1 through the first loop, 2 through the second, 3 through the third, 5 through the fourth, 8 through the fifth, and so on. 
				However, if I tried using a different variable type for CurrentInteger, such as a String, it would cause an error. 
				Therefore, the variable type you are initializing must be the same variable type as the collection set (in this case, the array). 
			</p>
			<p>
				<strong>NOTE: </strong>Although this loop type may seem like it should be used at all times for collection types, it has one flaw. 
				In a For Each loop, you CANNOT change the values of the variables in the collection as you loop through them. However, this is possible in a For Next loop.
			</p>
			<p>
				Lastly, we will discuss the Do loop.
			</p>
			<h2 style='text-align:center;'>Do Loop</h2>
			<p>
				The Do Loop is helpful when you want a loop to continue until some condition is met. Most of the time, you want the loop to continue until some condition returns false. Here is an example of a Do loop:
			</p>
			<div class="mp-code-example">
				Dim intCount as Integer = 1<br/>
				Do<br/>
				&nbsp;&nbsp;intCount += 1<br/>
				Loop While intCount < 6
			</div>
			<p>
				Notice that When the loop starts, intCount is equal to 0. However, the code written will add one to intCount each loop. 
				This loop will continue until intCount is greater than or equal to 6. Therefore, this code will run 5 times. 
				This is written using the "While" keyword. However, "Until" can also be used, like so:
			</p>
			<div class="mp-code-example">
				Dim intCount as Integer = 1<br/>
				Do<br/>
				&nbsp;&nbsp;intCount += 1<br/>
				Loop Until intCount >= 6
			</div>
			<p>
				This code does the exact same thing. However, the code is checking for the condition to be True rather than False. 
				Finally, you can also add the "While" or "Until" section of the Do loop to the top, like so:
			</p>
			<div class="mp-code-example">
				Dim intCount as Integer = 1<br/>
				Do While intCount < 6<br/>
				&nbsp;&nbsp;intCount += 1<br/>
				Loop
			</div>
			<p>
				In this example, the code will run the same amount of times. However, this can be helpful in scenarios where the condition was met to begin with. 
				For example, if intCount was initially set to 10, this loop will never run. However, with While at the bottom, this loop would have ran once. 
				Keep this in mind when using loops.
			</p>
			<p>
				<strong>NOTE: </strong>One final thing to remember about loops is that you can leave any loop at any time. 
				If your loop needs to end if a specific condition is met, you can exit a For loop or Do loop by using Exit For or Exit Do, respectively.
			</p>
			<p>
				Now that we have covered the three types of loops in Visual Basic, we can move on to Methods.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-10.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-12.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>