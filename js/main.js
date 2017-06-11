'use strict'

// console.log(screen.height);

var sh = screen.height - 120;
var sw = screen.width;
var hbc = false;


    // $('.header').css('height',sh)
    $(document).ready(function(){
        
        // click for menu
        $('.navbar-toggle').click(function(){
            
            if(hbc == false){
                
                $('.logo-container p').fadeOut()
                $('.logo-container button').fadeOut()
                hbc = true;
            
            }else{
                
                $('.logo-container p').fadeIn()
                $('.logo-container button').fadeIn()
                hbc = false;
            
            }
            
        })
        
        
        $('.header').css("height",sh)
        
        var opt  = $('.option')
        
        // opt.click(function(){
            
        //     opt.removeClass('active')
            
        //     $(this).addClass('active')
            
        //     $('.option1').fadeOut().fadeIn()
            
        // })
        
        $('.opt1').click(function(){
            
            $('.second-content').fadeOut('fast',function(){
                
                $('.third-content').fadeOut('fast',function(){
                    
                    $('.first-content').fadeIn()
                    
                })
                
            })
            
            
            $(opt).removeClass('active')
            $('.opt1').addClass('active')
            
        })
        
        $('.opt2').click(function(){
            
            $('.first-content').fadeOut('fast',function(){
                
                $('.third-content').fadeOut('fast',function(){
                    
                    $('.second-content').fadeIn()
                    
                })
                
            })
            
            
            $(opt).removeClass('active')
            $('.opt2').addClass('active')
            
        })
        
        $('.opt3').click(function(){
            
            $('.first-content').fadeOut('fast',function(){
                
                $('.second-content').fadeOut('fast',function(){
                    
                    $('.third-content').fadeIn()
                    
                })
                
            })
            
                
            $(opt).removeClass('active')
            $('.opt3').addClass('active')
            
        })
        
        
        // parallax effect
        
        if(sw >= 1366){
        
            console.log(sw)
            
            $(window).scroll(function(){
            
            var barra = $(window).scrollTop();
            var pos = barra *0.01;
            
            $('.cotiza').css({
                
                'background-position':'0 -'+ pos +'px'
                
            })
            
            // console.log(barra)
            
            // efecto soluciones
            if(barra > 1000){
                
                $('.img-fade').css('opacity','1')
                
            }
            
            if(barra > 1400){
                
                $('.img-fade').css('opacity','0')
                
                $('.img-fade-sitios').css({
                    'margin-right':'0',
                    'opacity':'1'
                })
                
            }else{
                
                $('.img-fade-sitios').css({
                    'margin-right':'-25%',
                    'opacity':'0'
                })
                
            }
            
            if(barra > 2100){
                
                $('.image img').css({
                    'margin-top':'-50px',
                    'opacity':'1'
                })
                
            }else{
                
                $('.image img').css({
                    'margin-top':'50px',
                    'opacity':'0'
                })
                
            }
            
        })
        
        }
        
    })
    
        
        
    
