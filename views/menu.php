<?php
  //Load pizza_ml.xml
  $xml= simplexml_load_file('../model/pizza_ml.xml');
 
 if(!isset($_GET['title']))
 { print "<form action='pizza_ml.xml' method='GET'>";
   print "<select name='title'>";
  foreach($xml->xpath('/Menu/Category') as $category)
  {
       print "<option>";
       print "<b>".$category->title."</b>"."<br>";
       print "</option>";
  }
  print "</select>";
  print "</form>";
 }
 else
 {
   { echo "<b>". $_GET['title']."</b>"."<br>";
     print "<ul>";
     foreach($category->Item as $item)
     print "<li>".$item->Name."</li>";
     print "<br>";
   }  
   
 } 

?>  
