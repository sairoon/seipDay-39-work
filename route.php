<?php

require_once 'vendor/autoload.php';

use App\classes\Series;

if (isset($_GET['page'])){
    if ($_GET['page'] =='home'){
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'series'){
        include 'pages/series.php';
    }
    elseif ($_GET['page'] == 'get-series'){
        $total = new Series($_POST);
//        $totalValue = $total->getSeriesResult();
        $totalValue = $total->getEvenOddResult();
        include 'pages/series.php';
    }
}
