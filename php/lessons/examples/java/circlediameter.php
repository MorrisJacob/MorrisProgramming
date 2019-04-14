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
							<h2><span class="redcolor">Circle Diameter and Radius Example</span>.</h2>
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
				package edu.iuk.circle;<br/>
				<br/>
				import java.util.Scanner;<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Circle {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//declare the variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double radius;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double diameter;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double area;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//build scanner<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner radi= new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(“Please enter the radius of the circle. (digits only)”);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receives the user’s radius input<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;radius = radi.nextDouble();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//finds diameter<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;diameter = radius * 2;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//finds radius<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;area = (3.14159 * radius * radius);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//display information to the user.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “The diameter of the circle is ” + diameter + “.\n\nThe area of the circle is ” + area);<br/>
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