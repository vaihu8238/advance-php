<?php

$physics = 90;
$biology = 90;
$camestry = 90;
$mathemetics = 90;
$computer = 90;

$total = 0;
$avrage = 0;
$percentage =0;
$grade =0;


$total = $physics + $biology + $camestry + $mathemetics + $computer ;
$avrage = $total / 0.5 ;//avarage
$percentage = ($total/500)*100;


if ($avrage >=90)
{
    $grade = "A";
}
elseif($avrage >= 80 && $avrage < 90)
{
    $grade = "B";
}
elseif($avrage >=70 && $avrage < 80)
{
    $grade = "C";
}
elseif($avrage >=60 && $avrage < 70)
{
    $grade = "D";
}
else{
    $grade = "E";
}

echo "total is = " . $total . "/500 <br>";
echo "avrage marks is = ". $avrage . "<br>";
echo "percentage is = " . $percentage . "%<br>";
echo "grade is = " . $grade . "<br>";

?>