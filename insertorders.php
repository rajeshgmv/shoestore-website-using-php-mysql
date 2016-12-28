<?php
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['btn-GoBack']))
{
header("Location: index.php");

}



if(isset($_POST['btn-proceed']))
{
	
	
		
include_once 'database_connection.php';	
$useri = $_SESSION['user_id'];
	
	$res=mysqli_query($db2,"select 
		shoes.shoe_Img as image, 
		shoes.shoe_Id as shoeid,
		customer.id as custid, 
		brand.brand_Name brand, 
		color.color_Name as ccolor, 
		size.size_Number as snumber, 
		ROUND(sale.discount,2) as  cdiscount, 
		ROUND(shoes.cost,2) as scost, 
		ROUND(shoes.cost*(1-sale.discount),2) as cad
		from cart, customer, shoes, brand, color, size, shoesareofcolor, shoesgoondeal,  sale where 
		cart.cust_Id = customer.id and 
		cart.shoe_Id = shoes.shoe_Id and
		shoes.shoe_Id =	shoesareofcolor.shoe_Id and
		shoesareofcolor.color_Id = color.color_Id and 
		shoes.shoe_Id = shoesgoondeal.shoe_Id and 
		shoesgoondeal.sale_Id = sale.sale_Id and  
		shoes.shoe_Id=size.shoe_Id and 
		shoes.brand_Id=brand.brand_Id  and
		cart.cust_Id='$useri'");
		$num_rows = mysqli_num_rows($res);
	while($row = $res->fetch_assoc()) 
	{
		 $quantity = mysqli_real_escape_string($db2,$_POST['quantity']);
		 $cost = $row["cad"];
		 $totalcost = $quantity * $cost;
		 $shoeid = $row["shoeid"];
		 $cusid = $row["custid"];
	    if(mysqli_query($db2, "INSERT INTO alsohasorderhistory(`cust_Id`, `orderdate`,`shoe_Id`, `quantity`, `Review`, `totalcost`) VALUES ( '$cusid', now(),'$shoeid', '$quantity', '', '$totalcost');"))
	     {
		
			$inquery = "SELECT max(order_Id) as ordr FROM `alsohasorderhistory` where cust_Id = '$cusid'";
		$resu = mysqli_query($db2,$inquery);
		while($roww = $resu->fetch_assoc())
		{$orderid = $roww["ordr"];}
			
		 }
		 if(mysqli_query($db2, "INSERT INTO orders(`order_Id`,`cust_Id`, `orderdate`,`shoe_Id`, `quantity`, `Review`, `totalcost`) VALUES ( '$orderid','$cusid', now(),'$shoeid', '$quantity', '', '$totalcost');"))
		 {}
	}
	mysqli_query($db2, "DELETE FROM cart where cust_Id='$useri'");
	
		header("Location: success.html.php");
}
if(isset($_POST['btn-cancel']))
{
	include_once 'database_connection.php';	
	$useri = $_SESSION['user_id'];
	mysqli_query($db2, "DELETE FROM cart where cust_Id='$useri'");
	header("Location: index.php");

}


?>