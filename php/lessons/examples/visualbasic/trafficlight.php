<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Visual Basic</h1>
							<h2><span class="redcolor">Traffic Light</span>.</h2>
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
				Public Class frmTraffic<br/>
					&nbsp;&nbsp;Private Sub txtGreen_Enter(sender As Object, e As EventArgs) Handles txtGreen.Enter<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;txtGreen.BackColor = Color.Green<br/>
					&nbsp;&nbsp;End Sub<br/>
					<br/>
					&nbsp;&nbsp;Private Sub txtGreen_Leave(sender As Object, e As EventArgs) Handles txtGreen.Leave<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;txtGreen.BackColor = Color.Gray<br/>
					&nbsp;&nbsp;End Sub<br/>
					<br/>
					&nbsp;&nbsp;Private Sub txtYellow_Leave(sender As Object, e As EventArgs) Handles txtYellow.Leave<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;txtYellow.BackColor = Color.Gray<br/>
					&nbsp;&nbsp;End Sub<br/>
					<br/>
					&nbsp;&nbsp;Private Sub txtYellow_Enter(sender As Object, e As EventArgs) Handles txtYellow.Enter<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;txtYellow.BackColor = Color.Yellow<br/>
					&nbsp;&nbsp;End Sub<br/>
					<br/>
					&nbsp;&nbsp;Private Sub txtRed_Enter(sender As Object, e As EventArgs) Handles txtRed.Enter<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;txtRed.BackColor = Color.Red<br/>
					&nbsp;&nbsp;End Sub<br/>
					<br/>
					&nbsp;&nbsp;Private Sub txtRed_Leave(sender As Object, e As EventArgs) Handles txtRed.Leave<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;txtRed.BackColor = Color.Gray<br/>
					&nbsp;&nbsp;End Sub<br/>
				End Class
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/visualbasic.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>