<?php
include("actionbase.php");

if($userid == 0){
    echo "<script>location='../../login.php'</script>"; /* Redirect browser */
    exit();
}else{
    if(isset($_GET["Quantity"])){
        AddToCart($userid, GetSafeString($_GET["KeyProduct"]), GetSafeString($_GET["Quantity"]));
    }else{
        AddToCart($userid, GetSafeString($_GET["KeyProduct"]), 1);
    }



    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
}

?>
