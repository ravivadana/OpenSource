<?php
error_reporting(1);
$cn=mysql_connect("127.0.0.1","root","1111") or die("Could not Connect My Sql");
mysql_select_db("OnlineExam",$cn)  or die("Could connect to Database");
?>
<?php 
echo "<h2 class=head1> Select Subject to Give Quiz </h2>";
$rs=mysql_query("select * from mst_subject");
echo "<table align=center>";
while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=center ><a href='showtest?subid=$row[0]'><font size=4>$row[1]</font></a>";
}
echo "</table>";

function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }else{
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(125);// "}"
        return $uuid;
    }
}
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
   $_SESSION['userid']=getGUID();
}



?>

