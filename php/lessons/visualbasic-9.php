<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 9</h1>
							<h2>Learn about Conditional Logic in <span class="redcolor">Visual Basic</span>.</h2>
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
				Conditional logic is the process of making decisions based on user input. This is a vital part of programming to understand. 
				In fact, some may even argue that Conditional logic is all that programming is. 
				Conditional logic always has some Boolean expression that can come to two possible conclusions: True or False. 
				Your code then executes based on the value of this Boolean expression.
			</p>
			<p>
				Before we discuss conditional logic at it's full potential, you must first understand the operators to use. Here are some of the operators in Visual Basic:
			</p>
			<ul>
				<li><strong>= -</strong> Equals</li>
				<li><strong>&lt;&gt; -</strong> Does not equal</li>
				<li><strong>&lt; -</strong> Is less than</li>
				<li><strong>&gt; -</strong> Is greater than</li>
				<li><strong>&lt;= -</strong> Is less than or equal to</li>
				<li><strong>&gt;= -</strong> Is greater than or equal to</li>
				<li><strong>And -</strong> Used to allow two or more conditions, where both must be True</li>
				
				<li><strong>AndAlso -</strong> Used to allow two or more conditions, where both must be True. This one does not check the second condition if the first is false. 
				This is helpful if the second condition may have an error due to the fact that the first one is false.</li>
				
				<li><strong>Or -</strong> Used to allow two or more conditions, where either can be True</li>
				
				<li><strong>OrElse -</strong> Used to allow two or more conditions, where either can be True. This one does not check the second condition if the first is true. 
				This is helpful if the second condition may have an error due to the fact that the first one is true.</li>
				
			</ul>
			<p>
				<strong>NOTE: </strong>You can use these operators for both numbers AND strings. 
				Numbers reference the values (greater than, less than), while strings go by alphabetical order, with A being the least and Z being the most.
			</p>
			<p>
				Once you understand these, we can learn about the greatest Conditional logic there is. The "If" statement is probably the most used statement in coding to date. 
				It has a simple structure, yet is capable of the most complex conditional logic. For example:
			</p>
			<div class="mp-code-example">
				If UserEntry > 10 Then<br/>
					&nbsp;&nbsp;'Do Something<br/>
				ElseIf UserEntry = 17 Then<br/>
					&nbsp;&nbsp;'Do something else.<br/>
				Else<br/>
					&nbsp;&nbsp;'Do something entirely different.<br/>
				End If
			</div>
			<p>
				<strong>NOTE: </strong>In Visual Basic, only one condition will run in an if statement. 
				By this, I mean that even if UserEntry is 17 in the example, the second condition will never run because 17 is greater than 10. 
				It is vital to keep this in mind when using Visual Basic.
			</p>
			<p>
				When using an If statement, it is not required to have any ElseIf or Else statements. In Visual Basic, the only requirements are the "If," the condition, the "Then," and the "End If."
			</p>
			<p>
				Next we will learn about another type of Conditional logic: The "Select Case" Statement.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-8.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-10.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>