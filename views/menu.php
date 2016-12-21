<?php
  //Load pizza_ml.xml
  $xml= simplexml_load_file('../model/pizza_ml.xml');
  
  foreach($xml->xpath('/Menu/Category') as $category)
  {
    print $category->title;
    print "<ul>";
    foreach($category->Item as $item)
    {
      print "<li>".$item->Name."</li>"."<br>";
    }
    print "</ul>"."<br>";
  } 


?>  
