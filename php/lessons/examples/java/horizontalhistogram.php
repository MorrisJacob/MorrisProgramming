<?php include("../../../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Java Example</h1>
							<h2><span class="redcolor">Horizontal Histogram</span>.</h2>
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
				package edu.iuk.Histogram;<br/>
				<br/>
				//imports<br/>
				import java.util.Scanner;<br/>
				<br/>
				public class Histogram {<br/>
				<br/>
				&nbsp;&nbsp;public static void main(String[] args) {<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//Jacob Morris<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int num[] = new int[5];<Br/>
				&nbsp;&nbsp;&nbsp;&nbsp;int counter=0;<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//ask for the numbers, and enter the numbers into the array<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;for(int var=0;var<5;var++){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scanner number = new Scanner(System.in);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.println(“Please enter a number: “);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num[var] = number.nextInt();<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;//to ensure the numbers stop after five numbers<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;while(counter <5){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//to output the number of stars<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(num[counter]>0){<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(“*”);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num[counter]= num[counter] -1;<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}<br/>
				<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.print(“\n”);<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter++;<br/>
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