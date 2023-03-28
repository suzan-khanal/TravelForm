<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorials</title>
</head>
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    .container{
        max-width: 80%;
        background-color: rgb(228, 195, 195);
        margin: auto;
        padding: 23px; 
    }

    </style>
<body>
    <div class="container">
<h1>Let's Learn about PHP</h1>
   <p>Your Party Status is Here:</p>
     <br>
        <?php
   $age = 34;
   if($age>18){
    echo "You can go to the party";
   }
   else if($age==7)
   {
    echo "You are Seven Years old";
   }
   else if($age==6)
   {
    echo "You are Six Years old";
   }

   else{
    echo "You can not go to the party";
   }
   echo "<br>";

  /* //Array is a Special variable that can hold more than one value at a time.
   $languages = array("Python", "C++", "php", "NodeJs");
   //echo $languages[0]; //Python will be Displayed.
   //echo $languages[1]; //C++ will be Displayed.
  // echo $languages[2]; //php will be Displayed.
  // echo $languages[3]; //NodeJs will be Displayed.


  echo "<br>";
  // methods in array
  //count() method returns number of elements in array.
  echo count($languages);//returns 4.
  */


  //Loops in php
  $a = 0;
  while ($a <= 10) {
    echo "<br>";
    echo "The value of a is : ";
    echo $a;
    $a++;
    
    # code...
  }  
   //Iterating arrays in php using while loop.
   $languages = array("Python", "C++", "php", "NodeJs");
   $a = 0;
   /*while ($a < count($languages)) {
     echo "<br>";
     echo "The value of language is : ";
     echo $languages[$a];
     $a++;
     
     # code...
   }*/
   //Iterating arrays in php using do while loop.
   // In do while loop it's 1st iteration will always run.
  /* $a = 0;
    do{
        echo "<br>";
        echo "The value of a is : ";
        echo $a;
        $a++;
     
     # code...
   } while ($a < 10)
   */

  for ($a=0; $a < 10 ; $a++) // run, check condition,echo then update.
   { 
    echo "<br>";
    echo "The value of a from the for loop is : ";
    echo $a;
    # code...
  }

  //foreach loop
  foreach($languages as $value)
  {
  echo "<br>The value from foreach loop is: ";
  echo $value;
  }
  

  function print5()
  {
    echo "<br>";
    echo "Five";
  }
  print5(); //Executing Function.

  function print_number($number)
  {
    
    echo "<br>The number is: ";
    echo $number;
  }
  print_number(45);
  print_number(435);
  print_number(5);

        ?>
        
        </div>
    
</body>
</html>