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

    ini_set("display_errors", "1");
    $uploaddir = 'C:\Bitnami\wampstack-7.3.13-0\apache2\htdocs\upload\file\\';
    $uploadfile = $uploaddir . basename($_FILES[$_POST['chooseFile']]['name']);
    echo '<pre>';
    if (move_uploaded_file($_FILES['chooseFile']['tmp_name'], $uploadfile)) {
        echo "파일이 유효하고, 성공적으로 업로드 되었습니다.\n";
    } else {
        print "파일 업로드 공격의 가능성이 있습니다!\n";
    }
    echo '자세한 디버깅 정보입니다:';
    print_r($_FILES);

$result = mysqli_query($conn, $sql);
if($result === false){
    echo mysqli_error($conn);
}
?>