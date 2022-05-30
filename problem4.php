<?php
$num=371;
$num1=$num;
$sum=0;
while($num>1){
    $x=$num%10;// 4  3 2 1
    
    $sum=$sum+pow($x,3);//4 7 9 10
    $num=$num/10;//123  12 1

}
if($sum===$num1){
    echo "The given number $num1 is a armstrong number";
}
else{
    echo "The given number $num1 is not a armstrong number";
}
?>