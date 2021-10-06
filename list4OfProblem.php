<?php 
#algotithm sort array
$numbers = ['9','5','4','2','1','0','22','50','11'];


for ($i=0; $i <count($numbers) ; $i++) { 
    # code...
    for ($s=0; $s <count($numbers) ; $s++) { 
        # code...
        if($numbers[$i] < $numbers[$s]){
            $change = $numbers[$s];
            $numbers[$s] = $numbers[$i];
            $numbers[$i] = $change;
        }
    }
}
print_r($numbers);