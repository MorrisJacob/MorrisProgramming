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
							<h2><span class="redcolor">Bank Example</span>.</h2>
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
			<p>
				This bank example is a perfect example of object oriented programming in Java. 
				However, because the code is quite large compared to other examples, and because it contains three classes, This code has been placed into several external text files.
			</p>
			<p>
				To run these files, place the three separate text files into their own classes within a Java Package, and run the “Bank.java” class. 
				(Technically you can run any of the classes. However, the bank.java class contains the main method, so it only makes sense to start there.)
			</p>
			<ul>
				<li><a href="<?php echo $siteurl ?>/php/lessons/examples/java/bank-bankclass.php">Bank Class</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/examples/java/bank-accountclass.php">Account Class</a></li>
				<li><a href="<?php echo $siteurl ?>/php/lessons/examples/java/bank-customerclass.php">Customer Class</a></li>
			</ul>
		<a href="<?php echo $siteurl ?>/php/lessons/java.php" class="btn btn-select-plan btn-sm btn-learn previous-button"><i class="icon-arrow-left"></i> Back to Examples</a>
		</div>
	</div>
</div>
<?php include("../../../masters/footer.php"); ?>