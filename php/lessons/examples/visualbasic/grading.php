<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Visual Basic: Testing and Grading</h1>
							<h2><span class="redcolor">Grading Code</span>.</h2>
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
				Public Class frmAnswers
				<br/>
				&nbsp;&nbsp;Private Sub frmAnswers_Load(sender As Object, e As EventArgs) Handles MyBase.Load<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim strUser() As String = {frmExam.txt1.Text, frmExam.txt2.Text, frmExam.txt3.Text, frmExam.txt4.Text, 
				frmExam.txt5.Text, frmExam.txt6.Text, frmExam.txt7.Text, frmExam.txt8.Text, frmExam.txt9.Text, 
				frmExam.txt10.Text, frmExam.txt11.Text, frmExam.txt12.Text, frmExam.txt13.Text, frmExam.txt14.Text, 
				frmExam.txt15.Text, frmExam.txt16.Text, frmExam.txt17.Text, frmExam.txt18.Text, frmExam.txt19.Text, frmExam.txt20.Text}<br/>
				<br/>
        			&nbsp;&nbsp;&nbsp;&nbsp;Dim strAnswers() As String = {"B", "D", "A", "A", "C", "A", "B", "A", "C", "D", "B", "C", "D", "A", "D", "C", "C", "B", "D", "A"}<br/>
        			&nbsp;&nbsp;&nbsp;&nbsp;Dim strCorrect(19) As String<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intCorrect As Integer<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intWrong As Integer<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;For intQuestion = 0 To 19<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If strUser(intQuestion) = strAnswers(intQuestion) Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCorrect(intQuestion) = "Correct"<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intCorrect = intCorrect + 1<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCorrect(intQuestion) = "Incorrect"<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select Case strUser(intQuestion)<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case "A"<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case "B"<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case "C"<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case "D"<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Case Else<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intWrong = intWrong + 1<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End Select<br/>
				<br/>
        			&nbsp;&nbsp;&nbsp;&nbsp;Next<br/>
        			<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;If intWrong > 0 Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show("Please enter valid answers. Remember, answers must be UPPERCASE letters with NO period.")<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Me.Close()<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl1.Text = strCorrect(0)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl2.Text = strCorrect(1)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl3.Text = strCorrect(2)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl4.Text = strCorrect(3)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl5.Text = strCorrect(4)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl6.Text = strCorrect(5)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl7.Text = strCorrect(6)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl8.Text = strCorrect(7)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl9.Text = strCorrect(8)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl10.Text = strCorrect(9)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl11.Text = strCorrect(10)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl12.Text = strCorrect(11)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl13.Text = strCorrect(12)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl14.Text = strCorrect(13)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl15.Text = strCorrect(14)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl16.Text = strCorrect(15)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl17.Text = strCorrect(16)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl18.Text = strCorrect(17)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl19.Text = strCorrect(18)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lbl20.Text = strCorrect(19)<br/>
				<br/>
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lblScore.Text = "You scored " & intCorrect & " out of 20!"<br/>
				<br/>
            			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If intCorrect > 14 Then<br/>
            			<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lblPass.Text = "You Passed, Congratulations!"<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lblPass.Text = "Sorry, you failed."<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
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