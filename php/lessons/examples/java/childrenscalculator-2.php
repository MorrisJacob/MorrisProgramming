<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Android Development Example: Children's Calculator</h1>
							<h2><span class="redcolor">Calculator Class</span>.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
			<div class="mp-code-example">
				package com.example.childrencalculator;<br/>
				<br/>
				public class Calculator {<br/>
				<br/>
				&nbsp;&nbsp;public static int returnAmount;<br/>
				<br/>
				&nbsp;&nbsp;public static int divideInput(int currentAmount, int buttonClicked){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;returnAmount = currentAmount / buttonClicked;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return returnAmount;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static int multiplyInput(int currentAmount, int buttonClicked){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;returnAmount = currentAmount * buttonClicked;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return returnAmount;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static int addInput(int currentAmount, int buttonClicked){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;returnAmount = currentAmount + buttonClicked;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return returnAmount;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static int subtractInput(int currentAmount, int buttonClicked){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;returnAmount = currentAmount - buttonClicked;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return returnAmount;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				}
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>