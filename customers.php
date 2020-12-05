<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basic Banking System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css"/> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
</head>
<body>
  <form  action="details.php" method="post">
        <div class="view">
          <div class="container">
            <div class="page-header">        
            </div>
            <?php
              $conn = mysqli_connect("localhost", "root", "", "banking_system");
              $query = 'SELECT * FROM users';
              $result = mysqli_query($conn,$query);
              echo '   <div class="tab"><h2 style="margin-top: 30px"><b>User information</b></h2><table style="border: 1px solid black;"><tr><th style="border: 1px solid black;">Name</th><th style="border: 1px solid black;">Email</th><th style="border: 1px solid black;">Balance</th></tr>';
              while($row = mysqli_fetch_array($result)) {
                echo "<tr><td > ".$row['name']."</td><td >".$row['email']."</td><td>".$row['amount']."</td></tr>";
              }
              echo "</table>";
            
          echo '  <br><div class="view1">
                  <h5>Select User</h5>
              <select name="name" id = "uname">
                  <option hidden> Select Name</option>
              
                  <option value="Alvina Joy"> Alvina Joy</option>

                  <option value="Aditi Jadhav">Aditi Jadhav</option>

                  <option value="Ria Subhash">Ria Subhash</option>

                  <option value="Priya Shah">Priya Shah</option>

                  <option value="Krishna Ram">Krishna Ram</option>

                  <option value="Sharon Jacob"> Sharon Jacob</option>

                  <option value="Joy Dsouza">Joy Dsouza</option>

                  <option value="Alex Pias">Alex Pias</option>

                  <option value="Sheru Khan">Sheru Khan</option>

                  <option value="Yohan Rodrigues">Yohan Rodrigues</option>
            </select>
            </div>
            <br>
            <div class="text-center">
            <button class="transfer" type="submit">View Details</button>
            <a href="index.php" class="back" role="button"> Back  </a>
        </div>
              </div>
            </div>
          </div>
          <br>
          </form>'
  ?>   
</body>
</html>