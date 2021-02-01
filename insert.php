<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="row text-center">
				<div class="col-6">
 <form action="insert.php" method="post">
 	<div class="form-group">
				<label for="contact">
					house:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the house number" required name="one">
		</div>
 	<div class="form-group">
				<label for="contact">
					creading:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the house number" required name="two">
		</div>
		<div class="form-group">
				<label for="contact">
					preading:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the house number" required name="prev2">
		</div>
		<div class="form-group">
				<label for="contact">
					cbill:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the house number" required name="cbill">
		</div>
		<div class="form-group">
				<label for="contact">
					bal:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the house number" required name="bal">
		</div>
 	<div class="form-group">
				<label for="contact">
					tbill:</label>
					<input type="text" class="form-control" id="name" placeholder="enter the current reading" required name="tbill">
		</div>

		<input type="submit" name="button" class="btn btn-primary btn-block"  value="submit">
 </form>
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
		$insert="INSERT INTO water (houseNo,cReading,pReading,cbill,bal,tbill) VALUES('$one','$two','$prev2','$cbill','$bal','$tbill');";
		 
		 	//run your query
		 $run=mysqli_query($conn,$insert);
		 if($run){
		 	echo "<b>Query Success<b>";
		 	//refresh your browser
		 	header('location: insert.php');
		 }else{
		 	die("Query Failed:" .mysqli_error($conn));
		 }
	}
 ?>