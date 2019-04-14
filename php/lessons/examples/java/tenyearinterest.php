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
							<h2><span class="redcolor">Ten Year Interest Example</span>.</h2>
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
				package edu.iuk.savings;<br/>
				<br/>
				import java.util.Scanner;<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Savings {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double dollars;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double rate;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double total;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner cash = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(“Please enter amount of cash deposited into account. (digits only)”);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive user cash deposit amount<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;dollars= cash.nextDouble();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner percent = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(“Please enter the annual rate (in percent) of your account. (digits only)”);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive user account rate<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;rate = percent.nextDouble();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;rate = rate/100;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//puts rate into a decimal<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;total = Math.pow(1+ rate, 10)* dollars;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//discovers total in the account<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;total = (double)Math.round(total * 100) / 100;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//rounds the total in the account to two decimal places<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “The amount in this account after ten years of interest is $” + total);<br/>
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