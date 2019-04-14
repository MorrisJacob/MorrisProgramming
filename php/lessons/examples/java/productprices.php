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
							<h2><span class="redcolor">Product Prices</span>.</h2>
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
				package edu.iuk.MailOrder;<br/>
				<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class MailOrder {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int productNum = 1;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int productSold;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double oneCost = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double twoCost = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double threeCost = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double fourCost = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double fiveCost = 0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;while (!(productNum == 0)) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;productNum = Integer.parseInt(JOptionPane.showInputDialog(“enter product number(1-5)(0 to stop):”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (productNum != 0) {<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;productSold = Integer.parseInt(JOptionPane.showInputDialog(“Please enter number of products sold”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (productNum == 1) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oneCost += 2.98 * productSold;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (productNum == 2) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;twoCost += 4.5 * productSold;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (productNum == 3) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;threeCost += 9.98 * productSold;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (productNum == 4) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fourCost += 4.49 * productSold;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (productNum == 5) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fiveCost += 6.87 * productSold;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “product 1: ” + oneCost + “\nproduct 2: ” + twoCost + “\nproduct 3: ” +
				 threeCost + “\nproduct 4: ” + fourCost + “\nproduct 5: ” + fiveCost);
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