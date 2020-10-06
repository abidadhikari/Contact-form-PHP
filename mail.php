<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['textarea'];
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
</body>
</html>
