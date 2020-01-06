<?php 
$db = new mysqli("localhost", "root", "", "DanNhac");
   $sql = "SELECT * from introduce";
   $result = $db->query($sql)->fetch_all();



    $sql1 = "SELECT * from service";
   $result1 = $db->query($sql1)->fetch_all();


    $sql2 = "SELECT * from why";
   $result2 = $db->query($sql2)->fetch_all();

   $sql3 = "SELECT * from employee";
   $result3 = $db->query($sql3)->fetch_all();




 ?>