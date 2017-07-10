<?php
error_reporting(1);
$cn=mysql_connect("127.0.0.1","root","1111") or die("Could not Connect My Sql");
mysql_select_db("OnlineExam",$cn)  or die("Could connect to Database");
?>
