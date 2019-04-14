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
							<h2><span class="redcolor">Fahrenheit to Celsius</span>.</h2>
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
				package edu.iuk.temperatures;<br/>
				<br/>
				import java.util.Scanner;<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Temperatures {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int Fahr;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double Cels;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner Fahrenheit= new Scanner (System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(“Please enter the degree in Fahrenheit. (integers only)”);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Receive user input of fahrenheit<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Fahr=Fahrenheit.nextInt();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Cels = (0.55555555) * (Fahr-32);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “the degree in Celsius is ” + Cels + ” degrees”);<br/>
				<br/>
				&nbsp;&nbsp;}
				<br/>
				}
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>