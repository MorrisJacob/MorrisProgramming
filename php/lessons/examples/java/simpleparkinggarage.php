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
							<h2><span class="redcolor">Simple Parking Garage Example</span>.</h2>
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
				package edu.iuk.Parking;<br/>
				<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Parking {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int Hours;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double parkingCost = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Hours = Integer<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;.parseInt(JOptionPane.showInputDialog(“Please enter number of hours parked.\n If parked for a fraction of an hour, please round up.”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if (Hours <= 3) { <br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parkingCost = 2; <br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else if (Hours > 3) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parkingCost = (Hours * .5) + .5;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if (parkingCost > 10) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parkingCost = 10;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;<br/>JOptionPane.showMessageDialog(null, “You owe the parking garage $” + parkingCost + “0.\n Thank you!”);<br/>
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