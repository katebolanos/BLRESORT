<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src = "../js/admin.js"></script>
<div class="wrap">
  <nav class="nav-bar navbar-inverse" role="navigation">
      <div id ="top-menu" class="container-fluid active">
          <a class="navbar-brand" href="#"><img src="../BL Pictures/logo.png" width="100px" height: style="margin-right:10px;margin-top:-18px;" class="white-border center-block"/></a>
          <ul class="nav navbar-nav">        
              
              <li class="dropdown movable">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="caret"></span><span class="fa fa-4x fa-child"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li><a href="#"><span class="fa fa-user"></span>My Profile</a></li>
                      <li><a href="#"><span class="fa fa-gear"></span>Settings</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><span class="fa fa-power-off"></span>Logout</a></li>
                  </ul>
              </li>
              
          </ul>
      </div>      
  </nav>
  <aside id="side-menu" class="aside" role="navigation">            
        <ul class="nav nav-list accordion">                    
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-globe"></i>Portal<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Dashboard</a></li>  
              <li><a href="#">Settings</a></li>  
              <li><a href="#">Administration</a></li>  
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-users"></i>Users<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Users</a></li>
              <li><a href="#">New User</a></li>
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-cloud"></i>Sites<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Search Sites</a></li>
              <li><a href="#">New Site</a></li>
              <li><a href="#">Jobs</a></li>
            </ul>
          </li>  
          
           <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-map-marker"></i>Zones<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Search Zones</a></li>
              <li><a href="#">New Zone</a></li>
            </ul>
          </li>
          
          <li class="nav-header">
            <div class="link"><i class="fa fa-lg fa-file-image-o"></i>Reports<i class="fa fa-chevron-down"></i></div>
            <ul class="submenu">
              <li><a href="#">Entries</a></li> 
              <li><a href="#">Redirects</a></li> 
              <li><a href="#">Pingbacks</a></li>          
              <li><a href="#">Tags</a></li>
            </ul>
          </li>
          
      </ul>
  </aside>
  
  <!--Body content-->
  <div class="content">
    <div class="top-bar">       
      <a href="#menu" class="side-menu-link burger"> 
        <span class='burger_inside' id='bgrOne'></span>
        <span class='burger_inside' id='bgrTwo'></span>
        <span class='burger_inside' id='bgrThree'></span>
      </a>      
    </div>
    <section class="content-inner">
      <h2>Sample</h2>
      <h3>A responsive Top and Side Menu, resize your browser to find out</h3>
    </section>
  </div>  
  
</div>
  
</div>
</body>
</html>
