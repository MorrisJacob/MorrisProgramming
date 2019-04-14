<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example: Gradebook</h1>
							<h2><span class="redcolor">UseGradebook Example</span>.</h2>
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
				package edu.iuk.GradebookClass;<br/>
				<br/>
				import java.util.Scanner;<br/>
				<br/>
				public class useGradebook {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// GradeBook<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// declare variables<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int userChoice = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;String newGradeBook;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;GradeBook Java = new GradeBook("Java");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Choose from the following options:\n\n 1- Create default Java gradebook:\n 2- Create a new gradebook:" 
				+ "\n 3- Display the welcome message:\n 4- Calculate the class average and the maximum grade:\n 5- Quit:");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;while (!(userChoice == 5)) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner user = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Enter your choice:");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;userChoice = user.nextInt();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (userChoice == 1) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java.setCourseName("Java");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("The GradeBook is now Java.");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (userChoice == 2) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner gradeName = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Please enter the name of the new Gradebook:");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newGradeBook = gradeName.nextLine();<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GradeBook newGrades = new GradeBook(newGradeBook);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java.setCourseName(newGradeBook);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("The GradeBook is now " + newGradeBook);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (userChoice == 3) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java.displayMessage();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (userChoice == 4) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Java.determineClassAverage();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (!(userChoice == 5)) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Please enter a valid number!");<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
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