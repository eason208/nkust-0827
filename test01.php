
<?php
echo "<table  width=300>";
echo "<tr bgcolor=#cccccc><td>i</td><td> i**2</td><td> i**3</td></tr>";
   
	for($i=1; $i<=9; $i++) {
		if ($i%2)   // %為取餘數
			echo "<tr bgcolor=#ccffff>";
		else
		    echo "<tr bgcolor=#ffcccc>";
		
		echo "<td>$i</td><td>". $i**2 ."</td><td>" . $i**3 ."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>