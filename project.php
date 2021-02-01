<?php 
ob_start();
include 'connection.php';
//DB Query
$query= "SELECT * FROM paid";  
$run=mysqli_query($conn,$query);
//test if query run successfuly
if(!$run){
	die("Query failed:".mysqli_error($conn));
}
echo "<b>Query success<b><br>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>members</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
	.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;

}
#edit{
	color:purple;
	background-color: red;

}
#update{
	color: #fff;
	background-color: yellow;
	font-weight: bold;
	font-size: 1.4em;
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
 <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
</div> 
	
	<div class="container">
		<div class="jumbotron text-center" class="nav ">
			<h1 class="display-2 text-info">members registration system</h1>
			<h3 class="text-warning">CRUD(create.read.update.delete)</h3>
			<a href="#register" class="btn btn-primary btn-lg">Register</a>
		</div>
	</div>
	<div class="container bg-success text-center">
		<h2>post data to DB</h2>
		<form action="project.php" method="post">
			<div class="row">
				<div class="col-6">
			<div class="form-group">
				<label for="contact">
					number:</label>
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
			</div>
				<div class="col-6">
			<div class="form-group">
				<label for="constituency">
					contact:</label>
					<input type="text" class="form-control" id="cons" placeholder="enter your contact" required name="contact">
			</div>
			<div class="form-group">
				<label for="contact">
					Amount:</label>
					<input type="text" class="form-control" id="pol" placeholder="enter your amount" required name="amount">
			</div>
			<div class="form-group">
				<label for="contact">
					date:</label>
					<input type="date" class="form-control" id="date" placeholder="enter the date" required name="date">
			</div>
			</div>
			<input type="submit" name="button" class="btn btn-primary btn-block"  value="submit">
			</div>
		</form>	
	</div>
	<div class="container bg-warning text-center">
		<h2>Read/Retreive Data from mysql DB</h2>
		<table class="table table-bordered table-striped">
			<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Number</th>
					<th>Name</th>
					<th>Id Number</th>
					<th>Contact</th>
					<th>Amount</th>
					<th>date</th>
					<th id="edit">Edit</th>
					<th id="delete">delete</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include 'connection.php';

					//fetch data from db and display it in a table
				//convert returned object into array,and use a loop to iterate the array
				while($row=mysqli_fetch_assoc($run)){
					echo "<tr>
					<td>$row[id]</td>
					<td>$row[no]</td>
					<td>$row[name]</td>
					<td>$row[idno]</td>
					<td>$row[contact]</td>
					<td>$row[amount]</td>
					<td>$row[date]</td>
					<td><a href='project.php?edid=$row[id]' class='btn btn-danger'>edit</a></td>
					<td><a href='project.php?delid=$row[id]' class='btn btn-warning'>delete</a></td>
					";
				
				}
				 ?>
			</tbody>
		</table>
		<div class="container bg-warning text-center">
		<h2>Read/Retreive Data from mysql DB</h2>
		<table class="table table-bordered table-striped">
			<thead class="thead-dark">
				<tr>
					<th>id</th>
					<th>Number</th>
					<th>Name</th>
					<th>Contact</th>
					<th>Amount</th>
					<th>date</th>
					<th id="edit">paid</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					//fetch data from db and display it in a table
				//convert returned object into array,and use a loop to iterate the array
				while($row=mysqli_fetch_assoc($run)){
					echo "<tr>
					<td>$row[id]</td>
					<td>$row[no]</td>
					<td>$row[name]</td>
					<td>$row[contact]</td>
					<td>$row[amount]</td>
					<td><a href='project.php?edid=$row[id]' class='btn btn-danger'>paid</a></td>
					";
				
				}
				 ?>
			</tbody>
		</table>
		
	</div>
	<div class="container-fluid bg-info">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>SQL operation</th>
					<th>SQL Syntax</th>
				</tr>
			</thead>
			<tbody>
				<tr class="table-primary">
					<td>Create(SQL INSERT)</td>
					<td>INSERT INTO tableName (column1,column2,column3)VALUES(value1,value2,value3);</td>
				</tr>
				<tr class="table-success">
					<td>Read(SQL SELECT)</td>
					<td>SELECT column FROM tableName <br> WHERE column='some value'<br>ORDER BY column1 ASC;</td>
				</tr>
				<tr class="table-warning">
					<td>Update(SQL UPDATE)</td>
					<td>UPDATE tableName SET column1='some different value'<br>WHERE column=1;</td>
				</tr>
				<tr class="table-danger">
					<td>Delete(SQL Delete)</td>
					<td>DELETE FROM table <br>WHERE column=2;</td>
				</tr>
			</tbody>
		</table>
		
	</div>
	 @yield('content')
      
   </div>
      </div>
    </div>  

</body>
</html>
<?php 
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
		 $insert="INSERT INTO paid(house,name,rent,contacts) VALUES('$number','$name','$contact','$amount');";
		 	//run your query
		 $run=mysqli_query($conn,$insert);
		 if($run){
		 	echo "<b>Query Success<b>";
		 	//refresh your browser
		 	header('location: project.php');
		 }else{
		 	die("Query Failed:" .mysqli_error($conn));
		 }
	}
 ?>
 <?php 
 //delete a particular row by assigning a GET variable to each row clicked
 if(isset($_GET['delid'])){


 	$del_query="DELETE FROM members WHERE id=$_GET[delid]";
 	//check for successful delete
 	if(mysqli_query($conn,$del_query)){
 		echo "<b>Delete successful</b>";
 		//reload webpage
 		header("location:project.php");
 	}else{
 		die("delete record failed:" .mysqli_error($conn));
 	}
 	}
  ?>

 