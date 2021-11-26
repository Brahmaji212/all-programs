<?php
echo "------------- Armstrong Number ---------";


$count=9999;
for($n=0;$n<=$count;$n++){
$num=$n;
$rem=0;
$sum=0;
while($num > 0)
{
    $rem=$num%10;
    if($num < 1000){
    $sum=$sum+$rem*$rem*$rem;
    $num=$num/10;
    }
    else if($num >= 1000){
    $sum=$sum+$rem*$rem*$rem*$rem;
    $num=$num/10;
    }
    
}
if($n == $sum)
{
    echo "\n $n is Armstrong number  \n";
}

}

for($n=10;$n<=200;$n++){
$rem=0;
$sum=0;
$num=$n;
while(floor($num) )
{
    $rem=$num%10;
    $sum=$sum*10+$rem;
    $num=$num/10;   
}
if($n == $sum)
{
    echo "\n $sum is palindrome \n";
}

}