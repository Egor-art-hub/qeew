<?php
ob_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>MyDB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.."></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap..."></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<p>
    <?php echo '<br><br>'; ?>
    <table align="center">
 <tr>
        <td>
            <form class="form-inline" method="GET">
               <select name="spisok" class="form-control" >
                    <option value="0">
                    <option value="30">Cписок учеников
                    <option value="50">Список Учителей
                    <option value="1">Оценки
                </select>
                &nbsp;<button class="btn btn-info btn-lg btn-primary btn-block form-control" type="submit" name="method">Отправить
                </button>

            </td>
            </form>

    </tr> 
</table>
<?php echo '<br><br><br><br>'; ?>

</p>

</body>

<?php

if (isset($_GET['spisok']) && $_GET['spisok'] !== '' && $_GET['spisok'] == '30' && $_GET['spisok'] !== '0' && isset($_GET['method'])) {
    include_once('students.php');
}
  

elseif (isset($_GET['spisok']) && $_GET['spisok'] == '50' && $_GET['spisok'] !== '0' && isset($_GET['method'])) {
       include_once('teachers.php');
}

elseif (isset($_GET['spisok']) && $_GET['spisok'] !== '' && $_GET['spisok'] == '1' && $_GET['spisok'] !== '0' && isset($_GET['method'])) {
    include_once('marks.php');

}


ob_end_flush();

?>


</body>

</html>