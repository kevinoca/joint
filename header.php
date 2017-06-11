<!doctype html> 
<html lang="es">
  
  <head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name'); ?></title>
    
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/images/favicon.png"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">    
    
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">-->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url');?>/css/main.less" />
    
    <!--less cdn-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
    
    <!--Jq-->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
    <script src="<?php bloginfo('template_url');?>/js/main.js" /></script>
    
  </head>
  
  <body>
      
    <section class="header home-page bg">
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <!--navigation-->
                    <nav class="navbar navbar-default" role="navigation">
                        
                        <div class="navbar-header">
                            
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                <span class="sr-only">Desplegar navegación</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            
                            <a class="navbar-brand hidden-lg hidden-md hidden-sm" href="#">JOINT</a>
                            
                        </div>
     
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            
                            <ul class="nav navbar-nav text-uppercase text-center">
                              <li><a href="<?php home_url(); ?>/produccion-grafica">Producción Gráfica</a></li>
                              <li><a href="<?php home_url(); ?>/paginas-web">Páginas web</a></li>
                              <li><a href="#">Aplicaciones Móviles</a></li>
                              <li><a href="#">Mail Marketing</a></li>
                              <li><a href="#">Contacto</a></li>
                            </ul>
                            
                        </div>
                      
                    </nav>
                    
                    <!--logo-->
                    <div class="logo-container">
                        
                        <a href="/">
                            
                            <div class="logo">
                                <!--<h1>JOINT</h1>-->
                                <img src="/wp-content/themes/joint/images/logo_grande_blanco.png" alt="" class="img-responsive">
                                
                            </div>
                            
                        </a>
                        
                        <p>Soluciones Gráficas a tu alcance, <br>comienza hoy día!</p>
                         
                        <button class="btn btn-clear">Empieza hoy día</button>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>
    