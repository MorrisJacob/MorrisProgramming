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
							<h2><span class="redcolor">Simple Addition Example</span>.</h2>
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
				package edu.iuk.Addition;<br/>
				<br/>
				//import JOptionPane library<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class addition {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Declare Variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int sum = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int counter = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String number;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Do this until the user enters “*”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;while(counter == 0)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;number = (JOptionPane.showInputDialog(“Please enter a number. If all numbers have been entered, enter *”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(number.equals(“*”)){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//User entered “*”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter += 1;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Add the number to the sum<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += Integer.parseInt(number);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				&nbsp;&nbsp;&nbsp;&nbsp;}
				<br/>
				&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “The total of all numbers entered is ” + sum);<br/>
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