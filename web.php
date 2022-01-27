<?php 

    require_once "config/connection.php";
    // require_once 'function/auth.php'; 

    $base_url = 'http://localhost/zaini_nijar/Perhotelan/';
    
    if (isset($_GET['url'])) {
        $url = rtrim($_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
    }

    if (isset($url)) {
        if ($url[0] == 'welcome') {
            require_once "app/guest/layouts/header.php";
            require_once "app/welcome.php";
            require_once "app/guest/layouts/footer.php";
        }else if ($url[0] == 'login') {
            require_once "app/users/auth/layouts/header.php";
            require_once "app/users/auth/login.php";
            require_once "app/users/auth/layouts/footer.php";
        }elseif ($url[0] == 'register') {
            require_once "app/users/auth/layouts/header.php";
            require_once "app/users/auth/register.php";
            require_once "app/users/auth/layouts/footer.php";
        } 
    }else {
        require_once "app/guest/layouts/header.php";
        require_once "app/welcome.php";
        require_once "app/guest/layouts/footer.php";
    }
?>