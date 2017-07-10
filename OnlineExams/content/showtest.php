<?php
error_reporting(1);
$cn=mysql_connect("127.0.0.1","root","1111") or die("Could not Connect My Sql");
mysql_select_db("OnlineExam",$cn)  or die("Could connect to Database");
extract($_GET);
$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
parse_str(parse_url($url, PHP_URL_QUERY), $output);

$subid=$output['subid'];
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=blue> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><br><h5 class=head1> No Quiz for this Subject </h5>";
	exit;
}
echo "<h5 class=head1> Select Quiz Name to Give Quiz </h5>";
echo "<table align=center>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=quiz?testid=$row[0]&subid=$subid><font size=4>$row[2]</font></a>";
}
echo "</table>";
?>