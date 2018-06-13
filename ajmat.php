<html>
<head> </head>
<body>

	
		<table>
			<tr>
				<td>Jour</td> 
				<td>08.10 - 09.40</td> 
				<td>09.50 - 11.20</td>
				<td>11.30 - 13.00</td>
				<td>14.20 - 15.50</td>
				<td>16.00 - 17.30</td>
			</tr>
			<tr>
				<td>Lundi</td>
				<?php 
	$c=$_GET['class'];
	
	$con=mysqli_connect("localhost","root","","emplois");
	$res=mysqli_query($con,"select * from seance where nom_dep='$c' and dat_debut='08.10 - 09.40'");
	

	while($r=mysqli_fetch_assoc($res)){
		?>
				<td><?php echo $r['nom_matiere']; ?></td>
				<?php } mysqli_free_result ($res);
                    ?>
                   
					<?php 
	
	
	
	$res=mysqli_query($con,"select * from seance where nom_dep='$c' and dat_debut='14.20 - 15.50'");
	

	while($r=mysqli_fetch_assoc($res)){
		?>
				<td><?php echo $r['nom_matiere']; ?></td>
				<?php } mysqli_free_result ($res);
                    ?>
					<td><?php echo $r['nom_matiere']; ?></td> 
					<td><?php echo $r['nom_matiere']; ?></td>
				</tr>
				
			</table>

			


		</form>
	</body>
	</html>