
<?php
ob_start();

include_once('connection.php');

    $sql = "SELECT * FROM students ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        ?>
<div class="container" >

<table  align = "center" id="myTable" class="table">
<caption><tr align="center"><h2 align="center">Students</h2ali></tr></caption>
<thead>
<form class="form-inline" method="post">
<tr>

<th>#</th>
<th scope="row">Name student</th>
<th scope="row">Age</th>
<th scope="row">Tel</th>
<th>
                <button name="input" class="btn btn-info btn-lg btn-primary btn-block form-control" type="submit" >
                    Добавить
                </button></th>
</tr>
</thead>
<tbody>

    <?php
          $i = 1;
        while ($row = $result->fetch_assoc()) {
            ?><tr>
          <td> <?= $i++; ?></td>
            <td ><input type='text' name="name<?php echo $row['ID'];?>" value=<?php echo $row['name_student'];  ?> > </td>
            <td><input type='text' name="age<?php echo $row['ID']; ?>" value=<?php echo $row['age'];  ?> > </td>
            <td><input type='text' name="tel<?php echo $row['ID']; ?>" value=<?php echo $row['tel'];  ?> > </td>
            <td> <button  class="btn" name= 'edit'  value = "<?php echo $row['ID']; ?>" ><img src="edit.png"></button>
                 <div class="btn">

                     <a align="center" name= 'delete' type="submit" value="<?= $row['ID']; ?> " href="delete_student.php/?id=<?= $row['ID']; ?>&delete=<?= $row['ID'] ?>"><img src="delete.png"></a>
                 </div>
            </td> <?php
        }
    ?>

     </form>
</tbody>
</table>
</div>
<?php
    
    } else {
        echo "0 results";
    }

    if (isset($_POST['input'])) {
        header("Location: http://localhost/MyDB/dobaviti_student.php");
   }
   

    if (isset($_POST['edit'])) {
        $id  = $_POST['edit'];
        $name_student = $_POST["name$id"];
        $age = $_POST["age$id"];
        $tel = $_POST["tel$id"];
         $sql = "UPDATE students SET name_student = '$name_student', age = $age, tel = $tel WHERE ID = $id";
        $result = $conn->query($sql);
        $result = mysqli_query($conn, $sql) or die("Ошибка " . mysqli_error($conn));
           header("Location: http://localhost/MyDB/qwery.php?spisok=30&method=");
 // переадресовываем на главную страницу, что бы при нажатии F5 повторного удаления небыло

ob_end_flush();
    
    }


?>