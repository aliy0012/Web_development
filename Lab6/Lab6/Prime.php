
		<?php

      echo "<div id=\"contentP\">";

      echo "<form action=primer.php method=get>";
      echo "Range 1: <input type=text name=range1>";
      echo "Range 2 : <input type=text name=range2>";
      echo "<input type=submit value=Generate name=submit>";
      echo "</form>";

      if(isset($_GET['submit'])){
      $i = $_GET['range1'];
      $j = $_GET['range2'];

      for($i; $i <= $j; $i++){
        if($i % 2 != 0){
          echo "$i is a prime number";
          echo "<br />";
        }
      }
      }
      echo "</div>";
    ?>
