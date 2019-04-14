<?php include("../masters/header.php"); ?>

<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner"
 style="background-image:url(<?php echo $siteurl ?>/images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Learning Java: Part 2</h1>
							<h2>Understanding your first <span class="redcolor">Java Code</span> in Eclipse.</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
</header>

<div class="container">
	<div class="row">
		<div class="col-xs-12" style="margin: 50px 0;">
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
				Because this first section of code may appear confusing, we will take it line by line.
			</p>
			<ol>
				<li><strong>package com.folder.folderexample –</strong>
					<p>
						This line is simply explaining the file structure of the location of the code you are looking at right now. 
						From your main Eclipse directory, you will go to the project name, to com, to folder, and lastly folderexample. 
						Finally, your class will be in a Java file in this folder. Your code may be in “C:\Users\workspace\projectexample\com\folder\folderexample\MyClass.Java.” Notice that package is lowercase.
					</p>
				</li>
				<li><strong>public class OneNewClass{ –</strong>
					<p>
						Public is a keyword that declares a member’s class. Public means that any other class can access this information. 
						Other classes can modify this class UNLESS it is declared final. Classes may also be protected, meaning only other classes within the same package can access this class. 
						Finally, private classes cannot be accessed outside of itself. This means methods can only be accessed within their class. Notice that public is lowercase.
					</p>
					<p>
						Class, obviously, is to define a class. Lastly, your class name. Your class is contained within curly brackets ({ and }).
					</p>
				</li>
				<li><strong>public static void main(String[] args){ –</strong>
					<p>
						public is defining the method’s access, just as it did for the class. This method is public, and therefore can be seen and used in other classes. Notice that public is lowercase.
					</p>
					<p>
						The word static means that the method is available at class level. In other words, you don’t need to create an object to call the method. 
						You can simply use the entire class. These are used for main methods, as well.
					</p>
					<p>
						void is defining what the method returns. This method does not return anything. For example, if a method were to return a string instead of nothing, it may say “public string methodName().”
					</p>
					<p>
						Within a method’s parentheses are the parameters that can be passed to your method. 
						In a main method, the parameter passed is an array of Strings that is declared as “args.” This allows you to pass arguments (strings) to your main method.
					</p>
				</li>
				<li>
					The last two curly brackets are closing the method and the class, respectively.
				</li>
			
			</ol>
			<a href="<?php echo $siteurl ?>/php/lessons/java-1.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Previous</a>
		</div>
	</div>
</div>
<?php include("../masters/footer.php"); ?>