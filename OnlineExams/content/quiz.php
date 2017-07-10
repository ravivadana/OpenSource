<?php  session_start();?>
<meta name="apple-mobile-web-app-capable" content="yes">
<?php
function GUID()
{
	if (function_exists('com_create_guid') === true)
	{
		return trim(com_create_guid(), '{}');
	}
   return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}
$sessionid="";
if(!isset($_SESSION['sessionid']))
{
    $_SESSION['sessionid']=GUID();
}
$sessionid= $_SESSION['sessionid'];

echo '<Quiz url="http://192.168.1.108/api" sessionid='.$sessionid.'>Loading...</Quiz>'
?>
<script type="text/javascript" src="partials/dist/app.bundle.js"></script></body>
<style>
  .container{
	  margin:10px;
	  background-color:lightgray;
	  border-radius:5px;
	  height:auto;
  }
</style>
<script>

</script>