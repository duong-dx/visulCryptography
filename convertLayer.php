<?php 
if (!function_exists('covertLayer')) {
	// 255 trang 
	//0 la den
	function covertLayer($arr) {
		$layer1 = array();
    	$layer2 = array();
	    for($i = 0; $i < count($arr); $i++) {
	        $subLayer11 = array();
	        $subLayer12 = array();
	        $subLayer21 = array();
	        $subLayer22 = array();
	       for($j = 0; $j < count($arr[$i]); $j++) {
	           $dataRandom = rand(1, 6);
	           $data = $arr[$i][$j];
	           switch ($dataRandom) {
	               case 1:
	                   if ($data == 255) {
	                       array_push($subLayer11, 255, 0);
	                       array_push($subLayer12, 255, 0);
	                       array_push($subLayer21, 255, 0);
	                       array_push($subLayer22, 255, 0);
	                   } elseif ($data == 0) {
	                       array_push($subLayer11, 255, 0);
	                       array_push($subLayer12, 255, 0);
	                       array_push($subLayer21, 0, 255);
	                       array_push($subLayer22, 0, 255);
	                   }
	                   break;
	               case 2:
	                   if ($data == 255) {
	                       array_push($subLayer11, 0, 255);
	                       array_push($subLayer12, 0, 255);
	                       array_push($subLayer21, 0, 255);
	                       array_push($subLayer22, 0, 255);
	                   } elseif ($data == 0) {
	                       array_push($subLayer11, 0, 255);
	                       array_push($subLayer12, 0, 255);
	                       array_push($subLayer21, 255, 0);
	                       array_push($subLayer22, 255, 0);
	                   }
	                   break;
	               case 3:
	                   if ($data == 255) {
	                       array_push($subLayer11, 0, 0);
	                       array_push($subLayer12, 255, 255);
	                       array_push($subLayer21, 0, 0);
	                       array_push($subLayer22, 255, 255);
	                   } elseif ($data == 0) {
	                       array_push($subLayer11, 0, 0);
	                       array_push($subLayer12, 255, 255);
	                       array_push($subLayer21, 255, 255);
	                       array_push($subLayer22, 0, 0);
	                   }
	                   break;
	               case 4:
	                   if ($data == 255) {
	                       array_push($subLayer11, 255, 255);
	                       array_push($subLayer12, 0, 0);
	                       array_push($subLayer21, 255, 255);
	                       array_push($subLayer22, 0, 0);
	                   } elseif ($data == 0) {
	                       array_push($subLayer11, 255, 255);
	                       array_push($subLayer12, 0, 0);
	                       array_push($subLayer21, 0, 0);
	                       array_push($subLayer22, 255, 255);
	                   }
	                   break;
	               case 5:
	                   if ($data == 255) {
	                       array_push($subLayer11, 255, 0);
	                       array_push($subLayer12, 0, 255);
	                       array_push($subLayer21, 255, 0);
	                       array_push($subLayer22, 0, 255);
	                   } elseif ($data == 0) {
	                       array_push($subLayer11, 255, 0);
	                       array_push($subLayer12, 0, 255);
	                       array_push($subLayer21, 0, 255);
	                       array_push($subLayer22, 255, 0);
	                   }
	                   break;
	               case 6:
	                   if ($data == 255) {
	                       array_push($subLayer11, 0, 255);
	                       array_push($subLayer12, 255, 0);
	                       array_push($subLayer21, 0, 255);
	                       array_push($subLayer22, 255, 0);
	                   } elseif ($data == 0) {
	                       array_push($subLayer11, 0, 255);
	                       array_push($subLayer12, 255, 0);
	                       array_push($subLayer21, 255, 0);
	                       array_push($subLayer22, 0, 255);
	                   }
	                   break;
	               default:
	                   if ($data == 255) {
	                       array_push($subLayer11, 255, 0);
	                       array_push($subLayer12, 255, 0);
	                       array_push($subLayer21, 255, 0);
	                       array_push($subLayer22, 255, 0);
	                   } elseif ($data == 0) {
	                       array_push($subLayer11, 255, 0);
	                       array_push($subLayer12, 255, 0);
	                       array_push($subLayer21, 0, 255);
	                       array_push($subLayer22, 0, 255);
	                   }
	           }

	       }
	       array_push($layer1, $subLayer11);
	       array_push($layer1, $subLayer12);
	       array_push($layer2, $subLayer21);
	       array_push($layer2, $subLayer22);
   		}

   		return [
   			'layer1' => $layer1,
   			'layer2' => $layer2,
   		];
	}
}
?>