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
							<h2><span class="redcolor">Average Grade</span>.</h2>
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
				Public Class frmGrade<br/>
				<br/>
				&nbsp;&nbsp;Dim intGrade(10) As Integer<br/>
				&nbsp;&nbsp;Dim intCounter As Integer = 0<br/>
				<br/>
				&nbsp;&nbsp;Private Sub btnAddGrade_Click(sender As Object, e As EventArgs) Handles btnAddGrade.Click<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;If IsNumeric(txtGradeEntry.Text) Then<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intGrade(intCounter) = txtGradeEntry.Text<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCounter = intCounter + 1<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(“Please enter a valid number.”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lblAverage.Text = “”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;txtGradeEntry.Text = “”<br/>
				&nbsp;&nbsp;End Sub
				<br/>
				&nbsp;&nbsp;Private Sub btnAverage_Click(sender As Object, e As EventArgs) Handles btnAverage.Click<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intCountemp As Integer = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intSum As Integer = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim decAverage As Decimal = 0<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;If intCounter = 0 Then<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(“Please enter at least one valid grade.”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lblAverage.Text = “”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intSum = intGrade(intCountemp) + intSum<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCountemp = intCountemp + 1<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loop Until intCountemp = intCounter<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;decAverage = intSum / intCounter<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lblAverage.Text = “The average grade is ” & decAverage<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCounter = 0<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;End Sub<br/>
				<br/>
				&nbsp;&nbsp;Private Sub txtGradeEntry_TextChanged(sender As Object, e As EventArgs) Handles txtGradeEntry.TextChanged<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lblAverage.Text = “”<br/>
				&nbsp;&nbsp;End Sub<br/>
				<br/>
				End Class
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/visualbasic.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>