<?php 
	if (!function_exists('Read')) {
	  function Read($fileN){
			$array = array();
		 	$file = fopen($fileN, "r");
			while(! feof($file)) {
				$line = fgets($file);
				$data1 = explode("   ", trim($line));
				$subArray = array();
				for ($i=0; $i < count($data1); $i++) {
					array_push($subArray, trim($data1[$i]));
				}
				array_push($array, $subArray);
			}

			fclose($file);
			return $array;
		}
	}
 ?>