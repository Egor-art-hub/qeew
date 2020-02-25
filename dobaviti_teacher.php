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
<h2 align = "center">Enter data for teacher</h2>

<table><td>
<form  method ="POST" enctype="multipart/form-data">

<div class="form-group">
<label for="name_teacher">Name:</label>
<input type="text" class="form-control" id="name_teacher" placeholder="Enter name" name="name_teacher">
</div>

<div class="form-group">
<label for="age">Age:</label>
<input type="text" class="form-control" id="age" placeholder="Enter age" name="age">
</div>

<div class="form-group">
<label for="salary">Salary:</label>
<input type="integer" class="form-control" id="salary" placeholder="Enter salary" name="salary">
</div>

<div class="form-group">
<label for="tel">Tel:</label>
<input type="integer" class="form-control" id="tel" placeholder="Enter tel" name="tel">
</div>


<button name= "enter11" type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</td></table>

<?php

include_once('connection.php');

if (isset($_POST['enter11'])) {
if (isset($_POST['name_teacher']) && isset($_POST['age'])  && isset($_POST['salary']) && isset($_POST['tel']) ) {

$sql = "INSERT INTO teachers
VALUES ('DEFAULT','".$_POST['name_teacher']."','".$_POST['age']."','".$_POST['salary']."','".$_POST['tel']."')";

if ($conn->query($sql) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
} 

     header("Location: http://localhost/MyDB/qwery.php?spisok=50&method=");

ob_end_flush();
}
}
?>

</body>
</html>


