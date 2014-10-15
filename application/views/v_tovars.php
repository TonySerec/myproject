<h3>Товары</h3>
<?foreach($tovars as $one):?>
<?=$one->name;?>
 <b>Раздел:</b><em><?=$one->categories->title;?></em>
<hr/>
<?endforeach;?>
