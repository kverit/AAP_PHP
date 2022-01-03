<?php

////////////////////////// 1

$array = [];

for( $i = 0; $i < 10000; $i++){         // Массив                
    $array[] = rand(0, 10000);
}
$array = array_unique($array);          // Убираем повторяющиеся элементы в массиве



function bubbleSort($array){            
    for($i=0; $i<count($array); $i++){
$count = count($array);
       for($j=$i+1; $j<$count; $j++){
           if($array[$i]>$array[$j]){
               $temp = $array[$j];
               $array[$j] = $array[$i];
               $array[$i] = $temp;
           }
      }         
   }
   return $array;
}

// $startTime = microtime(true);

// bubbleSort($array);                                  // Пузырьковая сортировка
// $endTime = microtime(true);
// echo "Time of Bubble sort: " . ( $endTime - $startTime );
// echo PHP_EOL;

function shakerSort ($array) {         
    $n = count($array);
    $left = 0;
    $right = $n - 1;

    do {
        for ($i = $left; $i < $right; $i++) {
            if ($array[$i] > $array[$i + 1]) {
                list($array[$i], $array[$i + 1]) = array($array[$i + 1], $array[$i]);
                }
        }
        $right -= 1;
        for ($i = $right; $i > $left; $i--) {
            if ($array[$i] < $array[$i - 1]) {
                list($array[$i], $array[$i - 1]) = array($array[$i - 1], $array[$i]);
                }
        }
        $left += 1;
    } while ($left <= $right);
}
    
// $startTime = microtime(true);
// shakerSort($array);                                      // Шейкерная сортировка
// $endTime = microtime(true);
// echo "Time of Shaker sort: " . ( $endTime - $startTime );
// echo PHP_EOL;

function quickSort($array, $low = null, $high = null) {  
    
    if ($low !== null && $high !== null){
        $i = $low;                
        $j = $high;
    } else {
        $i = $low = 0;                
        $j = $high = count($array) - 1 ;
    }
    
    $middle = $array[ ( $low + $high ) / 2 ];
    
    do {
        while($array[$i] < $middle) {
            ++$i;
        }  
        while($array[$j] > $middle) {
            --$j;
        }   
        if($i <= $j) {           

            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;

            $i++; 
            $j--;
        }
    } while($i < $j);
    
    if($low < $j){

      quickSort($array, $low, $j);
    }

    if($i < $high){

      quickSort($array, $i, $high);
    }
}

// $startTime = microtime(true);
// quickSort($array);                                       // Быстрая сортировка
// $endTime = microtime(true);
// echo "Time of Quick sort: " . ( $endTime - $startTime );
// echo PHP_EOL;



function heapify(&$array, $countArr, $i)        
{

    $largest = $i; 
    $left = 2*$i + 1; 
    $right = 2*$i + 2; 

    if ($left < $countArr && $array[$left] > $array[$largest]){
        $largest = $left;
    }

    if ($right < $countArr && $array[$right] > $array[$largest]){
        $largest = $right;
    }

    if ($largest != $i)
    {
        $swap = $array[$i];
        $array[$i] = $array[$largest];
        $array[$largest] = $swap;

        heapify($array, $countArr, $largest);
    }
}


function heapSort(&$array)
{
    $countArr = count($array);
    
    for ($i = $countArr / 2 - 1; $i >= 0; $i--){
        heapify($array, $countArr, $i);
    }
    
    for ($i = $countArr-1; $i >= 0; $i--)
    {
        
        $temp = $array[0];
        $array[0] = $array[$i];
        $array[$i] = $temp;

        
        heapify($array, $i, 0);
    }
}


$startTime = microtime(true);
heapSort($array);                                       // Пирамидальная сортировка
$endTime = microtime(true);
echo "Time of Heapify sort: " . ( $endTime - $startTime );
echo PHP_EOL;



////////////////////////////// 2,  3 

function binarySearch ($myArray, $num) {

    $left = 0;
    $right = count($myArray) - 1;
    $stepCount = 0;
    
    while ($left <= $right) {
    
        $middle = floor(($right + $left)/2);
         
        if ($myArray[$middle] === $num) {
            echo "Колличество шагов: " . $stepCount;
            return $middle;
        } elseif ($myArray[$middle] > $num) {
   
            $right = $middle - 1;
        } elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
        $stepCount++;                                     // Подсчет колличества шагов
    }
    return null;
}

$num = 38;                                                // Искомый элемент

$search = binarySearch($array, $num);
$deleteElem = array_splice($array, $search, 1);           // Удаление элемента