<?php
echo "------------- Armstrong Number ---------";


$count=500;
for($n=0;$n<=$count;$n++){
$num=$n;
$rem=0;
$sum=0;
while($num > 0)
{
    $rem=$num%10;
    $sum=$sum+$rem*$rem*$rem;
    $num=$num/10;
}
if($n == $sum)
{
    echo "\n $n is Armstrong number \n";
}
// else{
//     echo "\n $n is not Armstrong Number \n";
// }
}