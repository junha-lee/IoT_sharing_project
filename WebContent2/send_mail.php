<HTML> 
 <HEAD> 
  <TITLE> 네이버 SMTP이용하여 메일보내기 </TITLE> 
 </HEAD> 

 <BODY leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu="return false"> 
  <link rel="stylesheet" href="../css/global.css" type="text/css">     
        
<?php
$conn = mysqli_connect("localhost", "root", "111111", "opentutorials");
$sql = "SELECT * FROM device WHERE id={$_POST['id']}";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$to_id=$_POST['email'];
$from_id="ccke98@naver.com";
$pass="ck48974527";
$title="PHP test";
$article=$row['URL'];


require_once("class.phpmailer.php");

$smtp="smtp.naver.com";	
$mail=new PHPMailer(true);	
$mail->IsSMTP();

try{		
$mail->Host=$smtp;		
$mail->SMTPAuth=true;		
$mail->Port=465;		
$mail->SMTPSecure="ssl";		
$mail->Username=$from_id;		
$mail->Password=$pass;	
$mail->CharSet = "UTF-8";	
$mail->SetFrom($from_id);		
$mail->AddAddress($to_id);		
$mail->Subject=$title;		
$mail->MsgHTML($article);		
$mail->Send();	
	
}	catch (phpmailerException $e){		
echo $e->errorMessage();	
}	catch (Exception $e){		
echo $e->getMessage();	
}

echo "메일이 발송되었습니다";
?>
 </BODY> 
</HTML> 