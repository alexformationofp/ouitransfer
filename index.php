<?php

if(isset($_GET['page']) && !empty($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = 'Envoi';
}

$page = ucfirst($page);

include('Controllers/'.$page.'Controller.php');