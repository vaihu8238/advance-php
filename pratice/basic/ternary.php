<?php 

$n1 = 10 ; $n2 = 20 ; $n3 = 15; $n4= 52;

$larg = ($n1>$n2) ? ($n1 > $n3 ? $n1:$n3) : ($n2 > $n3 ? $n2:$n3);

echo "num : $larg";

?>

<br><br>
<!-- fabonaci num -->

<?php

$num=0;
$n1 = 0;
$n2 =1;

echo $n1.''.$n2.'';


while($num <10)
{
    $n3 = $n2 + $n1;
    echo $n3;
    $n1 = $n2;
    $n2 = $n3;

    $num = $num+1;
    echo "\n";
}


?>

<br><br>
<!-- find max array -->

<?php 

echo(max(10,2,5,50) . "</br>");
?>


<br><br>

<?php 

function findMaxIndex($arr) {
    
    $max = $arr[0];
    $maxIndex = 0;
    
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $max) {
            $max = $arr[$i];
            $maxIndex = $i;
        }
    }
    
    return ['max' => $max, 'index' => $maxIndex];
}

// Example usage:
$array = [3, 8, 1, 6, 2, 7, 4];
$result = findMaxIndex($array);

echo "Maximum number in array is: " . $result['max'] . " at index " . $result['index'];


?>
<br><br>


<?php 

$arr = ['even','odd'];
$input = 5;

echo ($arr[$input %2]);

?>

