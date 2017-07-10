<?php
    class Resource
    {
        public $name;
        public $path;
        public $type;
    }
    
    $jqueryjs = new Resource();
    $jqueryjs->name = 'js/jquery.min.js';
    $jqueryjs->path = 'js/jquery.min.js';
    $jqueryjs->type = 'js';
    

    $bootstrapjs = new Resource();
    $bootstrapjs->name = 'bootstrap.min.js';
    $bootstrapjs->path = 'js/bootstrap.min.js';
    $bootstrapjs->type = 'js';

    $bootstrapcss = new Resource();
    $bootstrapcss->name = 'bootstrap.min.css';
    $bootstrapcss->path = 'css/bootstrap.min.css';
    $bootstrapcss->type = 'css';

    $commonjs = new Resource();
    $commonjs->name = 'common.js';
    $commonjs->path = 'js/common.js';
    $commonjs->type = 'js';

   
    $stylecss = new Resource();
    $stylecss->name = 'style.css';
    $stylecss->path = 'css/style.css';
    $stylecss->type = 'css';
    
    $root="http://192.168.1.108/projects/myapp/";
    

    $resources = array($jqueryjs,$bootstrapjs, $bootstrapcss,$commonjs,$stylecss);
    

    for ($i=0; $i < sizeof($resources); $i++) { 
        $path=$resources[$i]->path;
       if($resources[$i]->type=="js")
       {
         echo '<script src="'.$root.$path.'"></script>';
       }
       else if($resources[$i]->type=="css")
       {
          echo '<link rel="stylesheet" href="'.$root.$path.'">';
       }
    }
?>
