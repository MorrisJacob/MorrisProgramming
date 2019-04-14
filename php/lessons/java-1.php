<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Learning Java: Part 1</h1>
							<h2>Starting a new <span class="redcolor">Java Program</span> in Eclipse.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
			<p>
				Now we are going to start a new Java Program in Eclipse. Let’s start by opening Eclipse.
			</p>
			<ol>
				<li>Open Eclipse.</li>
				
				<li>Go to File → New → Java Project</li>
				
				<li>Give your project a name (the proper naming convention is all lowercase), then click “finish”</li>
				
				<li>
					<p>
						Right click on the folder in the Eclipse Package Explorer and select New → Package
					</p>
					<p>
						<strong>NOTE:</strong> Packages in Java are used to create directories to organize your files. Each folder is named when you create you package. 
						For example, naming your package “current.package.example”, your package will contain the folder current, with a subfolder called package, and one final folder called example. 
						Proper naming convention for a package is all lowercase.
					</p>
					<p>
						If you do not have a Package Explorer, you can open it by going to Window → Show View → Package Explorer.
					</p>
				</li>
				
				<li>Right click on the new package and select New → Class.</li>
				
				<li>
					Name your Class. Your class name should be a noun, and should be based off of what the methods and/or constructors in this class are going to be used for. 
					The proper naming convention for a class is Pascal Case.
				</li>
				
				<li>
					If this is your program’s main class (the class that will perform actions based on user input or developer entry), check the “public static void main(String[] args)” checkbox.
				</li>
				
				<li>
					Click finish. Notice that Eclipse has now built the start of your code for you. If you are writing a main method, an example code written by Eclipse may be:
				</li>
			</ol>
			
			<div class="mp-code-example">
				Package iuk.edu.folderexample;<br/>
				<br/>
				Public class OneNewClass{<br/>
				<br/>
				&nbsp;&nbsp;Public static void main(String[] args){<br/>
				&nbsp;&nbsp;// TODO Auto-generated method stub<br/>
				<br/>
				&nbsp;&nbsp;}
				<br/>
				}
			</div>
			<p>
				These first few lines may appear confusing. However, it is very important that you understand these lines to continue your Java experience.
			</p>
			<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
			<a href="<?php echo $siteurl ?>/php/lessons/java-2.php" class="btn btn-select-plan btn-sm btn-learn next-button">Next <i class="icon-arrow-right"></i></a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>