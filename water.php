<!DOCTYPE html>
<html>
<head>
	<title>water</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<div class="row">
        <div class="col-lg-3">
          <h1 class="my-4">Menu</h1>
          <div class="list-group">
            
            <a href="houses.php" class="list-group-item">Houses</a>
            <a href="tenants.php" class="list-group-item">tenants</a>
            <a href="water.php" class="list-group-item">water</a>
            <a href="payments.php" class="list-group-item">payments</a>
            <a href="unpaid.php" class="list-group-item">unpaid</a>
           
          </div>
          <h1 class="my-4">Account Info</h1>
           <li class="list-group">
            <ul class="list-group-item">User: <span class="float-right"></span></ul>  
          </li>
      </div>
      <div class="col-lg-9" id="all">
        <div class="jumbotron">
        	        
        	<?php 
ob_start();
include 'connection.php';
//give your months values
 ?>
 
 <div class="row text-center">
				<div class="col-6">
 <form action="water.php" method="post">
 	<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">month</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01" name="month">
						<option>january</option>
						<option>february</option>
						<option>march</option>
						<option>April</option>
						<option>may</option>
						<option>june</option>
						<option>july</option>
						<option>August</option>
						<option>September</option>
						<option>october</option>
						<option>november</option>
						<option>december</option>
					
				</select>
			</div>

	
 	<div class="form-group">
				<label for="contact">
					house:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the house number" required name="house">
		</div>
 	<div class="form-group">
				<label for="contact">
					C.Reading:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the current reading" required name="cread">
		</div>

		<input type="submit" name="button" class="btn btn-primary btn-block"  value="submit">
 </form>
</div>
</div>
<br><br><br>
 <table border="1" class="table table-bordered table-striped">
 	<th>house</th>
 	<th>c.reading</th>
 	<th>p.reading</th>
 	<th>c.bill</th>
 	<th>t.bill</th>
 	<tr></tr>
 </table>
 <?php 
if(isset($_POST['button'])){
	//select from water current reading and bal
	$one=$_POST['house'];
	$two=$_POST['cread'];
		extract($_POST);
		$query= "SELECT * FROM water WHERE houseNo='$one' ;";
		$run=mysqli_query($conn,$query);
//test if query run successfuly
			if(!$run){
				die("Query failed:".mysqli_error($conn));
			}
			echo "<b>Query success<b><br>";

			while($row=mysqli_fetch_assoc($run)){
				$hous=$row['houseNo'];
				$curr=$row['cReading'];
				$prev=$row['pReading'];
				$bal=$row['bal'];
			 	}
			 	$prev2=$curr;
			 	$bill1=$two-$prev2;
			 	$bill=$bill1*100;
			 	$bill2=$bill+100;
			 	$cbill=$bill2;
			 	$tbill=$cbill+$bal;

		 		$mon=$_POST['month'];
		//print_r($_POST);
				$monthA=[
						"january"=>1,
						"february"=>2,
						"march"=>3,
						"April"=>4,
						"may"=>5,
						"june"=>6,
						"july"=>7,
						"August"=>8,
						"September"=>9,
						"october"=>10,
						"november"=>11,
						"december"=>12
					];
		foreach ($monthA as $key => $value) {
			# code...
			if($mon==$key){
				$mid=$value;
			}
		}
		//push/insert user input to the db
		 $insert="INSERT INTO water (mid,houseNo,cReading,pReading,cbill,bal,tbill) VALUES('$mid','$one','$two','$prev2','$cbill','$bal','$tbill');";
		 	//run your query
		 $run=mysqli_query($conn,$insert);
		 if($run){
		 	echo "<b>Query Success<b>";
		 	//refresh your browser
		 	header('location: water.php');
		 }else{
		 	die("Query Failed:" .mysqli_error($conn));
		 }

}
 ?>
  @yield('content')
      
   </div>
      </div>
    </div>  
         

</body>
</html>

