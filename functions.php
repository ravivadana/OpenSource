<?php

    /**
 * Displays site name.
 */
function siteName()
{
    echo config('name');
}

/**
 * Displays site version.
 */
 function siteVersion()
{
    echo config('version');
}

/**
 * Website navigation.
 */
 function navMenu($sep = ' | ')
{
    $nav_menu = '';
    foreach (config('nav_menu') as $uri => $name) { 
     $nav_menu .= '<li><a href="'.(config('pretty_uri') || $uri == '' ? '' : '?page=').$uri.'">'.$name.'</a></li>';
    }
   $nav_menu="<ul>".$nav_menu."<ul>";

   $newmenu='<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>       
      </button>
      <a class="navbar-brand" href="index">
          <img src="images/canvasinfosys.png" style="position:relative;height:40px; top:-10px;">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home">Home</a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="products">Products
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="onlineexams/quiz">Online Exam</a></li>
        </ul>
      </li>
        <li><a href="clients">Clients</a></li>
        <li><a href="careers">Careers</a></li>
        <li><a href="about-us">About Us</a></li>
        <li><a href="contact-us">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>';
  echo $newmenu;
    //echo trim($nav_menu, $sep);
}

// <li class="dropdown">
//           <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products<span class="caret"></span></a>
//           <ul class="dropdown-menu">
//             <li><a href="books">Books</a></li>
//             <li><a href="Guide">Guide</a></li>
//             <li><a href="paths">Paths</a></li>
//           </ul>
//         </li>

/**
 * Displays page title. It takes the data from 
 * URL, it replaces the hyphens with spaces and 
 * it capitalizes the words.
 */
 function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';

    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from 
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
 function pageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path = getcwd().'/'.config('content_path').'/'.$page.'.php';

    if (file_exists(filter_var($path, FILTER_SANITIZE_URL))) {
        include $path;
    } else {
        include config('content_path').'/404.php';
    }
}

/**
 * Starts everything and displays the template.
 */
 function run()
{
  
   if(!strpos(strtoupper(((string)$_SERVER['HTTP_USER_AGENT'])),"PHONE"))
   {
     include config('template_path').'/template.php';
   }
   else{
     include config('template_path').'/mobile.template.php';
   }
    
}

?>