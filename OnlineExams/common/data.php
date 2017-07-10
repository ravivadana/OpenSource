<?php
global $data;
global $datafields;
mysql_connect('127.0.0.1','root','1111');
mysql_select_db('vrkdb');

function getData($table_name, $limit)
{
    $sql = "SELECT * FROM $table_name LIMIT 0, $limit";
    $result = mysql_query($sql);
    $arr = array();
    $result_arr = array();
    while($arr = mysql_fetch_array($result))
    {
        $result_arr[] = $arr;
    }
    return $result_arr;
}

function getDatafields($table_name){
    $sql = "SELECT * FROM ".$table_name; 
    $result = mysql_query($sql); 
    $i = 0; 
    $arr = array();
    $result_arr = array();
    while($i<mysql_num_fields($result)) 
    { 
        $meta=mysql_fetch_field($result,$i); 
        $result_arr[] = $meta->name;
        $i++;
    } 
    return $result_arr;
}
?>
