<h2 style="color:#CC6688"><strong><?= $item->Name ?></strong></h2>

<?php if(isset($item->descp)) :?>
 <p><?=$item->descp ?></p>
<?php endif ?>
<br>

<ul>
<?php foreach ($item->xpath('.//Price') as $Price): ?>
<?php if(isset($price['Small'])):?>
 <li>Small:$<?=$item->xpath('./Small/Price') ?></li>
 <li>Large:$<?=$item->xpath('./Large/Price') ?></li>
<? else :?>
 <li>$<?=$Price ?></li>
<? endif ?>

<? endforeach ?>
</ul>
 

