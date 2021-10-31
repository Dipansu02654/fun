<?php
$acc_list = ["golu"="green"];
$msg="";
session_start();
if ($_SERVER["request_method"]==="POST") {
  $username = $_post["username"];
  $Password = $_post["password"];
  if(array_key_exists($username, $acc_list)){
    if($acc_list[$username]===$Password){
      setcookie("user",$username,["samesite"="strict"]);
      header("location: file:///C:/Users/maa/Desktop/MY%20PROJECTS/D-Gym/home.php");
    }else{
     $msg = "password is incorrect";
   }
 }else{
  $msg = "your username dosen't exist in our databse";
 }
}
?> 
<!DOCTYPE html>
<html>
<head>
  <title>basic login</title>
</head>
<body>
<h1 style="text-align: center;">Basic Login</h1>
<div style="text-align: center;">
  <form action="index.php" method="POST" style="border-color: black border-width: 5px;">
    <label for="username">username: </label>
    <input type="text" name="username">
    <br><br>
    <label for="password">password: </label>
    <input type="password" name="Password">
    <br>
    <br>
    <input type="submit" name="submit" value="login">
    <br>
    <label><?php echo $msg ?></label>
  </form>
</div>
</body>
</html>
