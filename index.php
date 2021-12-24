<?php
// total no of steps = $steps
// Path string = $path
//sample function call countingValleys (5, 'UDUUD');
	
function countingValleys($steps, $path) {
    $total_valley = 0;
    $level  = 0;
    $valley = 0;
    $result = 0;
    foreach(str_split($path) as $step){
       if($step == 'U'){
          $level++;
          if($level == 0 && $valley) {
                $valley = 0;
                $result++;
            } 
       }else if($step == 'D'){
            if($level == 0)
                $valley = 1;
            $level--;
       }
    }
    return $result;
    
}
