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
							<h2><span class="redcolor">Bank Class</span>.</h2>
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
				import java.io.File;<br/>
				import java.io.FileInputStream;<br/>
				import java.io.FileOutputStream;<br/>
				import java.io.ObjectInputStream;<br/>
				import java.io.ObjectOutputStream;<br/>
				import java.util.ArrayList;<br/>
				import java.util.InputMismatchException;<br/>
				import java.util.Scanner;<br/>
				<br/>
				//Jacob Morris<br/>
				//Morris Programming<br/>
				<br/>
				public class Bank {<br/>
				<br/>
				&nbsp;&nbsp;//Create an array of created accounts<br/>
				&nbsp;&nbsp;static ArrayList<Account> accountsList = new ArrayList<Account>();<br/>
				&nbsp;&nbsp;//Create a variable for customers<br/>
				&nbsp;&nbsp;static Customer currentCustomer;<br/>
				&nbsp;&nbsp;static File f = new File("Accounts.dat");<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if (f.exists()) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ObjectInputStream input = new ObjectInputStream(new FileInputStream(f));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;accountsList = (ArrayList<Account>) input.readObject();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;input.close();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} catch (Exception e) {<br/>
				<br/>
			 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println( e.getMessage() );<br/>
			 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.printStackTrace();<br/>
			 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.exit(0);<br/>
			 	<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//loop the bank program until the user enters 10;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for(int i =0; i <1; i=i){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Display the bank menu<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Bank Menu\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"================================\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"1. Create Checking Account\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"2. Create Gold Account\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"3. Create Regular Account\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"4. Deposit\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"5. Withdraw\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"6. Display Account Information\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"7. Remove an Account\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"8. Apply End of Month Fees\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"9. Display Bank Statistics\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"10. Save and Exit");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//receive user input<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner input = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("\nPlease input your choice (1-10):");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String selection = input.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Call method related to the input selected by the user<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(selection.equals("1")){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;createChecking();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("2")){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;createGold();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("3")) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;createRegular();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("4")) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depositCurrency();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("5")){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;withdrawCurrency();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("6")){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displayAccountInformation();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("7")) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;removeAccount();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("8")) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;applyFees();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("9")) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displayBankStatistics();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if(selection.equals("10")) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endProgram();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Ensure user makes a valid selection<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nPlease make a valid selection!\n");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void createChecking(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer name<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner name = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer name: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerName = name.nextLine();<br/>
				<br/>		
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer ID<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner ID = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer ID: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerID = ID.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer phone number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner phone = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer Phone Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerPhone = phone.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner account = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the Account Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String accountNumber = account.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//add new customer and new account to the arrays<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;currentCustomer =new Customer(customerID, customerName, customerPhone);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;accountsList.add(new Checking(accountNumber, 0.0, currentCustomer));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Created Successfully!\n");<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void createGold(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer name<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner name = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer name: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerName = name.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer ID<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner ID = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer ID: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerID = ID.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer phone number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner phone = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer Phone Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerPhone = phone.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner account = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the Account Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String accountNumber = account.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//add new customer and account to the array<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;currentCustomer = new Customer(customerID, customerName, customerPhone);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;accountsList.add(new Gold(accountNumber, 0.0, currentCustomer));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Created Successfully!\n");<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void createRegular(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer name<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner name = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer name: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerName = name.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer ID<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner ID = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer ID: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerID = ID.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive customer phone number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner phone = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the customer Phone Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String customerPhone = phone.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner account = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the Account Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String accountNumber = account.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//add new customer and account to the array<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;currentCustomer = new Customer(customerID, customerName, customerPhone);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;accountsList.add(new Regular(accountNumber, 0.0, currentCustomer));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Created Successfully!\n");<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void depositCurrency(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner account = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the Account Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String accountNumber = account.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive deposit amount<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;try{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//No accounts are made yet<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.size() == 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//find account with received account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i1=0; i1<accountsList.size(); i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.get(i1).getAccountNumber().equals(accountNumber)) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//receive deposit amount<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner amount = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the amount: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double depositAmount = amount.nextDouble();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//deposit amount must be a positive integer<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (depositAmount >=0){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//deposit<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;accountsList.get(i1).depositCurrency(depositAmount);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Updated Successfully!\n New Account Balance: " + accountsList.get(i1).getAccountBalance() + "\n");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nPlease enter a valid amount!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//account is not found<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(i1 + 1 == accountsList.size()) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//invalid number entered for deposit amount.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} catch (InputMismatchException a){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nPlease enter a valid amount!\n");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void withdrawCurrency(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner account = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the Account Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String accountNumber = account.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;try{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//withdraw amount must be a positive integer<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//No accounts are made yet<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.size() == 0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else{<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//find account with received account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i1=0; i1<accountsList.size(); i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.get(i1).getAccountNumber().equals(accountNumber)) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//receive withdraw amount<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner amount = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the amount: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double withdrawalAmount = amount.nextDouble();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(withdrawalAmount>=0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//withdrawal<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;accountsList.get(i1).withdrawalCurrency(withdrawalAmount);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Updated Successfully!\n New Account Balance: " + accountsList.get(i1).getAccountBalance() + "\n");<br/>
				break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nPlease enter a valid Amount!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//account is not found<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(i1 + 1 == accountsList.size()) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>		
				&nbsp;&nbsp;&nbsp;&nbsp;//invalid number entered for withdraw amount.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} catch (InputMismatchException a){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nPlease enter a valid amount!\n");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void displayAccountInformation(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner account = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the Account Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String accountNumber = account.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//No accounts made yet<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.size()==0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//find account with received account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i1=0; i1<accountsList.size(); i1++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.get(i1).getAccountNumber().equals(accountNumber)) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//display information for the account<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(accountsList.get(i1).displayAccountInformation() + "\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//account not found<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(i1+1 == accountsList.size()) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void removeAccount(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//receive account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner account = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Please input the Account Number: ");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String accountNumber = account.nextLine();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//No accounts made yet<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.size()==0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} else {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//find account with received account number<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int i1=0; i1<accountsList.size(); i1++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.get(i1).getAccountNumber().equals(accountNumber)) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//remove the account from the array<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;accountsList.remove(i1);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount successfully removed!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//account not found<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(i1+1 == accountsList.size()) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nAccount Not Found!\n");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void applyFees(){<br/>
				<br/>		
				&nbsp;&nbsp;&nbsp;&nbsp;//apply fees to all accounts in the array<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//This function should be used once every end of month and will apply interest to the Regular and Gold accounts<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//and deduct transaction fees from Checking accounts whenever applicable<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for(int i1=0; i1<accountsList.size(); i1++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//checking account fees<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.get(i1).getClass()== Checking.class) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((Checking)accountsList.get(i1)).addFees();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Gold account fees<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(accountsList.get(i1).getClass()== Gold.class) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((Gold)accountsList.get(i1)).addGoldInterest();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Regular account fees<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if(accountsList.get(i1).getClass()== Regular.class) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((Regular)accountsList.get(i1)).addRegularInterest();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nFees Successfully Applied!\n");<br/>
				<br/>
				&nbsp;&nbsp;}
				<br/>
				&nbsp;&nbsp;public static void displayBankStatistics(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//this feature will display a simple report for bank<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//administrators that include the total sum of all accounts in the<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//bank, number of zero-balance accounts, average balance of accounts, and the<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//account with largest balance.<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//declare and Initialize variables for bank information<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double accountTotal =0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double accountAverage =0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int emptyAccounts = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;double largestAccount = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String largestOwner = "";<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for(int i1=0; i1<accountsList.size(); i1++) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//add all account balances together, and put them in variable accountTotal<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;accountTotal += accountsList.get(i1).getAccountBalance();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//add number of empty accounts, and put them in variable emptyAccounts<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.get(i1).getAccountBalance() == 0.0) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;emptyAccounts += 1;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Find largest account in the array<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(accountsList.get(i1).getAccountBalance() > largestAccount) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//variable largestAccount holds the largest account balance<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;largestAccount = accountsList.get(i1).getAccountBalance();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//variable largestOwner holds the owner name of the largest account<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;largestOwner = accountsList.get(i1).getCustomer().getCustomerName();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//variable accountAverage takes the total of all accounts, and divides it by number of accounts.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;accountAverage = (accountTotal / accountsList.size());<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Display bank statistics<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("\nBank Statistics:\n" +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;"==========================\n" +<br>
				&nbsp;&nbsp;&nbsp;&nbsp;"Total Bank Balance: " + accountTotal +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;"\nAverage Balance: " + accountAverage +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;"\nNumber of Empty Accounts: " + emptyAccounts +<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;"\nLargest Account Owner: " + largestOwner + "\n");<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public static void endProgram(){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;try {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ObjectOutputStream output = new ObjectOutputStream(new FileOutputStream(f));<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output.writeObject(accountsList);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;output.close();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;} catch (Exception e) {<br/>
				<br/>
		   		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println( e.getMessage() );<br/>
		    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e.printStackTrace();<br/>
		    		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.exit(0);<br/>
		    		<br/>
	 			&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
	 			<br/>
	 			&nbsp;&nbsp;&nbsp;&nbsp;//End the program.<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.exit(0);<br/>
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