<?php

$prodcatddl = "<option>All</option>";
$sideHTML = "";
$userid = GetSafeString($_SESSION["UserID"]);

if($userid == ""){
	$userid = 0;
}

$categories = ExecuteSQL("Select pc.CategoryName, Count(p.KeyProduct) CategoryCount" .
						" FROM productcategories pc LEFT JOIN products p on pc.CategoryName = p.CategoryName GROUP BY pc.CategoryName ORDER BY pc.CategoryName");

$cartCount = GetSingleValueDB("Select IFNULL(ROUND(SUM(Quantity),0),0) quantity FROM cart WHERE UserID = " . $userid, 'quantity');
$cartCost = GetSingleValueDB("select IFNULL(ROUND(sum(p.price * c.Quantity),2),0) price from cart c inner join products p on c.KeyProduct = p.KeyProduct where c.UserID = " . $userid, "price");

if ($categories->num_rows > 0) {

    while($catrow = $categories->fetch_assoc()) {
        
        $prodcatddl .= "<option>" . $catrow["CategoryName"] . "</option>";
		//sidehtml used for the side navbar
		$sideHTML .= '<li class="subMenu"><a> ' . $catrow["CategoryName"] . ' [' . $catrow["CategoryCount"] . '] </a>' .
			    '<ul style="display:none">';

		if($catrow["CategoryCount"] > 0){
			$products = ExecuteSQL("Select productname, KeyProduct" .
						" FROM products where categoryname = '" . GetSafeString($catrow["CategoryName"]) . "'");
			if ($products->num_rows > 0) {

    			while($prodsiderow = $products->fetch_assoc()) {
					$sideHTML .= '<li><a href="product_details.php?KeyProduct=' . $prodsiderow["KeyProduct"] . '">' . 
								 '<i class="icon-chevron-right"></i>' . $prodsiderow["productname"] . '</a></li>';
				}

			}

		}
			


			   $sideHTML .=     '</ul>' .
			 '</li>';
    }

}

if(isset($_GET["searchSelect"])){

	$searchSelect = GetValidString($_GET["searchSelect"]);

	$prodcatddl = str_replace('<option>' . $searchSelect,
						 '<option selected="selected">' . $searchSelect, $prodcatddl);
}
?>