
<!DOCTYPE html>
<html>
<head>
	<title></title>
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

        	<table border="1"  class="table table-bordered table-striped">
	<th>house</th>
	<th>name</th>
	<th>contact1</th>
	<th>contact2</th>
	<th>amount</th>

<?php 
	include 'connection.php';
	$query="SELECT * FROM paid WHERE via='unpaid' ";
		 $run=mysqli_query($conn,$query);
		 while($row=mysqli_fetch_assoc($run)){
		 	$one=$row['houseNo'];
		 	echo $one;
		 
	$query1="SELECT * FROM tenants WHERE house='$one'";
// house name contact$
		$run1=mysqli_query($conn,$query1);
		while($row1=mysqli_fetch_assoc($run1)){
				$two=$row1['name'];
				$three=$row1['contact1'];
				$four=$row1['contact2'];
		}
	$query3="SELECT * FROM water WHERE houseNo='$one'";
	// tbill
		$run2=mysqli_query($conn,$query3);
		while($row2=mysqli_fetch_assoc($run2)){
				$five=$row2['tbill'];
		}
		echo "<tr>
		<td>$one</td>
		<td>$two</td>
		<td>$three</td>
		<td>$four</td>
		<td>$five</td>";

		
	
		}
 ?>
 </table>
           @yield('content')
        </div>
      </div>
    </div>  

</body>
</html>