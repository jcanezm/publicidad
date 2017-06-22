<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css"> <!--Iconos--> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<header>
<nav class="menu navbar-inverse navbar-fixed-top navbar-toggleable-xl">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                  <img class="logo_alc" src="img/alacalle2.png">

            </div>
            <div class="collapse navbar-collapse" id="navbar-1">
                <ul class="nav navbar-nav navbar-right">
                   <li><a href="/inicio"><span class="glyphicon glyphicon-home"></span> Inicio</a>
                   <li><a href="/nosotros"><span class="glyphicon glyphicon-user"></span> Nosotros</a></li>
                   <li><a href="/contacto"><span class="glyphicon glyphicon-user"></span> Contacto</a></li>
                   <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                  <!-- <li><a href="#"><img class="face" src="img/face.png"/></a></li>
                   <li><a href="#"><img class="face" src="img/tweet.png"/></a></li>-->
               </ul>
           </div>

       </div>
   </nav>

   <!--Menu lateral
   <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
       <div class="navbar-toggler animate">
           <span class="menu-icon"></span>
       </div>
       <ul class="navbar-menu animate">
           <li>
               <a href="#somos" class="animate">
                   <span class="desc animate">¿Quienes Somos?</span>
                   <span class="glyphicon glyphicon-info-sign"></span>
               </a>
           </li>
           <li>
               <a href="#contacto" class="animate">
                   <span class="desc animate"> Contacto </span>
                   <span class="glyphicon glyphicon-comment"></span>
               </a>
           </li>
           <li>
               <a href="#login" class="animate">
                   <span class="desc animate"> Login</span>
                   <span class="glyphicon glyphicon-user"></span>
               </a>
           </li>
       </ul>
   </nav>
   End Menu lateral-->

 </header>


@yield('content')


<footer class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-justify footer-bottom navbar-fixed-bottom">
    <div class="derechos"> © 2017, Todos los derechos reservados.</div>
</footer>
<script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
<script src="http://code.jquery.com/jquery-latest.js"> </script>
</body>
</html>
   	  	