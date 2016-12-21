<!--
 index.php
 This is home page for the website-->

<?php 
    require_once('../includes/helpers.php');
    // this is the main controller that handle the request from URL
    if (isset($_GET['para1'])) {
        $cat   = $_GET['para2'];
        $cat   = str_replace('-', ' ', $cat);
        $items = query_items($cat);
        render('header', ['title' => $cat]);
        render('category', ['items' => $items]);
        render('footer');
    }
    else {
        render('header');
        render('index');
        render('footer');
    }
 ?>   
