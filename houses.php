  <!DOCTYPE html>
<html>
<head>
	<title>houses</title>
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
            <a href="paid.php" class="list-group-item">paid</a>
            <a href="unpaid.php" class="list-group-item">unpaid</a>
           
          </div>
          <h1 class="my-4">Account Info</h1>
           <li class="list-group">
            <ul class="list-group-item">User: <span class="float-right"></span></ul>  
          </li>
      </div>
      <div class="col-lg-9" id="all">
        <div class="jumbotron">
        	<form action="houses.php" method="post">
        	<input type="submit" name="vacant" class="btn btn-primary" value="vacant"><br><br>
        	</form>
 <?php 
 include 'connection.php';
if(isset($_POST['vacant'])){
	$vquery="SELECT * FROM houses WHERE status='vacant' ";
	$runv=mysqli_query($conn,$vquery);                      

  ?>

  <table border="1" class="table table-bordered table-striped">
  	<th>house</th>
  	<th>size</th>
  	<th>rent</th>
  	<?php 
  		while($rowv=mysqli_fetch_assoc($runv)){
  			echo "<tr>
  				<td>$rowv[houseNo]</td>
  				<td>$rowv[rentAmount]</td>
  				<td>$rowv[size]</td>
  			";

  		}

  	 ?>
  </table>
 <?php }else{ ?> 
 	
		<form action="houses.php" method="post">
			<div class="row">
				<div class="col-6">
			<div class="form-group">
				<label for="contact">
					house:</label>
					<input type="text" class="form-control" id="name" placeholder="enter your names" required name="name">
			</div>
			<div class="form-group">
				<label for="contact">
					rent:</label>
					<input type="text" class="form-control" id="id" placeholder="enter your ID number" required name="rent">
			</div>
			<div class="form-group">
				<label for="contact">
					size:</label>
					<input type="text" class="form-control" id="contacts" placeholder="enter your contact details" required name="size">
			</div>
			<div>
				<p>	please select house features:</p>
					 
					<input type="checkbox" name="weather[]" value="rain">rain<br>
					<input type="checkbox" name="weather[]" value="sunshine">sunny<br>
					<input type="checkbox" name="weather[]" value="clouds">cloudy<br>	
					<input type="checkbox" name="weather[]" value="hails">hails<br>
					<input type="checkbox" name="weather[]" value="snow">snowy<br>
					<input type="checkbox" name="weather[]" value="wind">windy<br>
					<input type="submit" name="submit" value="submit">
			</div>
			</div>
			<input type="submit" name="button" class="btn btn-primary btn-block"  value="submit">
			</div>
		</form>
		 @yield('content')
      
   </div>
      </div>
    </div> 
  <?php }  ?>  
</body>
</html>
	<?php 
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
		

		//push/insert user input to the db
		 $insert="INSERT INTO houses (houseNo,rentAmount,size) VALUES('$name','$rent','$size');";
		 	//run your query
		 $run=mysqli_query($conn,$insert);
		 if($run){
		 	echo "<b>Query Success<b>";
		 	//refresh your browser
		 	header('location: houses.php');
		 }else{
		 	die("Query Failed:" .mysqli_error($conn));
		 }
	}
 ?>
