<?php     ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Добавление</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<style type="text/css">
	input   {
	width: 100px;
	border: 0px;
	text-align: center;
}
table {
	width: 300px;
  	height: 300px;
  	margin: auto;
}
</style>
</head>
<body>
<div class="container">
<h2 align = "center">Enter marks for student</h2>

<table><td>
<form  method ="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="ID_student">ID of student:</label>
<input type="integer" class="form-control" id="ID_student" placeholder="Enter id of student" name="ID_student" width = "10">
</div>


<div class="form-group">
<label for="mark_math">Math</label>
<input type="text" class="form-control" id="mark_math" placeholder="Enter mark" name="mark_math">
</div>

<div class="form-group">
<label for="mark_english">English:</label>
<input type="text" class="form-control" id="mark_english" placeholder="Enter mark" name="mark_english">
</div>

<div class="form-group">
<label for="mark_chemistry">Chemistry:</label>
<input type="integer" class="form-control" id="mark_chemistry" placeholder="Enter mark" name="mark_chemistry">
</div>

<div class="form-group">
<label for="mark_geography">Geography:</label>
<input type="integer" class="form-control" id="mark_geography" placeholder="Enter mark" name="mark_geography">
</div>

<div class="form-group">
<label for="mark_biology">Biology:</label>
<input type="integer" class="form-control" id="mark_biology" placeholder="Enter mark" name="mark_biology">
</div>

<button name= "enter11" type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</td></table>

<?php

include_once('connection.php');


if (isset($_POST['enter11'])) {

$id = $_POST['ID_student'];
$markMath = $_POST['mark_math'];
$markEnglish = $_POST['mark_english'];
$markChemistry = $_POST['mark_chemistry'];
$markGeography = $_POST['mark_geography'];
$markBiology = $_POST['mark_biology'];

$id = $_POST['ID_student'];

if (isset($_POST['ID_student']) && isset($_POST['mark_math']) && isset($_POST['mark_english'])  && isset($_POST['mark_chemistry']) && isset($_POST['mark_geography']) && isset($_POST['mark_biology']) ) {

$res = mysqli_query($conn, "SELECT * FROM marks WHERE ID_student = $id");
$count = mysqli_num_rows($res);

if( $count > 0 ) {

$sql = "UPDATE marks SET mark=$markMath WHERE ID_student = $id and ID_subject = 1";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));

$sql = "UPDATE marks SET mark=$markEnglish WHERE ID_student = $id and ID_subject = 2";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));

$sql = "UPDATE marks SET mark=$markChemistry WHERE ID_student = $id and ID_subject = 3";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));
$sql = "UPDATE marks SET mark=$markGeography WHERE ID_student = $id and ID_subject = 4";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));
$sql = "UPDATE marks SET mark=$markBiology WHERE ID_student = $id and ID_subject = 5";
$result = $conn->query($sql);

$result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));

} else {
$sql = "INSERT INTO marks
VALUES ('".$_POST['ID_student']."', 1 ,'".$_POST['mark_math']."')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO marks
VALUES ('".$_POST['ID_student']."', 2 ,'".$_POST['mark_english']."')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO marks
VALUES ('".$_POST['ID_student']."', 3 ,'".$_POST['mark_chemistry']."')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO marks
VALUES ('".$_POST['ID_student']."', 4 ,'".$_POST['mark_geography']."')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO marks
VALUES ('".$_POST['ID_student']."', 5 ,'".$_POST['mark_biology']."')";
if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}


}

     header("Location: http://localhost/MyDB/qwery.php?spisok=1&method=");
ob_end_flush();

}
}
?>

</body>
</html>


