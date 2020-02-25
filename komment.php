
/* $sql = "SELECT * FROM elevi ORDER BY nume ASC ";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
echo '
<div class="container">
<h2>Сортировка по фамилиям в алфавитном порядке</h2>

<table class="table table-striped">
<thead>
<tr>
<th>id</th>
<th>nume</th>
<th>prenume</th>
<th>adresa</th>
<th>email</th>
<th>data_nasterii</th>
<th>sex</th>
<th>media_bac</th>
</tr>
</thead>
<tbody>';
// output data of each row
while($row = $result->fetch_assoc())
{
echo "<tr><td>" . $row["id"]. " </td><td>" . $row["nume"]. "</td><td>" . $row["prenume"] . "</td><td>" .$row["adresa"]. "</td><td>" .$row["email"]. "</td><td>" .$row["data_nasterii"]. "</td><td>" .$row["sex"]. "</td><td>" .$row["media_bac"]."</td></tr>";
}

echo'
</tbody>
</table>
</div>';
} else {
echo "0 results";
}
$sql = "SELECT * FROM elevi WHERE sex ='f' ";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
echo '
<div class="container">
<h2>Выобрка: Только ученики женского пола</h2>

<table class="table table-striped">
<thead>
<tr>
<th>id</th>
<th>nume</th>
<th>prenume</th>
<th>adresa</th>
<th>email</th>
<th>data_nasterii</th>
<th>sex</th>
<th>media_bac</th>
</tr>
</thead>
<tbody>';
// output data of each row
while($row = $result->fetch_assoc())
{
echo "<tr><td>" . $row["id"]. " </td><td>" . $row["nume"]. "</td><td>" . $row["prenume"] . "</td><td>" .$row["adresa"]. "</td><td>" .$row["email"]. "</td><td>" .$row["data_nasterii"]. "</td><td>" .$row["sex"]. "</td><td>" .$row["media_bac"]."</td></tr>";
}

echo'
</tbody>
</table>
</div>';
} else {
echo "0 results";
}

echo "<h2 align = 'center'>Удаление учеников с фамилией Calinciuc</h2>";
$sql3 = "DELETE FROM elevi WHERE nume = 'Calinciuc' ";

if (mysqli_query($conn, $sql3)) {
echo "<h2 align = 'center'>Record deleted successfully</h2>";
} else {
echo "Error deleting record: " . mysqli_error($conn);
}


$sql = "UPDATE elevi SET nume='durak' WHERE media_bac<7";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));

if($result)
echo "<h2 align='center'>Данные обновлены</h2>";

$sql = "SELECT * FROM elevi ";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
echo '
<div class="container">
<h2>База Данных</h2>

<table class="table table-striped">
<thead>
<tr>
<th>id</th>
<th>nume</th>
<th>prenume</th>
<th>adresa</th>
<th>email</th>
<th>data_nasterii</th>
<th>sex</th>
<th>media_bac</th>
</tr>
</thead>
<tbody>';
// output data of each row
while($row = $result->fetch_assoc())
{
echo "<tr><td>" . $row["id"]. " </td><td>" . $row["nume"]. "</td><td>" . $row["prenume"] . "</td><td>" .$row["adresa"]. "</td><td>" .$row["email"]. "</td><td>" .$row["data_nasterii"]. "</td><td>" .$row["sex"]. "</td><td>" .$row["media_bac"]."</td></tr>";
}

echo'
</tbody>
</table>
</div>';
} else {
echo "0 results";
}*/


?>
</body>
</html>-