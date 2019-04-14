<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example: Calculator</h1>
							<h2><span class="redcolor">Expression Evaluator</span>.</h2>
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
				package edu.iuk.Calculator;<br/>
				<br/>
				import javax.swing.JFrame;<br/>
				<br/>
				public class ExpressionEvaluator {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String args[]) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;CalculatorFrame calculatorFrame = new CalculatorFrame();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;calculatorFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;calculatorFrame.setSize(325, 225); // set frame size<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;calculatorFrame.setVisible(true); // display frame<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;calculatorFrame.setResizable(false);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;calculatorFrame.setTitle("Expression Evaluator");<br/>
				<br/>
				&nbsp;&nbsp;} // end main<br/>
				<br/>
				} // end class Calculator
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>