<?php
//some variables are already created and reused from header.php

$cartItems = ExecuteSQL("select p.productname, p.Price, p.ImageURL, c.Quantity from " . 
                        "cart c inner join products p on c.KeyProduct = p.KeyProduct where c.UserID = " . $userid);

$cartItemsHTML = "";
$total = 0;
if ($cartItems->num_rows > 0) {

    while($cartrow = $cartItems->fetch_assoc()) {
            $cartItemsHTML .= '<tr>' .
                  '<td> <img width="60" src="' . $cartrow["ImageURL"] . '" alt="' . $cartrow["ProductName"] . '"/></td>' .
                  '<td>' . $cartrow["productname"] . '</td>' .
				  '<td>' .
					'<div>' .
						$cartrow["Quantity"] .
					'</div>' .
				  '</td>' .
                  '<td>$' . number_format($cartrow["Price"] * $cartrow["Quantity"], 2) . '</td>' .
                  '<td>$' . number_format($cartrow["Price"] * $cartrow["Quantity"] * .07, 2) . '</td>' .
                  '<td>$' . number_format($cartrow["Price"] * $cartrow["Quantity"] * 1.07, 2) . '</td>' .
                '</tr>';
            $total += $cartrow["Price"] * $cartrow["Quantity"] * 1.07;
    }

}


?>