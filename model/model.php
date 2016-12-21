<?php
 
 //load pizza_ml.xml
 $xml= simplexml_load_file('../model/pizza_ml.xml');

 //Select each category
 $category=$xml->xpath('/Menu/Category');

?> 
