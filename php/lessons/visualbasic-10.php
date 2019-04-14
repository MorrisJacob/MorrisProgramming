<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Beginning Visual Basic: Part 10</h1>
							<h2>Learn about Select Case Statements in <span class="redcolor">Visual Basic</span>.</h2>
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
				Select Case statements are not very different from If Statements. In fact, all Select Case Statements can be written using an If statement, although not as easily. For example, we could write:
			</p>
			<div class="mp-code-example">
				If UserInput = 0 Then<br/>
					&nbsp;&nbsp;'Do something.<br/>
				ElseIf UserInput = 1 Then<br/>
					&nbsp;&nbsp;'Do something else.<br/>
				ElseIf UserInput = 2 Then<br/>
					&nbsp;&nbsp;'Do something again.<br/>
				ElseIf UserInput = 3 Then<br/>
					&nbsp;&nbsp;'Do something yet again.<br/>
				Else<br/>
					&nbsp;&nbsp;'Do something one last time.<br/>
				End If
			</div>
			<p>
				However, as you can see, this can get tiring fast. Using a Select Case statement, we can make this code much less repetitive and easier to read:
			</p>
			<div class="mp-code-example">
				Select Case UserInput<br/>
				<br/>
				&nbsp;&nbsp;Case 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something.<br/>
				&nbsp;&nbsp;Case 1<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something else.<br/>
				&nbsp;&nbsp;Case 2<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something again.<br/>
				&nbsp;&nbsp;Case 3<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something yet again.<br/>
				&nbsp;&nbsp;Case Else<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something one last time.<br/>
				<br/>
				End Select
			</div>
			<p>
				The Select Case statements can compare Strings, Chars, Dates, Boolean, and any number type of object. 
				If needed, you can even have multiple condition checks (similar to the If statements "Or") by adding a comma between the values to check. For example:
			</p>
			<div class="mp-code-example">
				Select Case UserInput<br/>
				<br/>
				&nbsp;&nbsp;Case 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something.<br/>
				&nbsp;&nbsp;Case 1,2,3<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something else.<br/>
				&nbsp;&nbsp;Case Else<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;'Do something one last time.<br/>
				<br/>
				End Select
			</div>
			<p>
				Next, we will begin discussing how to use loops in VB.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-9.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/visualbasic-11.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>