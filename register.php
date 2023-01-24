<?
$id = $_REQUEST['id'];
$fio = $_REQUEST['fio'];
$sex = $_REQUEST['sex'];
$IDCity = $_REQUEST['city'];
$pass = $_REQUEST['pass'];
$descr = $_REQUEST['descr'];
$agree = $_REQUEST['agree'];

header("content-type: text/html; charset=utf-8");

echo "<p>$id<p>$fio<p>$sex<p>$IDCity<p>$pass<p>$descr<p>$agree";
?>