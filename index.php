<?php
$insert = false;
if(isset($_POST['name'])){
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());

}
// echo "Success connecting to the db";

$Name= $_POST['name'];
$Age= $_POST['age'];
$Email= $_POST['email'];
$Phone= $_POST['phone'];
$Address= $_POST['address'];
$desc= $_POST['desc'];

$sql = "INSERT INTO `campus_trip`.`campus_trip`(`Name`, `Age`, `Email`, `Phone`, `Address`, `Other`, `dt`)
 VALUES ('$Name', '$Age', '$Email', '$Phone', '$Address', '$desc', current_timestamp())";
// echo $sql;

if($con->query($sql) == true){
    // echo "Successfully inserted";
    $insert = true;

}
else{
    echo "ERROR: $sql <br> $con->error";
    $not_insert = true;
}

$con->close();

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Frank+Ruhl+Libre:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    
</head>
<body>

    <img src="backgrd.jpg" alt="Web Development" class="bg">

    <div class="container">
        <h1>Welcome to Chitkara University Trip Form</h1  >
        <p style="color:blueviolet;">Enter your details and submit the form to 
            confirm your participation in this trip.</p>
<?php
if($insert == true){
        echo "<p class = 'submitMsg'> Thanks for filling this form and 
        submitting it !</p>";
}
?>
    <br>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your Name" required>
        <input type="text" name="age" id="age" placeholder="Enter Your Age"required>
        <input type="email" name="email" id="email" placeholder="Enter Your Email"required>
        <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone no"required>
        <input type="text" name="address" id="address" placeholder="Enter Your Address"required>
        <textarea name="desc" id="desc" cols="30" rows="10" 
        placeholder="Enter Any Other Information Here"></textarea>
        <button class="btn">Submit</button>

    </form>
</div>
    <script src="index.js"></script>
</body>
</html>