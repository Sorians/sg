<?php  
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
      header("location:home.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>☬SORIAN</title>
  
  
  


  
     
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
 <div class="bottom">  <h3><a href="../index.php">☬</a></h3></div>
 <br>
  <br><!--  -->
  <br><br>
  <span><img alt="" src="assets/img/tf.png"></span>
		
  <br><!--  -->
  <br><br>
  <br><!--  -->
  <br><br>
  <br><!--  -->
  <br><br>
  <br><!--  -->
  <br><br>
  <br><!--  -->
  <br><br>
  <br><!--  -->
  <br><br>
  <br><!--  -->
  <br>   
 <div class="bottom">  <h3><a href="../index.php">☬Sorian Is Thankful to you☬</a></h3></div>
  <br>
  <br><!--  -->
  <br>
    <div class="bottom">  <h3><a href="../index.php">☬You'll Recieve Conformation Mail Shortly☬</a></h3></div>
  
</body>
</html>

<?php
   include('db.php');
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['user']);
      $mypassword = mysqli_real_escape_string($con,$_POST['pass']); 
      
      $sql = "SELECT id FROM login WHERE usname = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['user'] = $myusername;
         
         header("location: home.php");
      }else {
         echo '<script>alert("Your Login Name or Password is invalid") </script>' ;
      }
   }
?>
