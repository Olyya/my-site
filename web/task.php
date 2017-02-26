<?php
/**
* sorting
*/
class Sorting 
{
	function debugger($theValue){
		print ( '<pre>' )  ;
		print_r ($theValue ) ;
		print ( '</pre>' ) ;
	}
	// $MyArray = array(5,1,7,9,10,8,5,4,2,3,6,0);
	function bubbleSorting($MyArray){
		echo "Bubble sorted array";
		$Sort = new Sorting();
		$Sort->debugger($MyArray);
		$swap = 0;
		$res = 1;
		while ($res > 0) {
			$res = 0;
			for ($i=1; $i < count($MyArray); $i++){ 
				if($MyArray[$i] < $MyArray[$i-1] ){
					$buff = $MyArray[$i];
					$MyArray[$i] = $MyArray[$i-1];
					$MyArray[$i-1] = $buff;
					$swap = 1;
				}else{
					$swap = 0;
				}
			$res = $res + $swap;
			}
		}
	$Sort->debugger($MyArray);
	}

	function selectionSorting($MyArray) {
		echo "Selection Sorted array";
		$Sort = new Sorting();
		$Sort->debugger($MyArray);
        for ($i=0; $i<count($MyArray); $i++) {
            $min=$i;
            for ($j=$i+1; $j<count($MyArray); $j++) {
                if($MyArray[$j] < $MyArray[$min]) {
                    $min=$j;
                }
            }
            $buff=$MyArray[$min];
            $MyArray[$min]=$MyArray[$i];
            $MyArray[$i]=$buff;
        }
        $Sort->debugger($MyArray);
	}
}
	$arr = array(5,1,7,9,10,8,5,4,2,3,6,0);
	$Sort = new Sorting();
	$Sort -> bubbleSorting($arr);
	$Sort -> selectionSorting($arr);
?>