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
							<h2><span class="redcolor">Tax Multiplier Example</span>.</h2>
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
				package edu.iuk.Taxes;<br/>
				<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Taxes {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double income;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double taxes;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//gets user’s annual income<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;income= Double.parseDouble(JOptionPane.showInputDialog(“Please enter your annual income.”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if(income <= 10000){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Computes taxes if annual income is less than or equal to 10,000<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;taxes = income * .02;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else if(income >25000){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Computes taxes if annual income is greater than 25,000<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;taxes = income * .03;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Computes taxes if annual income is somewhere in between 10,000 and 25,000<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;taxes = (10000 * .02) + ((arubIncome – 10000) * .03);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//rounds taxes to two decimal places<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;taxes =(double)Math.round(taxes * 100) / 100;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//tells user how much he must pay in taxes this year<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “You are supposed to pay $” + taxes + ” this year.”);<br/>
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