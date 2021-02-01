<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="mid.php" method="post">
	<div class="input-group mb-3">
				<div class="input-group-prepend">
					<label class="input-group-text" for="inputGroupSelect01">month</label>
				</div>
				<select class="custom-select" id="inputGroupSelect01" name="month">

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

	<input type="submit" name="submit" value="submit">
	</form>
</body>

</html>
<?php 
	if(isset($_POST['submit'])){
		//extract($_POST);
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
				echo $value;
			}
		}
}
		
 ?>