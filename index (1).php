<?php include_once "Back.php" ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SelectImage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        .image {
            max-width: 40%;
            /*max-height: auto;*/
        }
    </style>
</head>
<body>
<table align="center">
    <tr>
        <td>
            <form class="form-inline" method="get">
                <h2>Select image </h2>&nbsp;
                <input type="number" name="id" class="form-control" placeholder=" " required>
                &nbsp;<button class="btn btn-info btn-lg btn-primary btn-block form-control" type="submit" name="method"
                              value="getImage">Show me
                </button>
        </td>

        </form>
        <td>

            <form class="form-inline" method="get">
                <button name="show_all" class="btn btn-info btn-lg btn-primary btn-block form-control" type="submit">
                    Show all images
                </button>
        </td>
        <td>
            <!--        <a  name="show_all" class="btn btn-dark btn-lg btn-primary btn-block form-control" type="submit">Show all images</a>-->
            <a class="btn btn-info btn-lg btn-primary btn-block form-control" role="button" href="list.txt"
               download="list.txt">
                Download list of images
            </a>
        </td>
    </tr>
</table>
<hr>
<div class="form-group">
    <?php
    if (isset($_GET['method'])) {
        $id = getImage($_GET['id'], $images);
        if ($_GET['id'] != NULL and $_GET['method'] == 'getImage') { ?>

            <img src="images/<?= $images[$id] ?>" class="rounded mx-auto d-block image">

            <?php
        }


    } elseif (isset($_GET['show_all'])) {
        foreach ($images as $image) { ?>

            <img src="images/<?= $image ?>" class="rounded mx-auto d-block image">

            <?php echo '<p></p>';
        }
    }
    ?>

</body>
</html>
