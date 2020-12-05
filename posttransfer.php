<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>posttransfer</title>
</head>
<body>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    $from = $_POST['from'];
    $to = $_POST['to'];
    if(strcmp($from,$to)!=0){
        $amt = $_POST['amt'];
        $currbal;
        $conn = mysqli_connect("localhost", "root", "", "banking_system");
        $send = 'SELECT amount FROM users WHERE name = "'.$from.'"';
        $amt_send =  mysqli_query($conn,$send);
        while($row = mysqli_fetch_array($amt_send)) {
            $amt_send = $row['amount'];
        }

        $recieve = 'SELECT amount FROM users WHERE name = "'.$to.'"';
        $amt_recieved =  mysqli_query($conn,$recieve);
        while($row = mysqli_fetch_array($amt_recieved)) {
            $amt_recieved = $row['amount'];
        }
        $sender = $amt_send - $amt;
        $reciever = $amt_recieved + $amt;

        $send = "UPDATE users SET amount = " . $sender . " WHERE name = '". $from . "'" ;
     
        $sender_bal = mysqli_query($conn,$send);
       
        $recieve = "UPDATE users SET amount = " . $reciever . " WHERE name = '". $to . "'" ;
       
        $reciever_bal = mysqli_query($conn,$recieve);
        $transaction = "INSERT INTO transactions(sender, receiver, transfer_amt) VALUES ('". $from ."', '". $to ."', '".$amt."');";
      
        $records = mysqli_query($conn,$transaction);
       
        if(! $records){
            echo mysqli_error($conn);
        }
        echo "<script>
        alert('Transcation Successful');
        window.location.href = 'history.php';
        </script>";
    }
    else{
        echo "<script>
        alert('Sender and Receiver cannot be same!');
        window.location.href = 'transfer.php';
        </script>";
    }
}
?>
</body>
</html>