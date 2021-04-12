<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Basics in PHP</title>
</head>
<style>
.container{
    max-width:80%;
    background: rgb(228, 195, 195);
    color:black;
}
</style>
<body>
    <div class="container">
    <h1>Lets Learn</h1>
    <?php
    echo"Lets check your party status :-<br>";
    $age = 18;
    if($age > 18)
    {
        echo "You can go to the party";
    }
    else if($age == 18)
    {
        echo "You need to wait for another year";
    }
    else
    {
        echo "You can not go to the party";
    }
    echo"<br>";
    echo"<br>";


    // Loops in PHP
    $languages = array("PYTHON", "C++", "PHP", "JAVA", "HTML");

    $a = 0;
    while ($a <= 10)
    {
        echo "<br>The value of a is : ";
        echo $a;
        $a++;
    }
    echo"<br>";

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages))
    {
        echo "<br>The value of language is : ";
        echo $languages[$a];
        $a++;
    }
    echo"<br>";

    // FOR loop
    $a = 20;
    for($a=0; $a<10; $a++)
    {
        echo "<br>The value of a is : ";
        echo $a;
    }
    echo "<br><br>";
    foreach ($languages as $value)
    {
        echo"<br>The value from foreach loop is ";
        echo $value;
    }
    echo "<br><br>";

    function print5()
    {
        echo "FIVE";
    }
    print5();
    print5();

    function print_number($number)
    {
        echo "<br> Your number is ";
        echo $number;
    }
    print_number(45);
    print_number(29);
    ?>
    </div>

</body>
</html>