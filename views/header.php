<!Doctype html>
<html>
 <head>
 <?php if(isset($title)): ?>
 <title>Three Aces | <?= htmlspecialchars($title) ?></title>
 <?php else : ?>
 <title>Three Aces</title>
 <?php endif ?>
 </head>
 <body>
  <a href="/" style="font-size:30px color:#CC6789 vertical-align:middle">
  <strong>&nbspThree Aces</strong></a>
  <a href="/shopping_cart.php" style="float:right"></a>
 
 //render menu
 <?php isset($title)? load_menu($title):load_menu() ?>
