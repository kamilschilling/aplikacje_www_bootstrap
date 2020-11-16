<?php

include 'polaczenie.php';

?>

<table class="table table-hover">
    <th>Numer</th>
    <th>Imię</th>
    <th>Nazwisko</th>
    <th>E-mail</th>
    <th>Nr-tel:</th>
<?php 
$sql = "SELECT * FROM Student";
$output = $polaczenie->query($sql);

while($row = $output->fetch()) {
	?>
	<tr>
		<td><?php echo $row[0]; ?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[4]; ?></td>
	</tr>
<?php
}
?>
<table border="1">