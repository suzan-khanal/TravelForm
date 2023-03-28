<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>
<body>
    <div class="container">
    This is my first php Website.
    <?php 
    //Constants
    define('PI', 3.14);
echo "Hello world!! This is Printed Using PHP";
     
     //Single line Comment

     /*
     Multi 
     line 
     comment */
     ?>
     <?php

     $variable1 = 5;

     $variable2 = 2;
     echo "<br>";
     echo $variable1;
     echo "<br>";
     echo $variable2;
     echo "<br>";
     
     echo $variable1 + $variable2;


    //  Operators in PHP
    //  Arithmetic Operators
    echo "<br>";
    echo "The sum of Variable1 + Variable2 is :";
    echo $variable1 + $variable2;

    echo "<br>";
    echo "The Difference of Variable1 - Variable2 is :";
    echo $variable1 - $variable2;


    echo "<br>";
    echo "The Multiplication of Variable1 * Variable2 is :";
    echo $variable1 * $variable2;

    echo "<br>";
    echo "The Division of Variable1 / Variable2 is :";
    echo $variable1 / $variable2;

    //Assignment Operators
     $newVar = $variable1;
     //$newVar += 1;
     //$newVar -= 1;
     //$newVar *= 2;
     //$newVar /= 5;




     echo "<br>";
     echo "The Value of new Variable is : ";
     echo $newVar;


     //Coomparison Operators
     echo "<br>";
     //echo " <h1> Comparison Operators </h1> ";
     // Comparison Operators returns BOOLEAN. i.e. Returns True Or False. Used in if..else Statement.
     echo "The value of 1==4 is ";
     echo var_dump(1==4);
     echo "<br>";

     echo "The value of 1!=4 is ";
     echo var_dump(1!=4);
     echo "<br>";

     echo "The value of 1>=4 is ";
     echo var_dump(1>=4);
     echo "<br>";

     echo "The value of 1<=4 is ";
     echo var_dump(1<=4);
     echo "<br>";




    //  Increment/Decrement Operators

    //$variable1++;
    /*echo $variable1++; //Prints variable first & increments
    //echo "<br>";
    //echo $variable1;
    echo "<br>"*/

    //$variable1--;

    /*echo $variable1--; //Prints variable first & decrements
    echo "<br>";
    echo $variable1;
    echo "<br>";
    */

    //++$variable1;
    /*echo ++$variable1; // Increments first then Displays.
    echo "<br>";
    echo $variable1;
    echo "<br>";*/


    //--$variable1;
      /*echo --$variable1; // Decrements first then Displays.
    echo "<br>";
    echo $variable1;
    echo "<br>";
    */
    




    //  Logical Operator
    /*and(&&)
    or(||)
    xor
    !
    */

     //$myVar = (true and true); // 1 and 1 = 1
     //$myVar = (false and true);  // 0 and 1 = 1
     //$myVar = (true and false); // 1 and 0 = 0
     //$myVar = (false and false); // 0 and 0 = 0
      //echo "<br>";
     //echo var_dump($myVar);

     // For or
  //$myVar = (true or false); // 1 or 0 = 1
      //echo "<br>";
     //echo var_dump($myVar);

       // For Xor
       //$myVar = (true xor true);  // 1 xor 1 = 0
      // $myVar = (false xor false); // 0 xor 0 = 0
      //$myVar = (true xor false); // 1 xor 0 = 1
     // $myVar = (false xor true); // 0 xor 1 = 1
       //echo "<br>";
      // echo var_dump($myVar);


     ?>
     <?php
     // echo "Hello World ";
     // Data types in php
    /* 1. String
     2. Integer
     3. Float
     4. Boolean 
     5. Array 
     6. Object
     */
   
    /*echo "<br>";
    $var = "This is a string";
    echo var_dump($var);
    */

    /*echo "<br>";
    $var = 67;
    echo var_dump($var);
    */

    /*echo "<br>";
    $var = 67.1;
    echo var_dump($var);
    */

    /*echo "<br>";
    $var = true;
    echo var_dump($var);
    */
    echo PI; //Constant. strings can be constant and also array can be constant.

     ?>
    </div>
</body>
</html>