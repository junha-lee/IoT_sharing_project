<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql  = "
    INSERT INTO device (
        api_name,
        PW,
        URL,
        information,
        image_path
    ) VALUES (
        '{$_POST['api_name']}',
        '{$_POST['PW']}',
        '{$_POST['url']}',
        '{$_POST['information']}',
        '{$_POST['chooseFile']}'
    )";



$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
}
?>