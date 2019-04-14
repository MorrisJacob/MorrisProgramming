<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example: Bank</h1>
							<h2><span class="redcolor">Bank Account Class</span>.</h2>
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
				package edu.iuk.BankProject1;<br/>
				<br/>
				import java.io.Serializable;<br/>
				import javax.swing.JOptionPane;<br/>
				<br/>
				//Jacob Morris<br/>
				<br/>
				public abstract class Account implements Serializable {<br/>
				<br/>
				&nbsp;&nbsp;//Declare Variables<br/>
				&nbsp;&nbsp;private String accountNumber;<br/>
				&nbsp;&nbsp;protected double accountBalance;<br/>
				&nbsp;&nbsp;private Customer customer;<br/>
				&nbsp;&nbsp;protected int transCounter;<br/>
				<br/>
	  			&nbsp;&nbsp;/**<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;* Account constructor requiring three<br/>
    				&nbsp;&nbsp;* attributes to create. Subclasses will be forced to call<br/>
    				&nbsp;&nbsp;* this constructor and set these required values.<br/>
    				&nbsp;&nbsp;*<br/>
    				&nbsp;&nbsp;* @param accountNumber String the account number<br/>
    				&nbsp;&nbsp;* @param accountBalance double the account balance<br/>
    				&nbsp;&nbsp;* @param customer Customer the customer information<br/>
    				&nbsp;&nbsp;*/<br/>
    				<br/>
				&nbsp;&nbsp;//Constructors<br/>
				&nbsp;&nbsp;public Account(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountNumber="";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = 0.0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customer = null;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public Account(String accountNumber, double accountBalance, Customer customer){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountNumber = accountNumber;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = accountBalance;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customer = customer;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;//Gets and Sets<br/>
				&nbsp;&nbsp;public String getAccountNumber(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return this.accountNumber;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public double getAccountBalance(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return this.accountBalance;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public Customer getCustomer(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return customer;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void setAccountNumber(String accountNumber){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountNumber = accountNumber;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void setAccountBalance(double accountBalance){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = accountBalance;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void setCustomer(Customer customer){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customer = customer;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
	   			&nbsp;&nbsp;/**<br/>
    				&nbsp;&nbsp;*<br/>
    				&nbsp;&nbsp;* depositCurrency is used to add funds to an account<br/>
    				&nbsp;&nbsp;*<br/>
    				&nbsp;&nbsp;* @param deposit double the amount to add to the account<br/>
    				&nbsp;&nbsp;*<br/>
    				&nbsp;&nbsp;**/<br/>
    				<br/>
				&nbsp;&nbsp;public void depositCurrency(double deposit){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance += deposit;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//add a checking transaction<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if(this.getClass()== Checking.class) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.transCounter++;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
	  			&nbsp;&nbsp;/**<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;* withdrawalCurrency is used to remove funds from an account<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;* @param withdrawal double the amount to remove from the account<br/>
				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;**/<br/>
				&nbsp;&nbsp;public void withdrawalCurrency(double withdrawal){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if(this.getClass()== Checking.class) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((this.accountBalance - withdrawal) < 0){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nInsufficient Funds. Only $" + this.accountBalance + " was withdrawn");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = 0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = this.accountBalance - withdrawal;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//add a checking transaction<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.transCounter ++;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else if(this.getClass()== Gold.class) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = this.accountBalance - withdrawal;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else if(this.getClass()== Regular.class) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((this.accountBalance - withdrawal) < 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nInsufficient Funds. Only $" + this.accountBalance + " was withdrawn");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = 0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = this.accountBalance - withdrawal;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
	   			&nbsp;&nbsp;/**<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;* displayAccountInformation is used to display the account information in the console.<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;* No parameters<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;**/<br/>
				&nbsp;&nbsp;public String displayAccountInformation(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String output = "Account Information:\n";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;output += "Account Number:" + this.accountNumber;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;output += "\nAccount Balance:" + this.accountBalance + "\n";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Display customer information<br/>
			    	&nbsp;&nbsp;&nbsp;&nbsp;output += customer.displayCustomerInformation();<br/>
			    	<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Return the information in a string<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return output;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				}<br/>
				<br/>
				//Checking Account<br/>
				class Checking extends Account{<br/>
				<br/>
				&nbsp;&nbsp;//Constructor<br/>
				&nbsp;&nbsp;public Checking(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super();<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;//Constructor<br/>
				&nbsp;&nbsp;public Checking(String accountNumber, double accountBalance, Customer customer){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super(accountNumber, accountBalance, customer);<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;/**<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;* addFees is used to Add Withdrawal Fees. The first two are free. Each transaction after the first two is $3.<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;* no parameters<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;**/<br/>
				&nbsp;&nbsp;public void addFees(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if (transCounter >2) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance-= (transCounter-2)*3;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Reset the counter for number of transactions since you've already charged them for the month.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;transCounter = 0;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				}<br/>
				<br/>
				//Gold Account<br/>
				class Gold extends Account{<br/>
				<br/>
				&nbsp;&nbsp;//Constructor<br/>
				&nbsp;&nbsp;public Gold(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super();<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;//Constructor<br/>
				&nbsp;&nbsp;public Gold(String accountNumber, double accountBalance, Customer customer){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super(accountNumber, accountBalance, customer);<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;/**<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;* addGoldInterest is used to add interest to a gold account<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;*no parameters<br/>
				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;**/<br/>
 				<br/>
				&nbsp;&nbsp;public void addGoldInterest(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance= (this.accountBalance - Math.abs(this.accountBalance * .05));<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				}<br/>
				<br/>
				//Regular Account<br/>
				class Regular extends Account{<br/>
				<br/>
				&nbsp;&nbsp;//Constructor<br/>
				&nbsp;&nbsp;public Regular(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super();<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;//Constructor<br/>
				&nbsp;&nbsp;public Regular(String accountNumber, double accountBalance, Customer customer){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;super(accountNumber, accountBalance, customer);<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;/**<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;* addRegularInterest is used to add interest to an regular account<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;* no parameters<br/>
 				&nbsp;&nbsp;*<br/>
 				&nbsp;&nbsp;**/<br/>
				&nbsp;&nbsp;public void addRegularInterest(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if ((this.accountBalance)*.06 >10) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance = this.accountBalance -(this.accountBalance * .06);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;this.accountBalance -= 10;<br/>
				<br/>
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