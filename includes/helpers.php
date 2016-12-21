<?php

/**
 * This file contains all the required functions.
 *  Defining all functions including render, calculate.
 */

 require('../model/model.php');

 //maximum quantity of item in an order 
 define('Max_Quant',100);

 //enable seesion
 session_start();


 /**
 *Load html page based on parameter.
 **/
 function render($template, $data=array())
 {
   $path=__DIR__.'/../views/'.$template.'.php';   
   if(file_exists($path))
   {
     extract($data);
     require($path);
    }

 }

 /**
 *Load Menu
 **/
 function load_menu($title= '')
 {
    global $categories;

    //define url for each menu button
    foreach($categories as $category)
    {
      $category->url = '/Category/'.str_replace(' ','-',$category->title);
    }
  
  render('menu',['title' => $title, 'categories' => $categories]);
  
  }  




 /**
 * Retrieve the list of items in specific category
 **/

 function query_items($category)
 {
   global $xml;

   $items = $xml->xpath("/Menu/Category[title='$category']/Item");
   return $items;
 }


 /**
 * To load error message
 **/

 function error_msg($msg)
 {
   render('header',['title'=>'Error']);
   render('error_message',['message'=> $msg]);
   render('footer');
 }


 /**
 * Calculate order Price
 **/
 function total()
 {
   //return if no order
   if (empty($_SESSION['order']))
   {
     return;
   }

   $total=0;

   foreach($_SESSION['order'] as $order)
   {
     //Convert price to int to avoid floating point conv.
     $price=$order['price']*100;


     //add price to total 
     $total+= $price*$order['quantity'];

    }

    return $total/100;
 }   

?> 
