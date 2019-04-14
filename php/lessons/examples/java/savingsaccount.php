<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example</h1>
							<h2><span class="redcolor">Savings Account Interest Example</span>.</h2>
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
				package edu.iuk.Interest;<br/>
				<br/>
				//imports<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Interest {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// declare variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int savingsAmount;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double currentSavings = 0.0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// get user input<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;savingsAmount = Integer<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.parseInt(JOptionPane.showInputDialog(“Please enter the amount you are going to save (monthly)”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i < 6; i++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// multiply by monthly interest rate<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;currentSavings = (currentSavings + savingsAmount) * 1.00417;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// rounds account to two decimal places<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;currentSavings = (double) Math.round(currentSavings * 100) / 100;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// output user’s account total after six months<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(“The account total after six months is $” + currentSavings);<br/>
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