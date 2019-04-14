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
							<h2><span class="redcolor">Gradebook Example</span>.</h2>
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
				//----------------------------------------------------------------------<br/>
				// The GradeBook class<br/>
				//<br/>
				// A gradebook must have a "course name".<br/>
				//----------------------------------------------------------------------<br/>
				import java.util.Scanner;<br/>
				<br/>
				public class GradeBook {<br/>
				<br/>
				&nbsp;&nbsp;private String courseName;<br/>
				<br/>
				&nbsp;&nbsp;// constructor initializes courseName<br/>
				&nbsp;&nbsp;public GradeBook(String name) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;courseName = name;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void setCourseName(String name) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;courseName = name;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public String getCourseName() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;return courseName;<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;public void displayMessage() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf("Welcome to the grade book for\n%s!\n\n", getCourseName());<br/>
				<br/>
				&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;// determine class average based on 5 grades entered by user<br/>
				&nbsp;&nbsp;public void determineClassAverage() {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// create Scanner to obtain input from command window<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner input = new Scanner(System.in);<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int total; // sum of grades entered by user<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int gradeCounter; // number of the grade to be entered next<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int grade; // grade value entered by user<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int average; // average of grades<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int gradeNumber; // number of grades to be entered<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int gradeMax = 0; // maximum of all grades<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// initialization phase<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;total = 0;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;gradeCounter = 1;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;Scanner grades = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.println("Please enter the number of grades");<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;gradeNumber = grades.nextInt();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// processing phase<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;while (gradeCounter <= gradeNumber) { // loop based on user input<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print("Enter grade " + gradeCounter + ": "); // prompt<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grade = input.nextInt(); // read grade from user<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;total = total + grade; // add grade to total<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gradeMax = Math.max(gradeMax, grade); // find Max Grade<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gradeCounter = gradeCounter + 1; // increment counter by<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;// termination phase<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;average = total / gradeNumber;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf("\nTotal of all gradeNumber grades is %d\n", total);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf("Class average is %d\n", average);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf("Class Maximum is %d\n", gradeMax);<br/>
				<br/>
				&nbsp;&nbsp;} // end method determineClassAverage<br/>
				<br/>
				} // end class GradeBook
			</div>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>