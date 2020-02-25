<?php
function getImage($id, $images)
{
    if (isset($id) and is_numeric($id)) {
        if ($id < count($images)) {
            http_response_code(200);
        } elseif ($id >= count($images)) {
            http_response_code(404);
            echo "<h2 align='center'>404 error: File not found</h2>";
            die();
        }
    } elseif ($id == NULL) {
        http_response_code(405);
        echo "<h2 align='center'>405 error: Method not allowed</h2>";
        die();
    }
    return $id;
}

$images = [];
$dir = "images/";

$images = scandir($dir);
array_shift($images);
array_shift($images);

$fp = fopen("list.txt", "wr");
foreach ($images as $imageName) {
    fwrite($fp, $imageName . "\r\n");
}
fclose($fp);


