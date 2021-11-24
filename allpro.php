<?php
// programm for leap year
// $year=1999;
// for($year=1990;$year<=2021;$year++)
// {

// if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )  
// {
//     echo "$year is leap year\n";
// }
// else
// {
//     echo "$year is not leap year\n";
// }
// }
// programm for right angle triangle
if(isset($_POST['submit'])){
    $n=$_POST['input'];


echo "------------------ \n";
for($i=1;$i<=5;$i++)
{
    for($k=5;$k>=$i;$k--)
    {
        echo " ";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo "* ";
    } 
    echo "\n";
}
for($i=5;$i>=1;$i--)
{
   for($k=5;$k>=$i;$k--)
    {
        echo " ";
    }
   for($j=1;$j<=$i;$j++)
   {
    echo "* ";
       
   }
   echo "\n";
}
echo "------------------ \n";
echo "------------------ \n";
for($i=1;$i<=5;$i++)
{
    for($k=5;$k>=$i;$k--)
    {
        echo " ";
    }
    for($j=1;$j<=5;$j++)
    {
        echo "$j ";
    }
    echo "\n";
}
for($i=1;$i<=5;$i++)
{
    for($k=1;$k<=$i;$k++)
    {
        echo " ";
    }
    for($j=1;$j<=5;$j++)
    {
        echo "$j ";
    }
    echo "\n";
}
echo "------------------ \n";

echo "------------------ \n";
for($i=1;$i<=5;$i++)
{
    for($k=5;$k>=$i;$k--)
    {
        echo " ";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo "* ";
    } 
    echo "\n";
}
for($i=1;$i<=5;$i++)
{
    
        echo " ";
   
    for($j=1;$j<=5;$j++)
    {
        echo "* ";
    }
    echo "\n";
}
echo "------------------ \n";
echo "------------------ \n";
for($i=1;$i<=5;$i++)
{
    for($j=5;$j>=$i;$j--)
    {
        echo "$j ";
    }
    echo "\n";
}
for($i=5;$i>=1;$i--)
{
    for($j=5;$j>=$i;$j--)
    {
        echo "$j ";
    }
    
    echo "\n";
}

echo "---------Factorial--------- \n";

$fact=1;
for($n=5;$n>=1;$n--)
{
    $fact=$fact*$n;
}
echo "$fact \n";


echo "--------Factorial using recursion---------- \n";


$i=6;
function fact($n)
{
    if($n<=1)
    {
        return 1;
    }
    else
    {
        
        return $n*fact($n-1);
    }
    
}
echo "Factorial of $i is " .fact($i);
}
?>


<html>
    <head>
        <title>programs</title>
    </head>
    <body>
        <form action="programs.php" method="post">
            <input type="number" name="input" id="input">
            <input type="submit" name="submit" id="submit">
        </form>
    </body>
</html>