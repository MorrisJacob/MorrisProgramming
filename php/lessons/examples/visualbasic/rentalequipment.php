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
							<h2><span class="redcolor">Rental Equipment</span>.</h2>
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
				Public Class frmRentalCost<br/>
				<br/>
				&nbsp;&nbsp;Private Sub btnRentalRates_Click(sender As Object, e As EventArgs) Handles btnRentalRates.Click<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstPrices.Items.Clear()<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstPrices.Items.Add(“Price of Equipment Half-day Full-day”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstPrices.Items.Add(“1.Rug cleaner $16.00 $24.00”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstPrices.Items.Add(“2.Lawn mower $12.00 $18.00”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstPrices.Items.Add(“3.Paint sprayer $20.00 $30.00”)<br/>
				&nbsp;&nbsp;End Sub<br/>
				<br/>
				&nbsp;&nbsp;Private Sub btnCustomerBill_Click(sender As Object, e As EventArgs) Handles btnCustomerBill.Click<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim strItem As String = txtItem.Text<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim strDuration As String = txtDuration.Text<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim strCost As String = “Not a Valid Selection”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Dim intTotal As Integer<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstReceipt.Items.Clear()<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;If strItem = “1” Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If strDuration = “H” Or strDuration = “h” Then<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCost = “Rug cleaner: $16.00 (Half-day rental)”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intTotal = 46<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ElseIf strDuration = “F” Or strDuration = “f” Then<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCost = “Rug cleaner: $24.00 (Full-day rental)”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intTotal = 54<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(“Please enter a valid duration”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;ElseIf strItem = “2” Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If strDuration = “H” Or strDuration = “h” Then<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCost = “Lawn mower: $12.00 (Half-day rental)”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intTotal = 42<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ElseIf strDuration = “F” Or strDuration = “f” Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCost = “Lawn mower: $18.00 (Full-day rental)”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intTotal = 48<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(“Please enter a valid duration”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;ElseIf strItem = “3” Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If strDuration = “H” Or strDuration = “h” Then<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCost = “Paint sprayer: $20.00 (Half-day rental)”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intTotal = 50<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ElseIf strDuration = “F” Or strDuration = “f” Then<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strCost = “Paint sprayer: $30.00 (Full-day rental)”<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intTotal = 60<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(“Please enter a valid duration”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Else<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MessageBox.Show(“Please enter a valid item number.”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;End If<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstReceipt.Items.Add(“Receipt from Eddie’s Equipment Rental”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstReceipt.Items.Add(“”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstReceipt.Items.Add(strCost)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstReceipt.Items.Add(“Deposit: $30.00”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstReceipt.Items.Add(“”)<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;lstReceipt.Items.Add(“Total: $” & intTotal & “.00”)<br/>
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