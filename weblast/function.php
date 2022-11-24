<?php
//การลบ
$connect = mysqli_connect($servername,$username,$passwprd,$dbname) or die("เชื่อมต่อไม่ได้");

if(isset($_POST["action"])){
  // Choose a function depends on value of $_POST["action"]
  if($_POST["action"] == "delete"){
    delete();
  }
}

function delete(){
  global $conn;

  $Cid = $_POST["Cid"];

  $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM datab WHERE Cid = $Cid"));

  mysqli_query($conn, "DELETE FROM datab WHERE Cid = $Cid");
  echo 1;
}