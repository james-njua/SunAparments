<?php 
include 'connection.php';
$hquery="SELECT * FROM houses WHERE houseNo='Q505' ";
			 $run10=mysqli_query($conn,$hquery);
			 while($row7=mysqli_fetch_assoc($run10)){
			 	$amount7=$row7['rentAmount'];
			 	//echo $one;
			 	echo $amount7;
			 }
 $wquery="SELECT * FROM water WHERE houseNo='Q505'&& mid='1' ";
 	$runw=mysqli_query($conn,$wquery);
 	while($roww=mysqli_fetch_assoc($runw)){
 		$waterb=$roww['tbill']; 
 		echo $waterb;
 	}
 ?>