<?php
include('master/header.php');
include('php/pages/product_summary.php'); 
 ?>
<!-- Header End====================================================================== -->
<div id="mainBody">
	<div class="container">
	<div class="row">
<!-- Sidebar ================================================== -->
<?php include('controls/sidebar.php');?>
<!-- Sidebar end=============================================== -->
	<div class="span9">
    <?php include('controls/breadcrumbs.php');?>
	<h3>  SHOPPING CART [ <?php echo $cartCount; ?> Item(s) ]<a href="products.php" class="btn btn-large pull-right"><i class="icon-arrow-left"></i> Continue Shopping </a></h3>	
	<hr class="soft"/>	
			
	<table class="table table-bordered">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Quantity</th>
				  				<th>Price</th>
                  <th>Tax</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
							<?php echo $cartItemsHTML ?>
				
                <tr>
                  <td colspan="5" style="text-align:right">Total Price:	</td>
                  <td> $<?php echo number_format($total, 2); ?></td>
                </tr>
                 <tr>
                  <td colspan="5" style="text-align:right">Total Tax:	</td>
                  <td> $<?php echo number_format($total * .07, 2); ?></td>
                </tr>
				 <tr>
                  <td colspan="5" style="text-align:right"><strong>TOTAL ($<?php echo number_format($total,2); ?> + $<?php echo number_format($total * .07,2); ?>) =</strong></td>
                  <td class="label label-important" style="display:block"> <strong> $<?php echo number_format($total * 1.07,2); ?> </strong></td>
                </tr>
				</tbody>
            </table>

		
            <!--<table class="table table-bordered">
			<tbody>
				 <tr>
                  <td> 
				<form class="form-horizontal">
				<div class="control-group">
				<label class="control-label"><strong> VOUCHERS CODE: </strong> </label>
				<div class="controls">
				<input type="text" class="input-medium" placeholder="CODE">
				<button type="submit" class="btn"> ADD </button>
				</div>
				</div>
				</form>
				</td>
                </tr>
				
			</tbody>
			</table>-->
			
				<div class="estbox">
					<h3>ESTIMATE YOUR SHIPPING</h3>
				  <div class="control-group">
					<label class="control-label" for="inputPost">Post Code/ Zipcode </label>
					<div class="controls">
					  <input type="text" id="inputPost" placeholder="Postcode">
					</div>
				  </div>
				  <div class="control-group">
					<div class="controls">
					  <button type="submit" class="btn">ESTIMATE </button>
					</div>
				  </div>	
				</div>	
	<a href="products.php" class="btn btn-large"><i class="icon-arrow-left"></i> Continue Shopping </a>
	<a href="login.php" class="btn btn-large pull-right">Next <i class="icon-arrow-right"></i></a>
	
</div>
</div></div>
</div>
<!-- MainBody End ============================= -->
<!-- Footer ================================================================== -->
<?php include('master/footer.php');?>