<!--
 index.php
 This is home page for the website-->

<?php 
    require_once('../includes/helpers.php');
    render('header',array('title'=>'Three Ace'));
    echo("Hello");
    render("footer");
 ?>   
