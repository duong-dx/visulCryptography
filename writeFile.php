<?php 
if (!function_exists('writeFile')) {
	function writeFile($array, $fileName) {
		$subTex = '';
		for ($i=0; $i < count($array); $i++) { 
			for ($j=0; $j < count($array[$i]) ; $j++) {
				$value = $array[$i][$j];
				$subTex .= ($value == "255") ? "1" . ',' : $value . ',';
			}
			$subTex = trim($subTex, ",") . ';';
		}
		$text ="[". trim($subTex, ";") ."]";
		$file = fopen($fileName,"w");
		fwrite($file, $text);
		fclose($file);
	}
}
 ?>