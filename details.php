<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Userdetail</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css"/>  
</head>
<body>
<form action="transfer.php" method="POST" class="form">
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $name = $_POST['name'];
    session_start();
    $_SESSION["name"] = $name;
    $conn = mysqli_connect("localhost", "root", "", "banking_system");
    $query = 'SELECT  * FROM users  WHERE name = "' . $name . '" ';
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)) {
    echo '<div class="tab"><h2 style="margin-top: 30px"><b>User Details</b></h2><table style="border: 1px solid black;"><tr><th style="border: 1px solid black;">Name</th><th style="border: 1px solid black;">Email</th><th style="border: 1px solid black;">Balance</th><th style="border: 1px solid black;">Contact No.</th></tr>';
    echo "<tr><td > ".$row['name']."</td><td >".$row['email']."</td><td>".$row['amount']."</td><td>".$row['contact']."</td></tr>";
    echo "</table>";
}
}
?>
<br>
    <!-- <a href="transfer.php" class="transfer" role="button">Transfer to </a>	
<br> -->
    <a href="index.php" class="transfer" role="button">Home</a>
<br>	
    <a href="customers.php" class="btn btn-danger" role="button">Back  </a>
</form>  	
</body>
</html>