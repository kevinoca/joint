<?php wp_head(); ?>
<?php get_header(); ?>
        
<section class="header banner-page-diseno" >
    
    <div class="container">
        
        <div class="row">
            
            <div class="col-xs-12">
                
                <!--navigation-->
                <?php get_template_part('navbar'); ?>
                
                <!--logo-->
                <div class="logo-container ">
                    
                    <div class="logo">
                        
                        <a href="/">
                        
                            <img src="/wp-content/themes/joint/images/logo_pequeño_color.png" alt="" class="" style="max-width:200px;"> 
                        
                        </a>
                            
                    </div>
                    
                    <h1>Nos adaptamos a tu presupuesto</h1>
                    
                    <br>
                    <br>
                     
                    <button class=" btn-joint">Empieza hoy día</button>
                    
                </div>
                
                <!--<div class="col-md-7 hidden">-->
                    
                <!--    <img src="/wp-content/themes/joint/images/mackbook.png" alt="" class="img-responsive">-->
                    
                <!--</div>-->
            
            </div>
            
        </div>
                
    </div>
    
    <!--<div class="banner-page-diseno">-->
        
        
    <!--</div>-->
    
</section>

<div class="clearfix"></div>    

<section class="page-produccion-grafica">
    
    <div class="container">
        
        <div class="row">
            
            <div class="col-xs-12">
                
                <h2 class="text-center text-uppercase">Que tipo de diseño necesitas</h2>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-34.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-35.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-36.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-37.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-38.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-39.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-40.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-41.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
                <div class="item col-sm-4">
                
                    <div class="service">
                        
                        <img src="/wp-content/themes/joint/images/website joint-34.png" alt="" class="img-responsive">
                    
                    </div>
                
                    <button class="btn btn-name btn-clear btn-block btn-info">Seleccionado</button>
                    
                </div>
                
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

<style>
    
    .service{
        
        padding:10px;
        height:250px;
        display: flex;
        /* alineacion vertical */
        align-items: center;
        /* alineacion horizontal */
        justify-content: center;
        
    }
    
    .service img{
        
        margin:0 auto;
        max-height: 180px;
        max-width:180px;
        transition:all 1s ease-in-out;
        
    }
    
    .service:hover img{
        
        transition:all 0.6s ease-in-out;
        max-height: 230px;
        max-width: 230px;
        
    }
    
    .btn-name{
        
        background:rebeccapurple;
        border-color:rebeccapurple;
        color:white;
        
    }
    
    .btn-name:hover{
        
        background:#00c678;
        border-color:#00c678;
        color:white;
        
    }
    
</style>
      
<?php get_footer(); ?>