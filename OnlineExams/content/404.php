<p>404 - This page does not exist.</p>
<?php include '../template/template.php'?>
<?php
session_start();
datainitialization();



?>
<?php
   function GUID()
		{
			if (function_exists('com_create_guid') === true)
			{
				return trim(com_create_guid(), '{}');
			}

			return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
		}
   function datainitialization()
   {
	   
		if(!isset($_SESSION['userid'])){
			$_SESSION['userid']=GUID();
		}
		$sessionid=$_SESSION['userid'];
		echo $sessionid;
		$url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		parse_str(parse_url($url, PHP_URL_QUERY), $output);
		$subid=$output['subid'];
		$tid=$output['testid'];
		echo $sessionid.'  '.$subid.'  '.$tid;
		}

 ?>

 <div class="answersheet">
    <?php
       for ($i=0; $i < 10; $i++) { 
		   echo 1;
	   }
	?>
</div>


<script>
$(function(){
   $("#btnNext").click(function(){
     alert($("input[name='radioQuetion']:checked").val());
   });
});

</script>
<style>
 

</style>