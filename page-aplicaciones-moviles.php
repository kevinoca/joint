<?php wp_head(); ?>
<?php get_header(); ?>
    
<section class="header pages-produccion-grafica bg">
    
    <div class="container">
    
        <div class="row">
            
            <div class="col-xs-12">
                
                <!--navigation-->
                <?php get_template_part('navbar'); ?>
                
                <div class="logo-container col-sm-5">
        
                    <!--logo-->
                    <div class="logo">
                        
                        <a href="/">
                        
                            <!--<h1>JOINT</h1><-->
                            <img src="/wp-content/themes/joint/images/logo_grande_color.png" alt="" class="img-responsive">
                        
                        </a>
                        
                    </div>
                    
                    <p>Nos adaptamos a tu presupuesto</p>
                     
                    <button class="btn btn-clear">Empieza hoy día</button>
                    
                </div>
                
            </div>
            
        </div>
    
    </div>
                
</section>  

<div class="clearfix"></div>

<section class="page-produccion-grafica">
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                
                <h2 class="text-center text-uppercase">Que tipo de diseño necesitas</h2>
                
            </div>
        </div>
    </div>
    
</section>

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
      
<?php get_footer(); ?>