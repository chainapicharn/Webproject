<?php
$connect = mysqli_connect("localhost", "root", "", "datab");

if(isset($_POST["action"])){
  // Choose a function depends on value of $_POST["action"]
  if($_POST["action"] == "delete"){
    delete();
  }
}

function delete(){
  global $connect;

  $Cid = $_POST["Cid"];

  $rows = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM account WHERE Cid = $Cid"));

  mysqli_query($connect, "DELETE FROM account WHERE Cid = $Cid");
  echo 1;
}