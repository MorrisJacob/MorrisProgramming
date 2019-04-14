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
							<h2><span class="redcolor">Bank Customer Class</span>.</h2>
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
				<br/>
				public class Customer implements Serializable {<br/>
				<br/>
				&nbsp;&nbsp;//Declare Variables<br/>
				&nbsp;&nbsp;private String customerID;<br/>
				&nbsp;&nbsp;private String customerName;<br/>
				&nbsp;&nbsp;private String customerPhone;<br/>
				<br/>	
				&nbsp;&nbsp;/**<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;* Customer constructor requiring three<br/>
				&nbsp;&nbsp;* attributes to create. Subclasses will be forced to call<br/>
				&nbsp;&nbsp;* this constructor and set these required values.<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;* @param customerID String the customer's Identification<br/>
				&nbsp;&nbsp;* @param customerName String the customer's name.<br/>
				&nbsp;&nbsp;* @param customerPhone String the customer's Phone number.<br/>
				&nbsp;&nbsp;*/<br/>
				<br/>
				&nbsp;&nbsp;//Constructors<br/>
				&nbsp;&nbsp;public Customer(){<br/>
				<br/?
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerID = "";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerName = "";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerPhone = "";<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;//Constructor<br/>
				&nbsp;&nbsp;public Customer(String customerID, String customerName, String customerPhone){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerID = customerID;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerName = customerName;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerPhone = customerPhone;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>	
				&nbsp;&nbsp;//Sets and Gets<br/>
				&nbsp;&nbsp;public String getCustomerID(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return this.customerID;<br/>
				<br/>
				&nbsp;&nbsp;}
				<br/>
				&nbsp;&nbsp;public String getCustomerName(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return this.customerName;<br/>
				<br/>
				&nbsp;&nbsp;}
				<br/>
				&nbsp;&nbsp;public String getCustomerPhone(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return this.customerPhone;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void setCustomerID(String customerID){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerID = customerID;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void setCustomerName(String customerName){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerName = customerName;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void setCustomerPhone(String customerPhone){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;this.customerPhone = customerPhone;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
	   			&nbsp;&nbsp;/**<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;* displayCustomerInformation is used to display the customer's information in the console.<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;* no parameters<br/>
				&nbsp;&nbsp;*<br/>
				&nbsp;&nbsp;**/<br/>
				&nbsp;&nbsp;public String displayCustomerInformation(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String output = "Customer Information:\n";<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;output += "Customer ID: " + this.customerID;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;output += "\nCustomer Name: " + this.customerName;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;output += "\ncustomer Phone: " + this.customerPhone;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return output;<br/>
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