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
           echo "  ";
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

echo "------------------- E ------------------ \n";

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
           echo " ";
       }
    }
    echo "\n";
}

echo "------------------- F ------------------ \n";

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
           echo " ";
       }
    }
    echo "\n";
}

echo "------------------- G ------------------ \n";

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
           echo "  ";
       }
    }
    echo "\n";
}


echo "------------------- H ------------------ \n";

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
           echo "  ";
       }
    }
    echo "\n";
}
echo "------------------- I ------------------ \n";

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
           echo "  ";
       }
    }
    echo "\n";
}
echo "------------------- J ------------------ \n";

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
           echo "  ";
       }
    }
    echo "\n";
}

echo "------------------- K ------------------ \n";

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
           echo "  ";
       }
    }
    echo "\n";
}


echo "------------------- L ------------------ \n";

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
           echo "  ";
       }
    }
    echo "\n";
}