<!DOCTYPE html>
<html>
<title><?php echo$data['title'];?> | mynt Assets Viewer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./theme/w3css/css/w3.css">
<link rel="stylesheet" href="./theme/w3css/css/style.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
<style type="text/css">
 
 @import url('https://fonts.googleapis.com/css?family=Gothic+A1|Kaushan+Script|Libre+Baskerville|Lobster');
.body{
  font-family: 'Gothic A1', sans-serif;
  font-size:16px;
  }
  p{
  color:#6c6c6f;
  font-size:1em;
  }
  h1,h2,h3,h4,h5,h6{color:#323233;text-transform:uppercase;}
.navbar-brand  span{
  color: #fed136;
  font-size:25px;font-weight:700;letter-spacing:0.1em;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
}
.navbar-brand {
  color: #fff;
  font-size:25px;
    font-family: 'Kaushan Script','Helvetica Neue',Helvetica,Arial,cursive;
  font-weight:700;
  letter-spacing:0.1em;
}

.navbar-nav .nav-item .nav-link{
  padding: 1.1em 1em!important;
  font-size: 120%;
    font-weight: 500;
    letter-spacing: 1px;
    color: #fff;
   font-family: 'Gothic A1', sans-serif;
}
.navbar-nav .nav-item .nav-link:hover{color:#fed136;}
.navbar-expand-md .navbar-nav .dropdown-menu{
  border-top:3px solid #fed136;
}
.dropdown-item:hover{background-color:#fed136;color:#fff;}
nav{-webkit-transition: padding-top .3s,padding-bottom .3s;
    -moz-transition: padding-top .3s,padding-bottom .3s;
    transition: padding-top .3s,padding-bottom .3s;
    border: none;
  }
  
 .shrink {
    padding-top: 0;
    padding-bottom: 0;
    background-color: #121212;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
.banner{
  background-image:url('http://www.hd-freewallpapers.com/latest-wallpapers/abstract-website-backgrounds.jpg');
  text-align: center;
    color: #fff;
   
    background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.banner-text{
  padding:200px 0 150px 0;
}
.banner-heading{
  font-family: 'Lobster', cursive;
  font-size: 75px;
    font-weight: 700;
    line-height: 100px;
    margin-bottom: 30px;
  color:#fff;
}
.banner-sub-heading{
  font-family: 'Libre Baskerville', serif;
  font-size: 30px;
    font-weight: 300;
    line-height: 30px;
    margin-bottom: 50px;
  color:#fff;
}

.btn-banner{
  padding:5px 20px;
  border-radius:10px;
  font-weight:700;
  line-height:1.5;
  text-align:center;
  color:#fff;
  text-transform:uppercase;
}
.text-intro{
  width:90%;
  margin:auto;
  text-align:center;
  padding-top:30px;
}


/* mobile view */
@media (max-width:500px)
{
  .navbar-nav{
    background-color:#000;
    border-top:3px solid #fed136;
    color:#fff;
    z-index:1;
    margin-top:5px;
    }
  .navbar-nav .nav-item .nav-link{
  padding: 0.7em 1em!important;
  font-size: 100%;
    font-weight: 500;
    }
  .banner-text{
  padding:150px 0 150px 0;
}
.banner-heading{
  font-size: 30px;
    line-height: 30px;
    margin-bottom: 20px;
}
.banner-sub-heading{
  font-size: 10px;
    font-weight: 200;
    line-height: 10px;
    margin-bottom: 40px;
}

}

@media (max-width:768px){
  .banner-text{
  padding:150px 0 150px 0;
}
  .banner-sub-heading{
  font-size: 23px;
    font-weight: 200;
    line-height: 23px;
    margin-bottom: 40px;
}
}
 


 </style>
</style>
<body class="w3-black">


<nav class="navbar navbar-expand-md navbar-dark fixed-top" id="banner">
  <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="/"><img src="https://getmynt.io/wp-content/uploads/2019/01/mynt-banner2.png" style="height:30px;margin-top: -10px;"></a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto" style="font-size: 10px">
      <li class="nav-item">
        <a href="./" class="nav-link"><i class="fa fa-list-ul fa-fw"></i> All Assets</a>
      </li>
      <li class="nav-item">
        <a href="https://getmynt.io/" target="_blank" class="nav-link"><i class="fas fa-globe-americas"></i> getmynt.io</a>
      </li>
      <li class="nav-item">
        <a href="https://chain.getmynt.io" target="_blank" class="nav-link"><i class="fas fa-cubes"></i> Block Explorer</a>
      </li> 
      <li class="nav-item">
        <a href="https://bitcointalk.org/index.php?topic=5117360.0" target="_blank" class="nav-link"><i class="fa fa-bullhorn fa-fw"></i> Forum [ANN]</a>
      </li>
      <li class="nav-item">
        <a href="https://discord.gg/mSJJRc7" target="_blank" class="nav-link"><i class="fa fa-comments fa-fw"></i>&nbsp; Discord</a>
      </li>
     <!-- Dropdown -->
<!--     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Dropdown link
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Link 1</a>
        <a class="dropdown-item" href="#">Link 2</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li> -->
    </ul>
  </div>
  </div>
</nav>






<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- !PAGE CONTENT! -->
<div class="container-fluid" style="margin-top:43px;">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



 <script type="text/javascript">
  $(document).on("scroll", function(){
    if
      ($(document).scrollTop() > 86){
      $("#banner").addClass("shrink");
    }
    else
    {
      $("#banner").removeClass("shrink");
    }
  });
 </script>