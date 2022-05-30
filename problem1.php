<?php
$maths=90;
$physics=91;
$chemistry=93;
$english=95;
$social=92;
$grade="";
$total=$maths+$physics+$chemistry+$english+$social;
$percentage=($total/500)*100;
if ($percentage>80){
     $grade="A";
}else if($percentage >60){
    $grade="B";
}
else if($percentage >45){
    $grade="C";
}else{
    $grade="Fail";
}

echo "Total is $total and percentage is $percentage and grade is $grade";
?>