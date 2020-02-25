<?php
ob_start();
//include_once('qwery.php');
include_once('connection.php');

   $id = $_GET['delete']; //echo $id.'<br>';
   if (isset($_GET['delete'])) {
 	//mysqli_query("DELETE FROM students WHERE ID=$id;");
 	   $sql3 = "DELETE FROM marks WHERE ID_student = $id ";
	if (mysqli_query($conn, $sql3)) {
	echo "<h2 align = 'center'>Record deleted successfully</h2>";
	} else {
	echo "Error deleting record: " . mysqli_error($conn);
	}
	$sql = "DELETE FROM students WHERE ID = $id ";
	if (mysqli_query($conn, $sql)) {
	echo "<h2 align = 'center'>Record deleted successfully</h2>";
	} else {
	echo "Error deleting record: " . mysqli_error($conn);
	}
   header("Location: http://localhost/MyDB/qwery.php?spisok=30&method=");
 // переадресовываем на главную страницу, что бы при нажатии F5 повторного удаления небыло

ob_end_flush();
}

?>