<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");

$sql  = "
    INSERT INTO userinfo (
        First_Name,
        Last_Name,
        Email,
        gender,
        password,
        Phone_Number,
        subject
    ) VALUES (
        '{$_POST['first_name']}',
        '{$_POST['last_name']}',
        '{$_POST['Email']}',
        'sdfsdf',
        '{$_POST['password']}',
        '{$_POST['phone']}',
        '{$_POST['subject']}'
    )";
$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
}
?>
