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
							<h2><span class="redcolor">Simple Division Example</span>.</h2>
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
				package edu.iuk.division;<br/>
				<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Division {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Declare Variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int firstNumber;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int secondNumber;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int Module;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//retrieve first number from user<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;firstNumber = Integer.parseInt(JOptionPane.showInputDialog(“Please enter the first number.”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//retrieve second number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;secondNumber = Integer.parseInt(JOptionPane.showInputDialog(“Please enter the second number.”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//find leftover integers after dividing<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Module =firstNumber % secondNumber;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//if perfect division<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if (Module == 0){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “the number is evenly divisible.”);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “the number is not evenly divisible.”);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
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