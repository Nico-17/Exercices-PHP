<html>

	<body>

		<table border>

	<?php 

			echo 	'<tr>

						<td></td>';



	for($c=0;$c!=11;$c++){

		echo '<th>'.$c.'</th>';

	}

		echo '</tr>';

	for($l=0;$l!=11;$l++){

		echo '<tr>

				<th>'.$l.'</th>';

		for($c=0;$c!=11;$c++){

			$resultat=$c*$l;

			echo '<td align=right>'.$resultat.'</td>';

		}

		echo '</tr>';

	}

	?></table>

	</body>

</html>



afficher table de multiplication 8