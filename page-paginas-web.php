<?php wp_head(); ?>
<?php get_header(); ?>
    
<div id="container"/></div>

<section class="header pages bg">
    
    <div class="container">
        
        <div class="row">
            
            <div class="col-xs-12">
                
                <!--navigation-->
                <?php get_template_part('navbar'); ?>
                
                <!--logo-->
                <div class="logo-container logo-page-paginas-web col-md-5">
                    
                    <div class="logo">
                        
                        <a href="/">
                        
                            <!--<h1>JOINT</h1><-->
                            <img src="/wp-content/themes/joint/images/logo_grande_blanco.png" alt="" class="" style="max-width:200px;"> 
                        
                        </a>
                            
                    </div>
                    
                    <br>
                    
                    <p>Sitios Web con la mejor experiencia e interfaces de alta calidad</p>
                     
                    <button class="btn btn-clear">Empieza hoy día</button>
                    
                </div>
                
                <div class="col-md-7 hidden-xs hidden-sm">
                    
                    <img src="/wp-content/themes/joint/images/mackbook.png" alt="" class="img-responsive">
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    
</section>

<div class="clearfix"></div>

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
                    
                    <!--<button class="mdl-button mdl-button--colored mdl-button--raised mdl-js-button mdl-js-ripple-effect" type="button" id="show-dialog">Cotización de Precios</button> -->
                    <button type="button" class="btn btn-clear btn-lg" data-toggle="modal" data-target="#web-popup">Cotización de Precios</button> 
                    
                </div>
                
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

<div class="clearfix"></div>

<!--MODAL-->
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
    
<?php get_footer() ?>