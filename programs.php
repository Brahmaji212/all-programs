<html>
    <head>
        <title>programs</title>
        <style>
            .content{
                background-color: burlywood;
                padding-left: 650px;
                padding-top: 50px;

            }
            input#input{
                background-color: transparent;
                padding-bottom: 10px;
                padding-top: 10px;
                padding-left: 10px;
                padding-right: 10px;
                border-color: green;
                border-radius: 5px;
                
                
            }
            input#input1
            {
                border-color: green;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 5px;
                background-color: transparent;
                
            }
            label{
                color: green;
                align-self: center;
                font-size: 20px solid ;
                font-weight: 700;
            }
            input#submit{
                color: white;
                background-color: blue;
                
            }
            button
            {
                background-color: red;
                color: white;
            }
            .buttons
            {
                padding-left: 40px;
            }
            div.programs
            {
                display: block;
                background-color: black;
                color: white;
                padding-left: 20px;
               
            }
           div.error
           {
               color: red;
               padding-left: 620px;
               background-color: whitesmoke;
               font-weight: 700;
           } 
           div.devide
           {
               color: white;
               background-color:  grey;
           }
       
        </style>
    </head>
    <body>
        <div class="content">
        <form action="programs.php" method="post">
            <label for="num">number for pattern programs</label> <br>
            <input type="text" name="input" id="input" autocomplete="off"><br><br>
            <label for="letter">Enter Alphabet to print </label><br>
            <input type="text" name="input1" id="input1" autocomplete="off"><br><br>
            <div class="buttons">
            <input type="submit" name="submit" id="submit" onclick="myfun1();">
            <button type="submit" value="clear" name="clear" onclick="myfun();">clear </button>
            </div>
        </form>
        </div>
    </body>
</html>



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

if(isset($_POST['submit']) == true && $_POST['input'] == '  ')
{
    echo '<div class="error">';
    echo " PLEASE &nbsp; ENTER &nbsp; ANY &nbsp; INPUT";
    echo '</div>';
}


if(isset($_POST['submit']) && $_POST['input'] == true){
    echo '<div id=programs class="programs"> ';
    $n=$_POST['input'];

    if($n <=90){
        echo "--------- rombus for $n. --------- <br>"; 

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
echo "Factorial of $n is " .fact($n)."<br><br><br>";


echo "--------------Fibonacci series of &nbsp; $n-------------------- <br> <br>";

$n1=0;
$n2=1;
if($n<=1 || $n>1)
{
    echo $n1." ".$n2;
}
for($i=1;$i<=$n;$i++)
{
    $n3=$n1+$n2;
    
    echo " ".$n3;
    $n1=$n2;
    $n2=$n3;
}
echo "<br>";


echo " <br>--------------perl series of &nbsp; $n-------------------- <br> <br>";

$n1=0;
$n2=1;
$n3=2;
if($n<=2 || $n>2)
{
    echo $n1." ".$n2." ".$n3;
}
for($i=1;$i<=$n;$i++)
{
    $n4=$n1+$n2+$n3;
    
    echo " ".$n4;
    $n1=$n2;
    $n2=$n3;
    $n3=$n4;
}
echo "<br>";
    }

echo "------------- Armstrong Number --------- <br>";

$rem=0;
$sum=0;
$num=$n;


if($num < 999 ){
while($num > 0)
{
    
    $rem=$num%10;
    $sum=$sum+$rem*$rem*$rem;
    $num=$num/10;
}
}    
 else  if($num > 999 ){
    while($num > 0){  
    $rem=$num%10;
        $sum=$sum+$rem*$rem*$rem*$rem;
        $num=$num/10;
        }
}

if($n == $sum)
{
    echo "$n is Armstrong number <br><br>";
}
else{
    echo "$n is not Armstrong Number <br>";
}

echo "<br> ---------Palindrome using loop --------<br>";

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
    echo "<br> $n is palindrome <br>";
}
else{
    echo "<br> $n is not palindrome <br>";
}

echo "<br> ---------Palindrome using reverse string -------- <br>";

$rev=strrev($num);
if($n == $rev)
{
    echo "<br> $n is palindrome <br>";
}
else{
    echo "<br> $n is not palindrome <br>";
    
}


echo '</div>';
    
}

// Alphabets page started

if(isset($_POST['submit']) && $_POST['input1'] == true){

    echo '<div class="devide">';
    echo "<br><br>";
    echo '</div>';

    echo '<div class="programs">';
    $char=$_POST['input1'];

echo "------------------- ALPHABETS ------------------ <br> <br>";
if($char == 'A' ){

echo "------------------- A ------------------ <br>";

for($i=1;$i<=10;$i++)
{
    for($j=1;$j<=10;$j++)
    {
        if(($i==1 && $j!=1 && $j!=10) || ($j==1 && $i!=1) || $j==10 && $i!=1 || $i==5)
        {
            echo "* ";
        }
        else
        {
            echo "&nbsp;&nbsp;&nbsp;";
        }
       
    }
    echo "<br>";
 }
}

if($char == 'B'){
 echo "------------------- B ------------------ <br>";
for($i=1;$i<=10;$i++)
{
    for($j=1;$j<=10;$j++)
    {
        if($i==1  && $j<=9 || $j==1 && $i<=10 || $i==5 && $j<=9 || $i==10 && $j<=9 || $j==10 && $i!=5 && $i!=1 && $i!=10)
        {
            echo "* ";
        }
        else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
        
    }
    echo "<br>";
}
}

if($char == 'C'){
echo "------------------- C ------------------ <br>";

for($j=1;$j<=10;$j++)

{
    for($i=1;$i<=10;$i++)
    {
        if($i==1 && $j!=1 && $j!=10 || $j==10 && $i!=1 || $j==1 && $i!=1 )
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'D'){
echo "------------------- D ------------------ <br>";
for($i=1;$i<=10;$i++)
{
    for($j=1;$j<=10;$j++)
    {
        if($i==1  && $j<=9 || $j==1 && $i<=10  || $i==10 && $j<=9 || $j==10 && $i!=1 && $i!=10)
        {
            echo "* ";
        }
        else{
            echo "&nbsp;&nbsp;&nbsp;";
        }
        
    }
    echo "<br>";
}
}

if($char == 'E'){
echo "------------------- E ------------------ <br>";

for($j=1;$j<=10;$j++)

{
    for($i=1;$i<=10;$i++)
    {
        if($i==1  || $j==10  || $j==1 || $j==5 )
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'F'){
echo "------------------- F ------------------ <br>";

for($j=1;$j<=10;$j++)

{
    for($i=1;$i<=10;$i++)
    {
        if($i==1    || $j==1 || $j==5 )
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'G'){
echo "------------------- G ------------------ <br>";

for($i=1;$i<=10;$i++)

{
    for($j=1;$j<=10;$j++)
    {
        if($i==1 && $j!=1 && $j!=10 || $j==1 && $i!=1 && $i!=10 || $i==10 && $j!=1 && $j!=10 || $i==5 && $j!=1 && $j!=2 && $j!=3 && $j!=4 && $j!=5 
        || $j==10 && $i!=1 && $i!=2 && $i!=3 && $i!=4 && $i!=5 && $i!=10)
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'H'){
echo "------------------- H ------------------ <br>";

for($j=1;$j<=10;$j++)

{
    for($i=1;$i<=10;$i++)
    {
        if($i==1    || $i==10 || $j==5 )
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}
if($char == 'I'){
echo "------------------- I ------------------ <br>";

for($j=1;$j<=10;$j++)

{
    for($i=1;$i<=10;$i++)
    {
        if($j==1    || $j==10 || $i==5 )
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'J'){
echo "------------------- J ------------------ <br>";

for($j=1;$j<=10;$j++)

{
    for($i=1;$i<=10;$i++)
    {
        if($j==1 && $i<=7 && $i!=1  || $j==10 && $i<=6 && $i!=1 || $i==7 && $j!=10 || $j==9 && $i==2)
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'K'){
echo "------------------- K ------------------ <br>";

for($i=1;$i<=10;$i++)

{
    for($j=1;$j<=10;$j++)
    {
        if($j==1  || $j==10 && $i==1 || $j==10 && $i==10 || $j==9 && $i==9  || $j==9 && $i==2 || $j==8 && $i==3 || $j==7 && $i==4 || $j==6 && $i==5
        || $j==8 && $i==8 || $j==7 && $i==7 || $j==6 && $i==6 ||  $i==5 && $j<=5)
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'L'){
echo "------------------- L ------------------ <br>";

for($j=1;$j<=10;$j++)

{
    for($i=1;$i<=10;$i++)
    {
        if($i==1 || $j==10 )
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'M'){
echo "------------------- M ------------------ <br>";

for($i=1;$i<=11;$i++)

{
    for($j=1;$j<=11;$j++)
    {
        if($j==11 && $i!=1 && $i<=7|| $j==1 && $i!=1 && $i<=7 || $i==1 && $j!=11 && $j!=1  && $j!=6 ||
        $i==2 && $j==6 || $i==3 && $j==6)
        {
            echo "* ";
        }
       else
       {
           echo "&nbsp;&nbsp;&nbsp;";
       }
    }
    echo "<br>";
}
}

if($char == 'N'){
    echo "------------------- N ------------------ <br>";
    
    for($i=1;$i<=11;$i++)
    
    {
        for($j=1;$j<=11;$j++)
        {
            if($j==1 || $j==11 ||  $i==2 && $j==2 || $i==3 && $j==3 || $i==4 && $j==4 || $i==5 && $j==5
            || $i==6 && $j==6 || $i==7 && $j==7 || $i==8 && $j==8 || $i==9 && $j==9 || $i==10 && $j==10)
            {
                echo "* ";
            }
           else
           {
               echo "&nbsp;&nbsp;&nbsp;";
           }
        }
        echo "<br>";
    }
    }
    if($char == 'O'){
        echo "------------------- O ------------------ <br>";
        
        for($j=1;$j<=10;$j++)
        
        {
            for($i=1;$i<=10;$i++)
            {
                if($i==1 && $j!=1 && $j!=10 || $j==10 && $i!=1 && $i!=10 || $j==1 && $i!=1 && $i!=10 || $i==10 && $j!=1 && $j!=10)
                {
                    echo "* ";
                }
               else
               {
                   echo "&nbsp;&nbsp;&nbsp;";
               }
            }
            echo "<br>";
        }
        }

        if($char == 'P'){
            echo "------------------- P ------------------ <br>";
            
            for($i=1;$i<=10;$i++)
            
            {
                for($j=1;$j<=10;$j++)
                {
                    if($j==1 || $i==1 && $j<=6|| $j==7 && $i<=5 && $i!=1 || $i==6 && $j<=6)
                    {
                        echo "* ";
                    }
                   else
                   {
                       echo "&nbsp;&nbsp;&nbsp;";
                   }
                }
                echo "<br>";
            }
            }
            if($char == 'Q'){
                echo "------------------- Q ------------------ <br>";
                
                for($i=1;$i<=10;$i++)
                
                {
                    for($j=1;$j<=10;$j++)
                    {
                        if($j==1 && $i!=1 && $i<=7 || $i==1 && $j!=1 && $j!=10 || $j==10 && $i!=1 && $i<=7 || $i==8 && $j!=1 && $j!=10 || $j==7 && $i==9 || $j==8 && $i==10)
                        {
                            echo "* ";
                        }
                       else
                       {
                           echo "&nbsp;&nbsp;&nbsp;";
                       }
                    }
                    echo "<br>";
                }

                echo " programm for printing Q <br>";
                echo '
                <pre>
                for($i=1;$i<=10;$i++) 
                
                { 
                    for($j=1;$j<=10;$j++)
                    {
                        if($j==1 && $i!=1 && $i<=7 || $i==1 && $j!=1 && $j!=10 || $j==10 && $i!=1 && $i<=7 || $i==8 && $j!=1 && $j!=10 || $j==7 && $i==9 || $j==8 && $i==10)
                        {
                            echo "* ";
                        }
                       else
                       {
                           echo "&nbsp;&nbsp;&nbsp;";
                       }
                    }
                    echo "\n";
                } 
                </pre>
                ';
                }    
        echo '</div>';
    }

?>



<script>
    function myfun1(){
    var x= document.getElementById("input");
    document.getElementById("input").innerHTML= x;
    $var1 = document.getElementById("input1");
    document.getElementById("input").innerHTML= $var1;
    }
    function myfun()
    {
        
        document.getElementById("programs").innerHTML = ' ';
        // window('href: programs.php');
        
    }
</script>