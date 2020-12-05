<!DOCTYPE html>
<html>
    <head>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
          <link rel="stylesheet" type="text/css" href = "style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>choose user</title>
        
        <link href="login.css" rel="stylesheet" type="text/css"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body{
                background-color: #afeeee;
            }
  </style>
    </head>
    <body>
    
                  
         <div class="container">
           <div class="row" style="margin-top: 75px;">
              <div class = "panel">
              
              <div class="panel-heading">
              <h2>
                  Transfer Details
              </h2>
              </div>
              <br>
                  <form action="posttransfer.php" method="POST"> 
                        <div><label for='from'>From :</label>
                        <select class="input" id='from' name='from' required>
                        <option value="" disabled selected>Select Name</option>
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
                     <div>
                      <label for="to">Reciever :</label>
                        <select class="input" id="to" name="to" required>
                        <option value="" disabled selected>Select Name</option>
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
                  <div>
                      <label for="amt">Enter amount to transfer :</label>
                      <input type="number" id="amt" min=0 required="true" name="amt" class="input" required>
                  </div>
                  <br>
                  <div>
                      <button type="submit" name="submit" class="transfer">Submit</button>
                  </div> 
                  <br>  
                  </form>
                  </div>
                </div>
                </div>
            </div>
        </div> 
    </body>
</html>