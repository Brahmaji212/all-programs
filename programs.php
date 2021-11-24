<?php
// programm for leap year
// $year=1999;
// for($year=1990;$year<=2021;$year++)
// {

// if( (0 == $year % 4) and (0 != $year % 100) or (0 == $year % 400) )  
// {
//     echo "$year is leap year<br>";
// }
// else
// {
//     echo "$year is not leap year<br>";
// }
// }
// programm for right angle triangle
if(isset($_POST['submit'])){
    $n=$_POST['input'];


echo "------------------ <br>"; 
for($i=1;$i<=$n;$i++)
{
    for($k=$n;$k>=$i;$k--)
    {
        echo "&nbsp; ";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo "* &nbsp;";
    } 
     echo "<br>";
}
for($i=$n;$i>=1;$i--)
{
   for($k=$n;$k>=$i;$k--)
    {
        echo "&nbsp; ";
    }
   for($j=1;$j<=$i;$j++)
   {
    echo "* &nbsp;";
       
   }
   echo "<br>";
}
echo "------------------ <br>";
echo "------------------ <br>";
for($i=1;$i<=$n;$i++)
{
    for($k=$n;$k>=$i;$k--)
    {
        echo "&nbsp; ";
    }
    for($j=1;$j<=$n;$j++)
    {
        echo "$j &nbsp;";
    }
    echo "<br>";
}
for($i=1;$i<=$n;$i++)
{
    for($k=1;$k<=$i;$k++)
    {
        echo "&nbsp; ";
    }
    for($j=1;$j<=$n;$j++)
    {
        echo "$j &nbsp;";
    }
    echo "<br>";
}
echo "------------------ <br>";

echo "------------------ <br>";
for($i=1;$i<=$n;$i++)
{
    for($k=$n;$k>=$i;$k--)
    {
        echo "&nbsp; ";
    }
    for($j=1;$j<=$i;$j++)
    {
        echo "* &nbsp;";
    } 
    echo "<br>";
}
for($i=1;$i<=$n;$i++)
{
    
        echo "&nbsp; ";
   
    for($j=1;$j<=$n;$j++)
    {
        echo "* &nbsp;";
    }
    echo "<br>";
}
echo "------------------ <br>";
echo "------------------ <br>";
for($i=1;$i<=$n;$i++)
{
    for($j=$n;$j>=$i;$j--)
    {
        echo "$j ";
    }
    echo "<br>";
}
for($i=$n;$i>=1;$i--)
{
    for($j=$n;$j>=$i;$j--)
    {
        echo "$j ";
    }
    
    echo "<br>";
}

echo "---------Factorial using for loop--------- <br>";

$fact=1;
for($num=$n;$num>=1;$num--)
{
    $fact=$fact*$num;
}
echo "$fact <br>";


echo "--------Factorial using recursion---------- <br>";



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
echo "Factorial of $n is " .fact($n);
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