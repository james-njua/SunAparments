<?php 

for($i=19;$i<=50;$i++){
			$monthA=[
			"january"=>01,
			"february"=>02,
			"march"=>03,
			"April"=>04,
			"may"=>05,
			"june"=>06,
			"july"=>07,
			
			"october"=>10,
			"november"=>11,
			"december"=>12
		];
		foreach ($monthA as $key => $value) {
			# code...
			
				$mid=$i .".".$value;
				
			echo $mid."<br> ";
		}
 }
?>
