
<?php
ob_start();
include_once('connection.php');

  $sql = "SELECT students.name_student,
                
     SUM(CASE WHEN subjects.ID='1' THEN marks.mark END) 'Math',
     SUM(CASE WHEN subjects.ID='2' THEN marks.mark END)  'English',
     SUM(CASE WHEN subjects.ID='3' THEN marks.mark END)  'Chemistry',
     SUM(CASE WHEN subjects.ID='4' THEN marks.mark END)  'Geography',
     SUM(CASE WHEN subjects.ID='5' THEN marks.mark END)  'Biology'

FROM marks
  inner join subjects on subjects.ID = marks.ID_subject
       inner join students on students.ID = marks.ID_student    
GROUP BY  students.name_student
";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        ?>
<div class="container" >


<table class="table" align = "center" id="myTable1">
<thead>
<tr align="center"><h2 align="center">Marks</h2ali></tr>
<form class="form-inline" method="post">
<tr>

<th>#</th>
<th scope="row">Name student</th>
<th scope="row">Math</th>
<th scope="row">English</th>
<th scope="row">Chemistry</th>
<th scope="row">Geography</th>
<th scope="row">Biology</th>
<th>
                <button name="input" class="btn btn-info btn-lg btn-primary btn-block form-control" type="submit" >
                    Добавить
                </button></th>
</tr>
</thead>
<tbody>
<?php
// output data of each row
    $i = 1;
    while ($row = $result->fetch_assoc()) {                  
?>
            <tr>
                    <td><?php echo $i++; ?></td>
                    <td><input type='text' readonly="readonly" name="<?php echo $row['name_student']; ?>" value=<?php echo $row["name_student"]; ?> > </td>
                    <td><input type='text' name="Math<?php echo $row['name_student']; ?>" value=<?php echo $row["Math"]; ?> > </td>
                    <td><input type='text' name="English<?php echo $row['name_student']; ?>" value=<?php echo $row["English"]; ?> > </td>
                    <td><input type='text' name="Chemistry<?php echo $row['name_student']; ?>" value=<?php echo $row["Chemistry"]; ?> > </td>
                    <td><input type='text' name="Geography<?php echo $row['name_student']; ?>" value=<?php echo $row["Geography"]; ?> > </td>
                    <td><input type='text' name="Biology<?php echo $row['name_student']; ?>" value=<?php echo $row["Biology"]; ?> > </td>
            <td> <button  class="btn" name= 'edit'  value = "<?php echo $row['name_student']; ?>" ><img src="edit.png"></button>
                <div class="btn">

                    <a align="center" name= 'delete' type="submit" value="<?= $row['name_student']; ?> " href="delete_mark.php/?id=<?= $row['name_student']; ?>&delete=<?= $row['name_student'] ?>"><img src="delete.png"></a>
                </div>
            </td>
            </tr> 

<?php  }  ?>

</form>

</tbody>
</table>
</div><?php

} else {
    echo "0 results";
}

if (isset($_POST['input'])) {
    header("Location: http://localhost/MyDB/dobaviti_mark.php");
}

if (isset($_POST['edit'])) {

    $id  = $_POST['edit'];
    $math = $_POST["Math$id"];
    $english = $_POST["English$id"];
    $chemistry = $_POST["Chemistry$id"];
    $geography = $_POST["Geography$id"];
    $biology =  $_POST["Biology$id"];

    echo $id.' '.$math.' '.$english.' '.$chemistry;


    $sql = "UPDATE marks SET mark=$math WHERE ID_student = (SELECT ID FROM students WHERE name_student = '$id') and ID_subject = 1";
    $result = $conn->query($sql);

    $result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));

    $sql = "UPDATE marks SET mark=$english WHERE ID_student = (SELECT ID FROM students WHERE name_student = '$id') and ID_subject = 2";
    $result = $conn->query($sql);

    $result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));

    $sql = "UPDATE marks SET mark=$chemistry WHERE ID_student = (SELECT ID FROM students WHERE name_student = '$id') and ID_subject = 3";
    $result = $conn->query($sql);

    $result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));
    $sql = "UPDATE marks SET mark=$geography WHERE ID_student = (SELECT ID FROM students WHERE name_student = '$id') and ID_subject = 4";
    $result = $conn->query($sql);

    $result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));
    $sql = "UPDATE marks SET mark=$biology WHERE ID_student = (SELECT ID FROM students WHERE name_student = '$id') and ID_subject = 5";
    $result = $conn->query($sql);

    $result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));




    header("Location: http://localhost/MyDB/qwery.php?spisok=1&method=");
    // переадресовываем на главную страницу, что бы при нажатии F5 повторного удаления небыло

    ob_end_flush();

}


?>