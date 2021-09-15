<?php
	echo "<div id=\"content\">";

  echo "<table width=400px, border=1px>";

      for ($row=1; $row <=8; $row++){
        echo "<tr>";
        for($col=1; $col <=8; $col++){
          $sum= $col + $row;
          if($sum % 2 == 0){
            echo "<td height=50px widt=50px bgcolor=black></td>";
          }else{
            echo "<td height=50px widt=50px bgcolor=white></td>";
          }
        }
        echo "</tr>";
      }
  echo "</table>";

	echo "</div>";
?>
