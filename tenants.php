
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
        
	<div class="container bg-success text-center">
		<h2>post data to DB</h2>
		<form action="tenants.php" method="post">
			<div class="row">
				<div class="col-6">
			<div class="form-group">
				<label for="contact">
					Hnumber:</label>
					<input type="text" class="form-control" id="name" placeholder="enter your number" required name="number">
			</div>
			<div class="form-group">
				<label for="contact">
					name:</label>
					<input type="text" class="form-control" id="id" placeholder="enter your name" required name="name">
			</div>
			<div class="form-group">
				<label for="contact">
					id number:</label>
					<input type="text" class="form-control" id="contacts" placeholder="enter your id number" required name="idnumber">
			</div>
			<div class="form-group">
				<label for="contact">
					id number2:</label>
					<input type="text" class="form-control" id="contacts" placeholder="enter your id number" required name="idnumber2">
			</div>
			</div>
				<div class="col-6">
			<div class="form-group">
				<label for="constituency">
					contact:</label>
					<input type="text" class="form-control" id="cons" placeholder="enter your contact" required name="contact">
			</div>
			<div class="form-group">
				<label for="constituency">
					contact2:</label>
					<input type="text" class="form-control" id="cons" placeholder="enter your contact" required name="contact2">
			</div>
			<div class="form-group">
				<label for="contact">
					date:</label>
					<input type="date" class="form-control" id="date" placeholder="enter the date" required name="date">
			</div>
			<br>
			<input type="submit" name="button" class="btn btn-primary btn-block"  value="submit">
			</div>
			
			</div>
		</form>	
	</div>
	<table border="1" class="table table-bordered table-striped">
		<th>house</th>
		<th>name</th>
		<th>contact1</th>
		<th>contact2</th>
		<th>id1</th>
		<th>id2</th>
		<th>date</th>
		<?php 
ob_start();
include 'connection.php';
//DB Query
$query= "SELECT * FROM tenants";
$run=mysqli_query($conn,$query);
//test if query run successfuly
if(!$run){
	die("Query failed:".mysqli_error($conn));
}
echo "<b>Query success<b><br>";
?>
	
	<?php 
			//fetch data from db and display it in a table
		//convert returned object into array,and use a loop to iterate the array
		while($row=mysqli_fetch_assoc($run)){
			echo "<tr>
			<td>$row[house]</td>
			<td>$row[name]</td>
			<td>$row[contact1]</td>
			<td>$row[contact2]</td>
			<td>$row[id1]</td>
			<td>$row[id2]</td>
			<td>$row[tdate]</td>
			<td><a href='tenants.php' class='btn btn-danger'>delete</a></td>
			<td><a href='tenants.php' class='btn btn-warning'>update</a></td>
			";
		
		}
		 ?>
</table>

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
		 $insert="INSERT INTO tenants  (house,name,contact1,contact2,id1,id2,tdate) VALUES('$number','$name','$contact','$contact2','$idnumber','$idnumber2','$date');";
		 	//run your query
		 $run=mysqli_query($conn,$insert);
		 if($run){
		 	echo "<b>Query Success<b>";
		 	//refresh your browser
		 	header('location: tenants.php');
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