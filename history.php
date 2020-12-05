<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <style>
  </style>
</head>
<body>
          <div class="form1">   
            <?php
              $conn = mysqli_connect("localhost", "root", "", "banking_system");
              $query = 'SELECT * FROM transactions';
              $result = mysqli_query($conn,$query);
              echo '   <div class="history"><h2 style="margin-top: 30px"><b>Transaction History</b></h2><table style="border: 1px solid black;"><tr><th style="border: 1px solid black;">Sr.No.</th><th style="border: 1px solid black;">Sender</th><th style="border: 1px solid black;">Reciever</th><th style="border: 1px solid black;">Amount Transferred</th></tr>';
              while($row = mysqli_fetch_array($result)) {
                echo "<tr><td > ".$row['id']."</td><td > ".$row['sender']."</td><td >".$row['receiver']."</td><td>".$row['transfer_amt']."</td></tr>";
              }
              echo "</table> <br>";
              echo'<div class="back">
              <a href="index.php" class="back" role="button"> Back  </a>
          </div></div>'
              ?>     
          </div>
          <br>
  </form>    
</body>
</html>