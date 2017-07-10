<h4 style='text-align:center;'> Clients</h4>
<?php include 'common/data.php'?>
<?php 
   $table_name='Clients';
   $datafields=getDatafields($table_name); 
   $data=getData($table_name, 5); 

$browser=get_browser(null,1);
print_r($browser);
 ?>
<?php include 'partials/table.php'?>
<strong>
<?php
echo $_SERVER['HTTP_USER_AGENT']
?>
</strong>