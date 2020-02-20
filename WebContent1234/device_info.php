
<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'opentutorials');

  if(isset($_GET['id'])) {
    $sql = "SELECT * FROM device WHERE id={$_GET['id']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['api_name'] = $row['api_name'];
    $article['image_path'] = $row['image_path'];
    $article['information'] = $row['information'];
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

	<link rel="stylesheet" href="css/bootstrap-grid.css">		
	<link rel="stylesheet" href="css/bootstrap-reboot.css">


</head>
<body>
<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row no-gutters d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate p-5 p-lg-0">
			            <h2 class="mb-4"><?=$row['api_name']?></h2>
                  <img src="http://localhost/img/<?=$row['image_path']?>">
                  <h6 class="mb-4"><?=$row['information']?></h6>
			            <p><a href="#" onclick="location.href='buy.php?id=<?=$row['id']?>'" class="btn btn-primary py-3 px-4">Buy now</a> <a href="#" class="btn btn-white py-3 px-4">Back</a></p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
</body>
</html>