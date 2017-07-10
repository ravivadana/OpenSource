<?php include 'common/data.php'?>
<?php 
   $table_name='Openings';
   $datafields=getDatafields($table_name); 
   $data=getData($table_name, 5); 
 ?>
<?php include 'partials/table.php'?>