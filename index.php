<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content = "IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale = 1">
    <title>Estacionamiento en Punto</title>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href= "bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href = "css/mystyles.css" rel="stylesheet">
</head>
<?php
$link = mysql_connect('localhost', 'root', 'iit.123')
    or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('test') or die('No se pudo seleccionar la base de datos');
?>
<body cz-shortcut-listen="true">
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"  aria-expanded = "false" aria-controls= "navbar">
                    <span class="sr-only" >Toggle navigation </span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class = "navbar-brand" href="#"><img src="img/logo.png" height="30" width="41"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse" >
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden = "true"></span> Inicio</a></li>
                <li><a href="aboutUs.html"><span class="glyphicon glyphicon-info-sign" aria-hidden = "true"></span> Datos</a></li> 
                <li><a href="contactUs.html"><i class="fa fa-envelope-o"></i> Contacto</a></li>
            </ul>
                <ul class="nav navbar-nav navbar-right">
            <li><a id ="loginBtn" ><span class=" glyphicon glyphicon-log-in"></span>Iniciar Sesion</a></li><!--Login btn-->
        </ul>
       
        </div>
    </nav>
        
        <div id="reserveModal" class="modal fade" role = "dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss = "modal">&times;</button>
                        <h4 class="modal-title"> Reserve Table</h4>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                             <div class="col-xs-12 col-sm-12">
                                    <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="radio" class="col-sm-2 control-label">Number of Guests</label>
                                    <div class="col-sm-10">
                                    <label class="radio-inline">
                                        <input type="radio" name="radio" value = "1">1</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio" value = "1">2</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio" value = "1">3</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio" value = "1">4</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio" value = "1">5</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="radio" value = "1">6</label>
                                    </div>
                                    </div>
                                        
                                        <!--Radio-->
                                        <div class="form-group">
                                            <label for="section" class="col-sm-2 control-label">Section</label>
                                            <div class="col-sm-10 btn-group" data-toggle = "buttons">
                                                <label class="btn btn-success active">
<input type ="radio" name="section" id="non-smoking" autocomplete="off">Non-Smoking
                                                </label>
                                                <label class="btn btn-danger"><input type="radio" name="section" id="smoking" autocomplete="off">Smoking</label>
                                                
                                            </div>
                                        </div>
                                <div class="form-group has-feedback" >
                                    <label for="dateandtime" class="col-sm-2  control-label">Date and Time</label>
                                    <div class="col-sm-5" >
                                        <input type="text" placeholder="Date" class = "form-control"><span class="glyphicon glyphicon-calendar form-control-feedback" aria-hidden = "true"></span>
                                    </div>
                                    <div class=" col-sm-5">
                                        <input type="text" class="form-control" placeholder="Time"><span class="glyphicon glyphicon-time form-control-feedback" aria-hidden = "true"></span>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class=" col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary">Reserve Table</button>
                                            <button type="button" class="btn btn-default" data-dismiss ="modal">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                 <div class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Warning!</strong> Please <a href="tel:+852 1234 5678">call</a> us to reserve for more than 6 guests.
                    </div>               
                </div>
        </div>

</div>
                    </div>
            </div>
        </div>
        
        <!--Setting up modal -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss = "modal">&times;</button>
                        <h4 class="modal-title"> Iniciar sesion</h4>
                    </div>
                    <div class="modal-body">
                         <form class="form-inline">
                     <div class="form-group">
                        <label class="sr-only" for="email">Email</label>
                        <input type="email" class="form-control input-sm" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="password">Contraseña</label>
                        <input type="password" class="form-control input-sm" id="contraseña" placeholder="Password">
                        </div>
                    <div class="checkbox">
                        <label >
                            <input type="checkbox">Recordar
                        </label>
                    </div>
      <button type="submit" class="btn btn-info btn-sm">Entrar</button>
                                 <button type="button" class="btn btn-default btn-sm" data-dismiss = "modal"> Cancelar</button>
</form>      
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

        <div class = "container">
            <div class="row  row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1>Estacionamiento en Punto</h1>
                    <p style="padding:40px;"></p>
                    <p>Estacionamiento en Punto, te ayudara a saber si existe estacionamientos libres y su tiempo promedio de uso</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:20px;"></p>
                    <img src="img/logo.png" class="img-responsive">
                    </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding:40px;"></p>
                    <a class="btn btn-warning btn-block" id = "reserveBtn">VER</a><!--Reserve Modal BTN --> 
                </div>
            </div>
        </div>
    </header>
    
    <div class="container">
       <!-- <div class="row row-content">
            <div class="col-xs-12">
          <div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators 
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides 
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/uthappizza.png" class="img-responsive" alt="uthapizza">
       <div class="carousel-caption">
                                <h2>Uthappizza<span class="label label-danger">Hot</span><span class="badge">$4.99</span></h2>
                                <p>A unique combination of indian uthappam(pancake) and italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Viadalia onion , Guntur Chillies nand Buffalo Paneer.</p>
                                <p><a class="btn btn-primary btn-xs" href = "#">More &raquo;</a></p>
                    
                </div>
    </div>
    <div class="item">
      <img src="img/buffet.png" alt="buffet" class="img-responsive">
      <div class="carousel-caption">
                                <h2>Weekend Grand Buffet</h2>
                                <p>Featuring Mouthwatering Combinations with a choice of five different salads. six enticing appetizers, six main entrees and five choicest deserts. free flowing bubbly and soft drinks. All for just $19.99 per person</p>
                                <p><a class="btn btn-primary">More &raquo;</a></p>
         </div>
    </div>
      
      <div class="item">
      <img src="img/alberto.png" alt="buffet" class="img-responsive">
             <div class="carousel-caption">
                                    <h2>Albero Somayya</h2>
                                    <h4>Executive Chief</h4>
                    <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
                    <p><a  class="btn btn-primary btn-xs" href="index.html#">More »</a></p>
        </div>
    </div>
  </div>

  <!-- Controls 
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
              <div class="btn-group" id="carouselButtons">
                  <button class="btn btn-danger btn-xs" id="carousel-pause">
                      <span class="glyphicon glyphicon-pause" aria-hidden ="true" ></span>
                  </button>
                      <button class="btn btn-danger btn-xs" id="carousel-play">
 <span class = "glyphicon glyphicon-play aria-hidden = true"></button>
                  
              </div>
              </div></div>
                    </div>-->
    
            <div class = "row row-content">
                <div class="col-xs-12 col-sm-3 col-sm-push-9">
                    <p style="padding:20px;"></p>
                    <!--<h3 align="center">Espacio DER</h3>-->
                </div>
                <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img class="media-object img-thumbnail" src="img/uthappizza.png" alt="Uthapizza">
                            </a>
                        </div>
                        <div class="media-body">
                            <h2 class="media-heading">Estacionamientos Libres</h2>
                    <p><h1 style="text-align: center;">
					<?php
					$query = 'SELECT numero FROM `espacio` WHERE 1';
					$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

					while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						foreach ($line as $col_value) {
							echo "$col_value";
						}
					}
					mysql_free_result($result);
					?> de 100
					</h1></p>

                </div>
            </div>
                </div>
            </div>


            <div class="row row-content">
                <div class="col-xs-12 col-sm-3">
                    <p style="padding:20px;"></p>
                    <!--<h3 align="center">Espacio Izquierdo</h3>-->
                </div >
                <div class = "col-xs-12 col-sm-9">
                    <div class="media">
                    <div class="media-body">
                    <h2 class="media-heading">Promedio Tiempo en Estacionamientos</h2>
                    <p><h1 style="text-align: center;">
<?php
$query = 'SELECT SEC_TO_TIME(AVG(TIME_TO_SEC(`tiempo`))) FROM tiempo';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    foreach ($line as $col_value) {
        echo "$col_value";
    }
}
mysql_free_result($result);
?>
					</h1></p>
                    <!--<p><a class = "btn btn-primary btn-xs"href="index.html#">Leer mas</a></p>-->
                </div>
                        
                        <div class="media-right media-middle">
                            <a href="#"><img class="media-object img-thumbnail" src="img/buffet.png" alt="buffet" >
                            </a>
                        </div>
            </div>
        </div>
                </div>

        <div class="row row-content">
                <div class="col-xs-12 col-sm-3 col-sm-push-9">
                    <p style="padding:20px;"></p>
                    <!--<h3 align="center">Meet our Culinary Specialists</h3>-->
                </div>
                <div class ="col-xs-12 col-sm-9 col-sm-pull-3">
                    <div class="media">
                        <div class="media-left media-middle">
                            <a href="#">
                                <img src="img/alberto.png" alt="Alberto Somayya" class="media-object img-thumbnail"></a>
                        </div>
                        <div class="media-body">
                    <h2 class="media-heading">Calcular valor estacionamientos</h2>
					<p><h1 style="text-align: center; width: 50%; margin:auto;">$
										<?php
					$query = 'SELECT valor FROM `valor` WHERE 1';
					$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

					while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
						foreach ($line as $col_value) {
							echo "$col_value";
						}
					}
					mysql_free_result($result);
					?>
                                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="min"/>
					x min</h1></p>
                    <!--<p><a  class="btn btn-primary btn-xs" href="index.html#">Leer mas</a></p>-->
                </div>
            </div>
        </div>
    </div>
 </div>
       
    <footer class="row-footer">
        <div class="container">
            <div class="row">             
                <div class="col-xs-5 col-xs-offset-1 col-sm-2 col-sm">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html#">Home</a></li>
                        <li><a href="index.html#">About</a></li>
                        <li><a href="index.html#">Menu</a></li>
                        <li><a href="index.html#">Contact</a></li>
                    </ul>
                </div>
                
                <div class = " col-xs-6 col-sm-6">
					<!--FOOTER MEDIO-->
                </div>
                
                <div>
                    <div style="padding: 40px 10px;" class="nav navbar-nav">
                        <a  class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href= "http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-youtube"  href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <p style="padding:10px;"></p>
                    <p align="center">Estacionamiento en Punto</p>
                </div>
            </div>
        </div>
    </footer>


<span style="margin: 0px auto; border: 2px dotted rgb(255, 165, 0); position: absolute; z-index: 2147483647; visibility: hidden; left: 552px; width: 0px; top: 127px; height: 0px;"></span><span style="z-index: 2147483647; position: absolute; visibility: hidden; left: 537px; width: 50px; top: 112px; height: 20px; font-size: 10px; color: black;"></span>
        
        
            
            
            
            
            
            
            <!-- Latest compiled and minified CSS -->
             <script src="bower_components/jquery/dist/jquery.min.js"></script>
            <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
            
-->            
    
        <script>
            $(document).ready(function(){
                $('#mycarousel').carousel({interval:2000});
                
                $("#carousel-pause").click(function(){
                    $("#mycarousel").carousel('pause');
                });
                $("#carousel-play").click(function(){
                    $("#mycarousel").carousel('cycle');
                });
                
                $("#loginBtn").click(function(){
                    $("#loginModal").modal('toggle');
                });
                
                $("#reserveBtn").click(function(){
                    $("#reserveModal").modal('toggle');
                })
                
                
            });
        </script> 
    </body>
</html>