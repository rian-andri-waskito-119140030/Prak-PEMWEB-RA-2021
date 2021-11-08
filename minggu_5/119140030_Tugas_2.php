<?php
//Rian Andri Waskito
//119140030
//RA
		function sort_data($data){
			$jumlah = count($data);

			
			for($i=1; $i < $jumlah; $i++){
				for($j=0; $j < $jumlah-$i; $j++){
					if( $data[$j] > $data[$j+1]){
						$temp = $data[$j];
						$data[$j] = $data[$j+1];
						$data[$j+1] = $temp;
					}
				}
			}

			return $data;
		}

		
		function show_data($data){
			$jumlah = count($data);
			
			for($i=0; $i<$jumlah; $i++){
				echo "$data[$i] ";
				if($i !=$jumlah-1){
					echo "- ";
				}
			}
			echo "</p>";
		}

		
		$data = array('larine', 'aduh', 'qifuat', 'toda', 'anevi', 'samid', 'kifuat');
		
		
		echo "<p>Sebelum data diurutkan : <br>";
		show_data($data);

		
		echo "<p>Setelah data diurutkan : <br>";
		$data = sort_data($data);
		show_data($data);

?>