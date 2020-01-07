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

if (isset($_POST['them'])) {{
	$db->query("INSERT INTO employee(name,image,address,phone,assignment) values('".$_POST['ten']."','".$_POST['anh']."','".$_POST['dc']."','".$_POST['sdt']."','".$_POST['select']."')");
}
header('refresh:0');}

if (isset($_POST['xoa'])) {
	$db->query("delete from employee where id = ".$_POST['xoa']);
	header('refresh:0');
}

$sql4 = "SELECT * from service1";
$result4 = $db->query($sql4)->fetch_all();

if (isset($_POST['themdv'])) {{
	$db->query("INSERT INTO service1(names,images,emp,price) values('".$_POST['select']."','".$_POST['anhdv']."','".$_POST['tennv']."','".$_POST['giadv']."')");
}
header('refresh:0');}

if (isset($_POST['xoa'])) {
	$db->query("delete from service1 where id = ".$_POST['xoa']);
	header('refresh:0');


}
$sql5 = "SELECT * from emp";
$result5 = $db->query($sql5)->fetch_all();
?>