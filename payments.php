 <?php 
ob_start();
// include 'connection.php';
// //DB Query
// $query= "SELECT * FROM paid";
// $run=mysqli_query($conn,$query);
//test if query run successfuly
// if(!$run){
// 	die("Query failed:".mysqli_error($conn));
// }
// echo "<b>Query success<b><br>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>payment list</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style type="text/css">
		#on{
			padding-left: 32px;
		}
	</style>
</head>
<body>
	<div class="row">
        <div class="col-lg-3">
          <h1 class="my-4">Menu</h1>
          <div class="list-group">
            
            <a href="houses.php" class="list-group-item">Houses</a>
            <a href="tenants.php" class="list-group-item">tenants</a>
            <a href="water.php" class="list-group-item">water</a>
            <div>
            <a href="payments.php" class="list-group-item">payments</a>
           
            </div>
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
$query= "SELECT * FROM paid";
$run=mysqli_query($conn,$query);
//test if query run successfuly
if(!$run){
	die("Query failed:".mysqli_error($conn));
}
//echo "<b>Query success<b><br>";
 ?>
 
 <?php 
	 if(isset($_GET['editid'])){
	 	$sqle="SELECT * FROM paid WHERE id=$_GET[editid]";
	 	$rune=mysqli_query($conn,$sqle);
	 	while($row=mysqli_fetch_assoc($rune)){
	 		$mid=$row['mid'];
	 		$id=$row['id'];
	 		$house=$row['houseNo'];
	 		$amount=$row['amount'];
	 		$water=$row['water'];
	 		$date=$row['date'];
   	 		$via=$row['via'];
	 		$bal=$row['bal'];}
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
			if($mid==$value){
				$month=$key;
			}
		}
?>
	 			<div class="container-fluid jumbotron">
<form action="payments.php" method="post">

			<div class="row">
				<div class="col-6">
					<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">month</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01" name="month" value="<?php echo $month   ?>">
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
					<input type="text" class="form-control" id="house" placeholder="enter your house" required name="house" value="<?php echo $house ?>">
			</div>
			<div class="form-group">
				<label for="contact">
					amount:</label>
					<input type="text" class="form-control" id="amount" placeholder="enter the rent amount" required name="amount" value="<?php echo $amount ?>">
			</div>
			
			<div class="form-group">
				<label for="contact">
					date:</label>
					<input type="date" class="form-control" id="date" placeholder="enter the date" required name="date" value="<?php echo $date ?>">
			</div>
		
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">via</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01" name="via" value="<?php echo $via ?>">
					<option>bank(cooperative)</option>
					<option>bank(Equity )</option>
					<option>mpesa</option>
					<option>cash</option>
				</select>
			</div>
			<input type="hidden" value="<?php echo $_GET['editid'] ?>" name="id" class="form-control">
			<input type="submit" name="ebutton" class="btn btn-primary btn-block"  value="submit">
			</div>
			
			</div>
		</form>
		</div>
	<?php }else{ ?> 	
 
	
	
       
	<div class="container-fluid jumbotron">
<form action="payments.php" method="post">

			<div class="row">
				<div class="col-6">
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
					<input type="text" class="form-control" id="house" placeholder="enter your house" required name="house">
			</div>
			<div class="form-group">
				<label for="contact">
					amount:</label>
					<input type="text" class="form-control" id="amount" placeholder="enter the rent amount" required name="amount">
			</div>
			
			<div class="form-group">
				<label for="contact">
					date:</label>
					<input type="date" class="form-control" id="date" placeholder="enter the date" required name="date">
			</div>
		
			<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">via</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01" name="via">
					<option>bank(cooperative)</option>
					<option>bank(Equity )</option>
					<option>mpesa</option>
					<option>cash</option>
				</select>
			</div>
			<input type="submit" name="button" class="btn btn-primary btn-block"  value="submit">
			</div>
			
			</div>
		</form>
		</div>
		
		<?php }
	include 'connection.php';
	//process user input and persist to the DB
	if(isset($_POST['button'])){
		// $name=$_POST['name'];
		// $idNo=$_POST['id'];
		// $contact=$_POST['contacts'];
		// $const=$_POST['cons'];
		// $poll=$_POST['pol'];
		// $date=$_POST['date'];
		extract($_POST);
		$h=$_POST['house'];
		$a=$_POST['amount'];
		$b=$_POST['rent'];
		$water=$a-$b;
		$via1=$_POST['via'];
			$mon=$_POST['month'];

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

			$hquery="SELECT * FROM houses WHERE houseNo='$h' ";
			 $run10=mysqli_query($conn,$hquery);
			 while($row7=mysqli_fetch_assoc($run10)){
			 	$amount7=$row7['rentAmount'];
			 	//echo $one;
			 }
			 $wquery="SELECT * FROM water WHERE houseNo='$h' AND mid='$mid' ";
			 	$runw=mysqli_query($conn,$wquery);
			 	while($roww=mysqli_fetch_assoc($runw)){
			 		$waterb=$roww['cbill']; 
			 	}
			 	$cmid=$mid-1;
			 $bquery="SELECT * FROM paid WHERE houseNo='$h' AND mid='$cmid' ";
			 $runb=mysqli_query($conn,$bquery);
			 while($rowb=mysqli_fetch_assoc($runb)){
			 	$bal9=$rowb['bal'];
			 }
			 $total=$amount7+$waterb-$bal9;
			 $ball=$a-$total;
		//print_r($_POST);
	

		//push/insert user input to the db
		 $insert="INSERT INTO paid  (mid,houseNo,amount,water,date,via,bal) VALUES('$mid','$house','$amount','$waterb','$date','$via','$ball');";
		 	//run your query
		 $run=mysqli_query($conn,$insert);
		 if($run){
		 	echo "<b>Query Success<b>";
		 	//refresh your browser
		 	header('location: payments.php');
		 }else{
		 	die("Query Failed:" .mysqli_error($conn));
		 }
	}
 ?>

		<div class="container bg-warning text-center">
		<h2>Read/Retreive Data from mysql DB</h2>
		<table class="table table-bordered table-striped">
			<thead class="thead-dark">
				<tr>
					<th>House No</th>
					<th>Rent</th>
					<th>Water</th>
					<th>date</th>
					<th>via</th>
					<th id="del">delete</th>
					<th id="update">update</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					//fetch data from db and display it in a table
				//convert returned object into array,and use a loop to iterate the array
				while($row=mysqli_fetch_assoc($run)){
					echo "<tr>
					<td>$row[houseNo]</td>
					<td>$row[amount]</td>
					<td>$row[water]</td>
					<td>$row[date]</td>
					<td>$row[via]</td>
					<td><a href='payments.php?editid=$row[id]' class='btn btn-danger'>edit</a></td>
					<td><a href='payments.php?delid=$row[id]' class='btn btn-warning'>delete</a></td>
					";
				
				}
				 ?>
				  <?php 
 //delete a particular row by assigning a GET variable to each row clicked
 if(isset($_GET['delid'])){


 	$del_query="DELETE FROM paid WHERE id=$_GET[delid]";
 	//check for successful delete
 	if(mysqli_query($conn,$del_query)){
 		echo "<b>Delete successful</b>";
 		//reload webpage
 		header("location:payments.php");
 	}else{
 		die("delete record failed:" .mysqli_error($conn));
 	}
 	}
  ?>
			</tbody>
		</table>
		
	</div>
	<?php 
		if(isset($_POST['ebutton'])){
			extract($_POST);
			$h=$_POST['house'];
		$a=$_POST['amount'];
		//$b=$_POST['rent'];
		//$water=$a-$b;
		$via1=$_POST['via'];
		$four=$_POST['id'];
			$mon=$_POST['month'];

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

			$hquery="SELECT * FROM houses WHERE houseNo='$h' ";
			 $run10=mysqli_query($conn,$hquery);
			 while($row7=mysqli_fetch_assoc($run10)){
			 	$amount7=$row7['rentAmount'];
			 	//echo $one;
			 }
			 $wquery="SELECT * FROM water WHERE houseNo='$h' AND mid='$mid' ";
			 	$runw=mysqli_query($conn,$wquery);
			 	while($roww=mysqli_fetch_assoc($runw)){
			 		$waterb=$roww['cbill']; 
			 	}
			 	$cmid=$mid-1;
			 $bquery="SELECT * FROM paid WHERE houseNo='$h' AND mid='$cmid' ";
			 $runb=mysqli_query($conn,$bquery);
			 while($rowb=mysqli_fetch_assoc($runb)){
			 	$bal9=$rowb['bal'];
			 }
			 $total=$amount7+$waterb-$bal9;
			 $ball=$a-$total;
		//print_r($_POST);
		$edit="UPDATE paid SET mid='$mid',houseNo='$h',amount='$amount',water='$waterb',date='$date',via='$via',bal='$ball' WHERE id='$four';";

				$res=mysqli_query($conn,$edit);
	 	if(!$res){
				die("query failed:".mysqli_error($conn));
			}
			header('location:payments.php');
		}
		
	 ?>
</body>
</html>