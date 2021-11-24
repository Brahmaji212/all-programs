<?php

echo "------------------- A ------------------ \n";

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
            echo "  ";
        }
       
    }
    echo "\n";
 }

 echo "------------------- B ------------------ \n";
for($i=1;$i<=10;$i++)
{
    for($j=1;$j<=10;$j++)
    {
        if($i==1  && $j<=9 || $j==1 && $i<=10 || $i==5 && $j<=9 || $i==10 && $j<=9 || $j==10 && $i!=5 && $i!=1 && $i!=10)
        {
            echo "* ";
        }
        else{
            echo "  ";
        }
        
    }
    echo "\n";
}

echo "------------------- C ------------------ \n";

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
           echo " ";
       }
    }
    echo "\n";
}

echo "------------------- D ------------------ \n";
for($i=1;$i<=10;$i++)
{
    for($j=1;$j<=10;$j++)
    {
        if($i==1  && $j<=9 || $j==1 && $i<=10  || $i==10 && $j<=9 || $j==10 && $i!=1 && $i!=10)
        {
            echo "* ";
        }
        else{
            echo "  ";
        }
        
    }
    echo "\n";
}

// php program to print
// alphabet A pattern

// Function to display
// alphabet pattern
// function display($n)
// {
	
// 	// Outer for loop for
// 	// number of lines
// 	for ($i = 0; $i < $n; $i++)
// 	{

// 		// Inner for loop for
// 		// logic execution
// 		for ($j = 0; $j <= floor($n / 2); $j++)
// 		{

// 			// prints two column lines
// 			// print first line of alphabet
// 			// prints middle line		
// 			if (($j == 0 || $j == floor($n / 2)) &&
// 				$i != 0 || $i == 0 && $j != 0 &&
// 				$j != floor($n / 2) ||
				
// 				$i == floor($n / 2))
// 				echo "*";
// 			else
// 				echo " ";
// 		}

// 		echo "\n";
// 	}
// }
// // Driver Function
// $n=7;
// display($n);

// // This code is contributed by mits

