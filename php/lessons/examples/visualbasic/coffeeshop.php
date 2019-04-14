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
							<h2><span class="redcolor">Coffee Shop</span>.</h2>
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
				Public Class JacobMorris<br/>
				<br/>
				&nbsp;&nbsp;Private Sub btnCompute_Click(sender As Object, e As EventArgs) Handles btnCompute.Click<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intCups As Integer = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intCaffeine As Integer = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intHours As Integer = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intCaffeineTemp As Integer = 0<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;If IsNumeric(txtCups.Text) Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCups = txtCups.Text<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCaffeine = intCups * 130<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCaffeineTemp = intCaffeine<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCaffeineTemp = intCaffeineTemp – (intCaffeineTemp * 0.13)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intHours = intHours + 1<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loop Until intCaffeineTemp <= 65<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;txtHours.Text = intHours<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;‘Computes the number of hours it will take until the body has 65mg or less of caffeine.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCaffeineTemp = intCaffeine<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intHours = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;‘resets variables to prepare for the next computation.<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCaffeineTemp = intCaffeineTemp – (intCaffeineTemp * 0.13)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intHours = intHours + 1<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loop Until intHours = 24<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;txtDayone.Text = intCaffeineTemp<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;‘Computes the amount of caffeine in the body 24 hours after consumption.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCaffeineTemp = intCaffeine<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intHours = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;‘resets variables to prepare for the next computation.<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCaffeineTemp = 130 + (intCaffeineTemp – (intCaffeineTemp * 0.13))<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intHours = intHours + 1<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loop Until intHours = 24<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;txtEachhour.Text = intCaffeineTemp<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;‘Computes the amount of caffeine in the body after 24 hours if the user drinks a cup every hour.<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(“Please enter a valid number of cups.”)<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;‘Makes sure the user entered a valid number of cups<br/>
				<br/>
				&nbsp;&nbsp;End Sub<br/>
				<br/>
				End Class
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/visualbasic.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>