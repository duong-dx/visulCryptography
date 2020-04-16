<?php 
if (!function_exists('echoData')) {
	function echoData($layer1, $layer2){
		echo "<br><br><br><br>";
	    echo "layer1 <br>";
	    for($i = 0; $i < count($layer1); $i++) {
	        for($j = 0; $j < count($layer1[$i]); $j++) {
	            echo $layer1[$i][$j] . '&nbsp';
	        }
	        echo '<br>';
	    }

	    echo "<br><br><br><br>";
	    echo "layer2 <br>";
	    for($i = 0; $i < count($layer2); $i++) {
	        for($j = 0; $j < count($layer2[$i]); $j++) {
	            echo $layer2[$i][$j] . '&nbsp';
	        }
	        echo '<br>';
	    }

	    echo "<div>";
	        echo "<div style='width: 50%; float: left'>";
	            echo "layer111" . "<br><table style='border: 1px solid'>";
	            for($i = 0; $i < count($layer1); $i++) {
	                echo "<tr>";
	                for($j = 0; $j < count($layer1[$i]); $j++) {
	                    $data = $layer1[$i][$j];
	                    if ($data == 255) {
	                        echo "<td style='background-color: white; border: 1px solid; width: 22px; height: 22px'>&nbsp;<td>";
	                    } elseif ($data == 0)  {
	                        echo "<td style='background-color: black; border: 1px solid; width: 22px; height: 22px'>&nbsp;<td>";
	                    }
	                }
	                echo "</tr>";
	            }
	            echo "</table>";
	        echo"</div>";
	        echo "<div class='width: 50%; float: left'>";
	            echo "layer2222"."<br><table style='border: 1px solid'>";
	            for($i = 0; $i < count($layer2); $i++) {
	                echo "<tr>";
	                for($j = 0; $j < count($layer2[$i]); $j++) {
	                    $data = $layer2[$i][$j];
	                    if ($data == 255) {
	                        echo "<td style='background-color: white; border: 1px solid; width: 22px; height: 22px'>&nbsp;<td>";
	                    } elseif ($data == 0)  {
	                        echo "<td style='background-color: black; border: 1px solid; width: 22px; height: 22px'>&nbsp;<td>";
	                    }
	                }
	                echo "</tr>";
	            }
	          	echo "</table>";
	        echo"</div>";
   		echo"</div>";
	}
}
 ?>