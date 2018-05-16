<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','ajax');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM w3c_ajax_demo WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Voornaam</th>
<th>Achternaam</th>
<th>Leeftijd</th>
<th>Woonplaats</th>
<th>Streamer?</th>
</tr>";

while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Voornaam'] . "</td>";
    echo "<td>" . $row['Achternaam'] . "</td>";
    echo "<td>" . $row['Leeftijd'] . "</td>";
    echo "<td>" . $row['Woonplaats'] . "</td>";
    echo "<td>" . $row['Streamer'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
