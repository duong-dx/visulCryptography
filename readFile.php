<?php 
	if (!function_exists('Read')) {
	  function Read($fileN){
			$array = array();
		 	$file = fopen($fileN, "r");
			while(! feof($file)) {
				$line = fgets($file);
				$data = trim(trim($line, "["), "]");
				$data1 = explode(";", $data);
				for ($i=0; $i < count($data1); $i++) {
					$subArray = array();
					$data2 = explode(",", $data1[$i]);
					for ($j=0; $j < count($data2); $j++) {
						array_push($subArray, $data2[$j]);
					}
					array_push($array, $subArray);
				}
			}

			fclose($file);
			return $array;
		}
	}
 ?>