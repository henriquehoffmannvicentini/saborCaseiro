<?php

    if(isset($_GET["param"])){
    $param = $_GET["param"];
    $p = explode("/", $param);
    //print_r($p);
    }

    $page = $p[0] ?? "home";

    
?>