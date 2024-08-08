<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="action_search.php" method="post">
  <label for="fname">Search:</label>
  <input type="text" id="search" name="search" placeholder="Write text here">
  <input type="submit" value="Submit">
</form>

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
        $i = $i + 1;
        echo "<tr><td>".$nameOfItem."</td></tr>";
      }
    ?>
  </table>


</body>
</html>