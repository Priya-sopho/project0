<!--
 index.php
 This is home page for the website-->

<?php 
    require_once('../includes/helpers.php');
    render('header',array('title'=>'Three Ace'));
    echo "<b>"."Menu"."</b>"."<br>";
    render('menu');
    render('footer');
 ?>   
