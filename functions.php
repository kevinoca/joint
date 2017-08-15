<?php
function debug($var, $stop = true) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    if ($stop)
        exit;
}

function validate_Url() {

    $host= $_SERVER["HTTP_HOST"];
    $url= $_SERVER["REQUEST_URI"];
    $here = "http://" . $host . $url;
    
    if($here == "https://joint-kevinoca.c9users.io/"){
        
        echo "home-page";
        
    }else{
        
        echo "page";
        
    }
    
}

function custom_login_logo() {
    $path = explode('/', get_bloginfo('template_directory'));
    $path[] = 'images';
    $ruta = ABSPATH . implode('/', array_slice($path, count($path) - 4)) . '/';
    if (!(file_exists($ruta . 'logo_pequeño_color.png'))) {
        if (!is_dir($ruta))
            mkdir($ruta, 0777, true);
        $is_copied = @copy('', $ruta . 'logo_pequeño_color.png');
        if (!$is_copied) {
            $source = file_get_contents('');
            $destiny = @fopen($ruta . 'logo_pequeño_color.png', 'w');
            @fwrite($destiny, $source);
            @fclose($destiny);
        }
    }
    echo '<style type="text/css">h1 a { background-image:url(' . get_bloginfo('template_directory') . '/images/logo_pequeño_color.png) !important; }</style>';
}

function left_admin_footer_text_output($text) {
    $text = get_bloginfo();
    return $text;
}

function right_admin_footer_text_output($text) {
    $text = 'Web Desarrollada por <a href="https://www.facebook.com/kevin.oca.9" target="_blank">Kevin Oca</a>';
    return $text;
}

add_action('login_head', 'custom_login_logo');

add_filter('admin_footer_text', 'left_admin_footer_text_output');

add_filter('update_footer', 'right_admin_footer_text_output', 11);
