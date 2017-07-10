<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php siteName()?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'common/resources.php'?>
  <style>
    body{
        background-color:green;
    }
  </style>
  <script>
   $(function(){
    //Menu item activation
     var link=window.location.pathname.replace("-","").toLowerCase().replace(" ","");   
     $(".navbar-nav").find("li").each(function(){
         var linktext=$(this).find("a").text().toLowerCase().replace(" ","").replace("-","");
         if(link.indexOf(linktext)>-1){
           $(this).addClass("active");
         }
       });
   });
  </script>
</head>
<body>
    <div id="loader">
        Loading...
    </div>
   <div id="your-page" style="display:none;">
    <?php navMenu(); ?>
    <div class="container" id="container">
      <?php pageContent(); ?>
    </div>
    <footer>
       <div style="position:fixed; width:100%;background-color: #D8D8D8;border-color: #080808;bottom:0px;height:50px;text-align:center;border-top:solid 1px black;">
          <span class="copyright-text">&copy;2017 
            <?php echo siteName().' Limited. All Rights Reserved.'?>
          </span>
       </div>
    </footer>
   </div>
</body>
</html>
