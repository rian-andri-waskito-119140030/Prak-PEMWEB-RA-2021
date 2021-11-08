<?php 
//Rian Andri Waskito
//119140030
//RAs	
		function bilangan_prima($data){
			for($i=1; $i<=$data; $i++){
				$test = true;

				if($i == 2){
					echo "$i ";
				}else if($i != 1){
					$limit = ($i-1);
					for($j=2; $j<$limit; $j++){
						if($i%$j == 0){
							$test = false;
							break;
						}
					}
					if($test == true){
						echo "$i ";
					}
				}
			}
			echo "</p>";
		}

		echo "<p> Bilangan prima dari 1 - 50 : <br>";
		bilangan_prima(50);
	

?>