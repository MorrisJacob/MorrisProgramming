<?php

$orderDdl = '<option value="ProdNameAsc">Product name A - Z</option>' .
              '<option value="ProdNameDesc">Product name Z - A</option>' .
              '<option value="ProdStock">Products in Stock</option>' .
              '<option value="PriceLow">Price (Lowest first)</option>';
$order = "ProductName";
$condition = "1=1";
if(isset($_GET["orderselect"])){
	$orderSelection = GetValidString($_GET["orderselect"]);
	if($orderSelection == "ProdNameDesc"){
		$order = "ProductName Desc";
	}elseif($orderSelection == "ProdStock"){
		$order = "Quantity Desc";
	}elseif($orderSelection == "PriceLow"){
		$order = "Price";
	}
	$orderDdl = str_replace('value="' . $orderSelection . '"',
						 'value="' . $orderSelection . '" selected="selected"', $orderDdl);
}

if(isset($_GET["searchField"])){
	$condition = "ProductName LIKE '%" . GetSafeString($_GET["searchField"]) . "%'";
}

if(isset($_GET["searchSelect"]) && $_GET["searchSelect"] != "All"){
	$condition = $condition . " AND CategoryName = '" . GetSafeString($_GET["searchSelect"]) . "'";
}

$products = ExecuteSQL("Select ProductName, ImageURL, KeyProduct, Quantity, Description, Price" .
						" FROM products WHERE " . $condition . " ORDER BY " . $order);

$producthtml_blockview = "";
$producthtml_listview = "";

$prodCount = 0;
if ($products->num_rows > 0) {
	$prodCount = $products->num_rows;
    // output data of each row
    while($row = $products->fetch_assoc()) {
        $producthtml_listview .= '<div class="row">' .
			'<div class="span2">' .
				'<img src="' . $row["ImageURL"] . '" alt="' . $row["ProductName"] . '"/>'.
			'</div>'.
		    '<div class="span4">' .
				'<h3>' . $row["ProductName"] . '</h3>' .			
				'<hr class="soft"/>' .
				'<h5>' . $row["Description"] . '</h5>' .
				'<p>' .
				$row["Quantity"] . ' available' .
				'</p>' .
				'<a class="btn btn-small pull-right" href="product_details.php?KeyProduct=' . $row["KeyProduct"] . '">View Details</a>' .
				'<br class="clr"/>' .
			'</div>' .
			'<div class="span3 alignR">' .
			'<form class="form-horizontal qtyFrm">' .
			'<h3> $' . $row["Price"] . '</h3>' .
			'<label class="checkbox">' .
				'<input type="checkbox">  Add Product to Compare' .
			'</label><br/>' .
			'' .
			  '<a href="product_details.php" class="btn btn-large btn-primary"> Add to <i class=" icon-shopping-cart"></i></a>' .
			  '<button type="button" onclick="OpenPhotoSwipe(\'' . $row["ImageURL"] . '\');" class="btn btn-large"><i class="icon-zoom-in"></i></button>' .
			'' .
				'</form>' .
			'</div>' .
		'</div>' .
		'<hr class="soft"/>';


        $producthtml_blockview .= '<li class="span3">' .
			  '<div class="thumbnail">' .
				'<a href="product_details.php?KeyProduct=' . $row["KeyProduct"] . '">' .
                '<img class="blockviewimg" src="' . $row["ImageURL"] . '" alt="' . $row["ProductName"] . '"/></a>' .
				'<div class="caption">' .
				  '<h5>' . $row["ProductName"] . '</h5>' .
				  '<p>' . 
					$row["Description"] .
				  '</p>' .
				   '<h4 style="text-align:center">' . 
                   '<button type="button" onclick="OpenPhotoSwipe(\'' . $row["ImageURL"] . '\');" class="btn"><i class="icon-zoom-in"></i></button>' . 
                   '<a class="btn" href="php/actions/addtocart.php?KeyProduct=' . $row["KeyProduct"] . '">Add to <i class="icon-shopping-cart"></i></a>' .
						  '<span> $' . $row["Price"] . '</span></h4>' .
				'</div>' .
			  '</div>' .
			'</li>';











    }
} else {
    $prodhtml +=  "No Products Available";
}

?>