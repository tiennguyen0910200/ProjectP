<?php 
$db = new mysqli("localhost", "root", "", "DanNhac");
   $sql = "SELECT * from introduce";
   $result = $db->query($sql)->fetch_all();

 ?>