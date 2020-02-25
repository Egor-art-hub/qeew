<?php
//include_once('qwery.php');
include_once('connection.php');

   $id = $_GET['edit']; 
   $arr = explode(".", $id);
   var_dump($arr);

   $sql = "UPDATE students SET name_student='$arr[1]', age = $arr[2], tel = $arr[2] WHERE ID = $arr[0]";
   $result = $conn->query($sql);

   $result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));

   if($result)
   echo "<h2 align='center'>Данные обновлены</h2>";
?>