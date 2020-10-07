<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";   //default for xampp server
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("Database connection failed" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    $name=$_POST['name'];
    $email=$_POST['email'];
    $topic=$_POST['title'];
    $message=$_POST['textarea'];
    $sql = "INSERT INTO `CONTACTUSFORM`.`USERMESSAGES`(`name`,`email`,`topic`,`message`)VALUES($name,$email,$topic,$message)";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
<div class="form-container">
    <p>Hey,</p> <?php echo $name; ?>
 <div class="alert-box">Your message has been sent.</div>
 <p>WE WILL SOON REPLY YOU AT:</p><?php echo $_POST['email'] ?>
</div>
<h4>Created By Abid Adhikari</h4>

<!-- INSERT INTO `usermessages` (`name`, `email`, `topic`, `message`) VALUES ('test bahadur', 'test@bahadur.com', 'jpt lang', 'k saro ramri vako?'); -->

</body>
</html>
