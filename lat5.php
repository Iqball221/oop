<?php
function nilaiMax($array)  
{ 
   $n = count($array);  
   $max = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($max < $array[$i]) 
           $max = $array[$i]; 
    return $max;        
}
function nilaiMin($array)  
{ 
   $n = count($array);  
   $min = $array[0]; 
   for ($i = 1; $i < $n; $i++)  
       if ($min > $array[$i]) 
           $min = $array[$i]; 
    return $min;        
} 
   
$array = array(90, 80, 60, 100, 127,81, 51, 99); 
echo "Nilai Maksimum : ".nilaiMax($array); 
echo "<br>"; 
echo "Nilai Minimum : ".nilaiMin($array); 
?>
<?php 
$array = array(20, 10, 20, 4, 100); 
echo "Nilai Maksimum : ".max($array); 
echo "<br>"; 
echo "Nilai Minimum : ".min($array); 
?> 