<?php
ob_start();
//include_once('qwery.php');
include_once('connection.php');   
   $id = $_GET['delete']; 

   if (isset($_GET['delete'])) {
 	//mysqli_query("DELETE FROM students WHERE ID=$id;");
 	   $sql3 = "DELETE FROM `marks` WHERE ID_student in (Select ID_student from marks WHERE ID_student in (Select ID from students WHERE name_student = '$id')) ";
	if (mysqli_query($conn, $sql3)) {
	echo "<h2 align = 'center'>Record deleted successfully</h2>";
	} else {
	echo "Error deleting record: " . mysqli_error($conn);
	}

   header("Location: http://localhost/MyDB/qwery.php?spisok=1&method=");
 // переадресовываем на главную страницу, что бы при нажатии F5 повторного удаления небыло
ob_end_flush();
}

?>