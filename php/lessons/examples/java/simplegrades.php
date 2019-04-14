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
							<h2><span class="redcolor">Simple Grades Example</span>.</h2>
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
				package edu.iuk.grades;<br/>
				<br/>
				//imports<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				public class Grades {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Declare Variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int grade;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Accept user input by using JOptionPane<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;grade = Integer.parseInt(JOptionPane.showInputDialog(“Please enter a grade.”));<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if(grade < 0 || grade >100){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//This is not a valid number for a grade<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “Invalid Grade”);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else if(grade <=100 && grade>64){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//This is a grade between 65 and 100. They Passed!<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “Pass”);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//This is any valid grade that is not between 65 and 100. Therefore it is 0-64<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//They failed :(<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;JOptionPane.showMessageDialog(null, “Fail”);<br/>
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