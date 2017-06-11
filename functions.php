<?php

function validate_Url(){

    $host= $_SERVER["HTTP_HOST"];
    $url= $_SERVER["REQUEST_URI"];
    $here = "http://" . $host . $url;
    
    if($here == "https://joint-kevinoca.c9users.io/"){
        
        echo "home-page";
        
    }else{
        
        echo "page";
        
    }
    
}