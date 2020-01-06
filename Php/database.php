<?php 
$db = new mysqli("localhost", "root", "", "DanNhac");
   $sql = "SELECT * from introduce";
   $result = $db->query($sql)->fetch_all();



    $sql1 = "SELECT * from service";
   $result1 = $db->query($sql1)->fetch_all();



 ?>