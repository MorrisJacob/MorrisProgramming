<?php

function GetValidString($str){
    if((isset($str)) && !empty($str))
    {
        return $str;
    }else{
        return "";
    }

}

function GetSafeString($str){
    $str = GetValidString($str);

    $str = str_replace("'", "", $str);
    $str = str_replace('"', "", $str);
    $str = str_replace(";", "", $str);

    return $str;
}

function SendEmail($toAddress, $subject, $message){
    // use wordwrap() if lines are longer than 70 characters
    $message = wordwrap($message,70);

    $headers = 'From: jacob@morrisprogramming.com' . "\r\n" .
    'Reply-To: jacob@morrisprogramming.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // send email
    mail($toAddress,$subject,$message, $headers);
}

function AddToCart($userid, $KeyProduct, $Quantity){
    //first, let's see if they have this product in their cart
    $productCheck = GetSingleValueDB("SELECT Count(*) exrow FROM cart WHERE UserID = " . $userid . " AND KeyProduct = " . $KeyProduct . ";", "exrow");

    if($productCheck > 0){
                 ExecuteSQL("Update cart SET Quantity = Quantity + " . $Quantity . 
                " WHERE UserID = " . $userid . " AND KeyProduct = " . $KeyProduct . ";");
    }else{
             ExecuteSQL("INSERT INTO cart (UserID, KeyProduct, Quantity) " . 
        "VALUES (" . $userid . ", " . $KeyProduct . ", " . $Quantity . ");");

        echo "INSERT INTO cart (UserID, KeyProduct, Quantity) " . 
        "VALUES (" . $userid . ", " . $KeyProduct . ", " . $Quantity . ");";
    }

}

?>