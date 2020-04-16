<?php 
if (!function_exists('writeFile')) {
	function writeFile($array, $fileName) {
		$subTex = '';
		for ($i=0; $i < count($array); $i++) { 
			for ($j=0; $j < count($array[$i]) ; $j++) {
					$subTex .= $array[$i][$j] . ',';
			}
			$subTex = trim($subTex, ",") . ';';
		}
		$text ="[". trim($subTex, ";") ."]";
		$file = fopen($fileName,"w");
		echo fwrite($file, $text);
		fclose($file);
	}
}
 ?>