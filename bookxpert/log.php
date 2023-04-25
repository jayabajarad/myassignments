<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <style>
        body{
        margin:50px;
        font-size: 30px;
        color:black;
    }
    </style>
<body>
    <?php
// define variables and set to empty values
 $email = $setpassword = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $setpassword = test_input($_POST["setpassword"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<h2 style="text-align:center;font-size:45px;">Login Here</h2>
   <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">     
   <fieldset style="width:50%;margin:auto;"> 
   
        E-mail: <input type="text" name="email" class="form-control"><br>
        Password: <input type="password" name="setpassword" class="form-control"><br>
       <input type="submit" name="submit" value="Submit"  class="btn btn-success btn-lg">
    </fieldset>
    </form><br>


<?php
$servername = "localhost";
$username = "jayabajarad9028@gmail.com";
$password = "Jaya@1998";
$dbname = "User";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "select *from username where email = '$email' and setpassword = '$setpassword'";  
$result = $conn->query($sql);  
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
          
         
            echo "<h1><center> Login successful </center></h1>";  
        }  
      }else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     



$conn->close();

    
?>
</body>    
</html>
