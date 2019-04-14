<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Visual Basic: Test and Grading</h1>
							<h2><span class="redcolor">Test Code</span>.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
		<a href="<?php echo $siteurl ?>/php/lessons/visualbasic.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
			<div class="mp-code-example">
				Public Class frmExam<br/>
				<br/>
				&nbsp;&nbsp;Private Sub btnExit_Click(sender As Object, e As EventArgs) Handles btnExit.Click<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;End<br/>
				&nbsp;&nbsp;End Sub<br/>
				<br/>
				&nbsp;&nbsp;Private Sub btnClear_Click(sender As Object, e As EventArgs) Handles btnClear.Click<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt1.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt2.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt3.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt4.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt5.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt6.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt7.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt8.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt9.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt10.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt11.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt12.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt13.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt14.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt15.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt16.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt17.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt18.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt19.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txt20.Clear()<br/>
				<br/>
				&nbsp;&nbsp;End Sub<br/>
				<br/>
				<br/>
				&nbsp;&nbsp;Private Sub btnScore_Click(sender As Object, e As EventArgs) Handles btnScore.Click<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;frmAnswers.Show()<br/>
				&nbsp;&nbsp;End Sub<br/>
				End Class
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/visualbasic.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>