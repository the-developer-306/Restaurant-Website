<?php
$custnm = $_GET["custnm"];
$add= $_GET["add"];
$ctnum= $_GET["ctnum"];
$nvg= $_GET["nvg"];
$qnvg= $_GET["qnvg"];
$vg= $_GET["vg"];
$qvg= $_GET["qvg"];
$des= $_GET["des"];
$qdes= $_GET["qdes"];
$drnk= $_GET["drnk"];
$qdrnk= $_GET["qdrnk"];

include "config.php";
if($con)
{
    
    $sql="INSERT INTO `take_away_portal`(`Customer Name`, `Address`, `Contact No.`, `Non Veg. dish`, `Quantity_non_veg`, `Veg. dish`, `Quantity_veg`, `Desert`, `Quantity_desert`, `Drinks`, `Quantity_drinks`) 
	VALUES ('$custnm','$add','$ctnum','$nvg','$qnvg','$vg','$qvg','$des','$qdes','$drnk','$qdrnk')";
    $result = mysqli_query($con,$sql);
    if($result)
    {
        echo "data entered";
        header("Location:submitted.php");
    }
        
   
    else
    {
        echo "fail";
    }

}

?>