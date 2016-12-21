<?php
  foreach($categories as $category) : ?>
  <a href="<?= $category->url ?>">
  <strong><?= $category->title ?></strong>
  </a>
 <?php endforeach ?>  
