<?php 
if(isset($_GET['page']) && isset($_GET['cache'])) {
    $page = $_GET['page'];
    $pageArray = explode('.', $page);
    $folder = $pageArray[0];
    $page = $pageArray[1];
    include 'pages/' . $folder . '/' . $page . '.php';
    exit();
}
else {
    die('fuck off');
}