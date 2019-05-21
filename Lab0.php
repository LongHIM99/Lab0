<!DOCTYPE html>
<html>
<head>
<title>Lab0</title>
</head>
<body>
<?php
    
    $listArray = array(1000,2,3,4,5,6,7,8,9,10,200,99);
    $n = count($listArray);
    $max = $listArray[0];
    for($i = 1;$i < $n; $i++){
        if ($max < $listArray[$i]){
            $max = $listArray[$i];
        }
    }echo "The max value is : ".$max ."<br>";
    
    $min = $listArray[0];
    for($i = 1;$i < $n;$i++){
        if($min > $listArray[$i]){
            $min = $listArray[$i];
        }
    }echo "The min value is : ".$min;
    
    
    // $min = $listArray[0];
    // if ($listArray < $min) {
    //     $min = $listArray;
    //     # code...
    // }
    // echo "The min value is : ".$min;
    ?>


</body>
</html>