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
<h2 align = "center">Enter data for student</h2>

<table><td>
<form  method ="POST" enctype="multipart/form-data">

<div class="form-group">
<label for="name_student">Name:</label>
<input type="text" class="form-control" id="name_student" placeholder="Enter name" name="name_student">
</div>

<div class="form-group">
<label for="age">Age:</label>
<input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
</div>

<div class="form-group">
<label for="tel">Tel:</label>
<input type="integer" class="form-control" id="tel" placeholder="Enter tel" name="tel">
</div>

<div class="form-group">
<label for="ID_class">Class:</label>
<input type="integer" class="form-control" id="ID_class" placeholder="Enter class" name="ID_class">
</div>


<button name= "enter" type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</td></table>
<?php

include_once('connection.php');


if (isset($_POST['enter'])) {
if (isset($_POST['name_student']) && isset($_POST['age'])  && isset($_POST['tel'])) {
$sql = "INSERT INTO students
VALUES ('DEFAULT','".$_POST['name_student']."','".$_POST['age']."','".$_POST['tel']."','".$_POST['ID_class']."')";
if ($conn->query($sql) !== TRUE) {
echo "Error: " . $sql . "<br>" . $conn->error;
} 
    header("Location: http://localhost/MyDB/qwery.php?spisok=30&method=");

ob_end_flush();
}
}
?>

</body>
</html>
