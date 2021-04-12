<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Learning Basics</title>
</head>
<body>
    <div class="container">
    This is my First PHP Website
    <?php
        echo "<br>";
        echo "Hello this is written in php";
        echo "<br>";
    ?>
    <?php
        $variable1 = 10;
        $variable2 = 5;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";

        // Operators in PHP
        // Arithmatic Operators
        
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of variable1 - variable2 is : ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo $variable1 / $variable2;
        echo "<br>";
        echo "The value of variable1 * variable2 is : ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "<br>";

        // Assignment Operators
        $newVar = $variable1;
        $newVar += 1;
        echo "The value of new variable is ";
        echo $newVar;
        echo "<br>";
        echo "<br>";

        // Comparision Operators
        echo "The value of 1==4 is : ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is : ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is : ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is : ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "<br>";

        // Increment/Decrement Operators
        echo $variable1++;
        echo "<br>";
        echo $variable1;
        // echo $variable1--;
        // echo ++$variable1;
        // echo --$variable1;
        echo "<br>";
        echo "<br>";

        // Logical Operators
        // and(&&)
        // or(||)
        // xor(xor)
        // not(!)

        //$myVar = (true) and (true);      result was:->bool(true)
        // $myVar = (false) and (true);    result was:->bool(false)
        // $myVar = (false) and (false);   result was:->bool(false)   
        // $myVar = (true) and (false);    result was:->bool(false)

        // $myVar = (true xor true);       result was:->bool(false)
        // $myVar = (true xor false);      result was:->bool(true)
        // $myVar = (false xor true);      result was:->bool(true)
        // $myVar = (false xor false);     result was:->bool(false)

        $myVar = (true) or (true);
        echo var_dump($myVar);
        echo "<br>";
        echo "<br>";

    ?>
    <?php
    // Data Types in PHP
    // 1.String
    // 2.Integer
    // 3.Float
    // 4.Boolean
    // 5.Array
    // 6.Object
    echo"Data Types<br>";
    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";

    $var = 67;
    echo var_dump($var);
    echo "<br>";

    $var = 27.13;
    echo var_dump($var);
    echo "<br>";
    
    $var = true;
    echo var_dump($var);
    echo "<br>";

    $language = array("PYTHON", "C++", "JAVA", "PHP", "HTML");
    echo $language[0];
    ?>

    </div>
</body>
</html>