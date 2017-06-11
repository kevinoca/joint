<!doctype html> 
<html lang="es">
  
  <head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php bloginfo('name'); ?></title>
    
    <link rel="icon" type="image/png" href="<?php bloginfo('template_url') ?>/images/favicon.png"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">    
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
      
    <section class="header pages bg">
        
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
                    <div class="logo-container col-sm-5">
                        
                        <div class="logo">
                            
                            <a href="/">
                            
                                <!--<h1>JOINT</h1><-->
                                <img src="/wp-content/themes/joint/images/logo_grande_blanco.png" alt="" class="img-responsive">
                            
                            </a>
                            
                        </div>
                        
                        <p>Soluciones Gráficas a tu alcance, <br>comienza hoy día!</p>
                         
                        <button class="btn btn-clear">Empieza hoy día</button>
                        
                    </div>
                    
                    <div class="col-sm-7 hidden-xs">
                        
                        <img src="/wp-content/themes/joint/images/mackbook.png" alt="" class="img-responsive">
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>

    <section class="page-main-content">
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-xs-12">
                    
                    <div class="col-sm-3 item">
                        <div class="icon">
                            <img src="/wp-content/themes/joint/images/icon_responsive.png" alt="" class="img-responsive">
                        </div>
                        <p>Diseño Responsive</p>
                    </div>
                    
                    <div class="col-sm-3 item">
                        <div class="icon">
                            <img src="/wp-content/themes/joint/images/icon_develop.png" alt="" class="img-responsive">
                        </div>
                        <p>Código Limpio</p>
                    </div>
                    
                    <div class="col-sm-3 item">
                        <div class="icon">
                            <img src="/wp-content/themes/joint/images/icon_html5.png" alt="" class="img-responsive">
                        </div>
                        <p>Diseño Html</p>
                    </div>
                    
                    <div class="col-sm-3 item">
                        <div class="icon">
                            <img src="/wp-content/themes/joint/images/icon_css3.png" alt="" class="img-responsive">
                        </div>
                        <p>Diseño CSS3</p>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="button text-center">
                        
                        <button class="btn btn-clear" type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Cotización de Precios</button> 
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    <section class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        
        <div class="modal-dialog" role="document">
            
            <div class="modal-content">
                
              <div class="modal-header">
                  
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                
                <h4 class="modal-title" id="myModalLabel"></h4>
                
              </div>
              
              <div class="modal-body">
                  
                <div class="message-cotization">
                    ¡Listo! en breves minutos nos estaremos comunicando con usted para concretar <br>
                    la compra, si no nos contactamos en más de 30 minutos, llámenos al número <br>
                    +56 9 999 99 99 con gusto le atenderemos.
                </div>
                
              </div>
              
              <div class="modal-footer">
                  
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
                <button type="button" class="btn btn-primary">Save changes</button>
                
              </div>
              
            </div>
            
        </div>
        
        
    </section>
    
    <div class="clearfix"></div>
    
    <section class="cotiza container-fluid">
        
        <div class="row">
            
            <div class="cotiza-content container">
                
                <div class="row">
                
                    <div class="col-xs-12 text-left">
                            
                        <h3>Cotiza con nosotros de manera<br>diferente y directa</h3><br>
                        
                        <button class="btn btn-clear btn-cotiza">COTIZAR AHORA</button>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        
    </section>

<?php get_footer() ?>