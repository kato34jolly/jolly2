<?php $searchName = $_POST['search']; ?>

<p>PHP ITEMS</p>
<?php $arrayItems = array("Maize", "Soya", "Cabbage", "Rice", "Sugar", "Matooke", "Tooth brush"); ?>
<table>
<tr>
  <th>PHP Item Names</th>
</tr>
<?php
  $i = 0;
  while($i < count($arrayItems)){
    $nameOfItem = $arrayItems[$i];
    $substringOfArrayItems = substr($nameOfItem,0,1);
    if($substringOfArrayItems == $searchName){
	    echo "<tr><td>".$nameOfItem."</td></tr>";
	}
	$i = $i + 1;
  }
?>
</table>