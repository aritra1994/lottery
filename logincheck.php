<?php
session_start();
  require_once("/includes/functions.php");
  $db=connectDb();
  if (isset($_POST["subMem"])) 
  {
      $username=$_POST["u_name"]; 
      $password=$_POST["u_password"]; 
      $query="select u_password,u_id from lottery.user where binary u_name='$username'";
      $result=mysqli_query($db, $query);
      if (isset($result)) {
        $row=mysqli_fetch_assoc($result);
      $pass=$row['u_password'];
      } else {
        $pass=null;
      }
      mysqli_close($db);
      if($password==$pass)
        {
          $u_id=$row['u_id'];
          $_SESSION["u_id"]=$u_id;
          redto("public/bund.php");
        }
          
        else
        {
          echo "login failed";
        }
  } 
  else if (isset($_POST["subNewMem"])) 
  {
    $u_fullname= $_POST['u_fullname'];
    $u_name=$_POST["u_name"];
    $u_password=$_POST["u_password"];
    $u_email=$_POST["u_email"];
    $query ="insert into lottery.user(u_name,u_fullname, u_password,u_email) values ('$u_name','$u_fullname','$u_password','$u_email')";
        $result=mysqli_query($db, $query)
          or die ('Error querying/ID is already in database.');
          mysqli_close($db);
        if (isset($result)) {
          echo "success";
        }
        
  }
  
?>