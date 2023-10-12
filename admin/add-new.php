<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Tenders</title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
   Tenders
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="addtender.php" class="btn btn-dark mb-3">Post A Tender</a>

  <div class="row">
<div class="col-md-8 offset-md-2">
<div class="card">
<div class="card-header bg">
<h1>Upload File</h1>

</div>
<div class="card-body">
<form method="post" action="" enctype="multipart/form-data">
<input type="file" name="choosefile" class="form-control" value=""><br>
<button type="submit" name="uploadfile" class="btn btn-primary">Upload</button>
</form>
</div>
</div>
</div>
</div>
        <?php
       if(isset($_POST['uploadfile'])){
$filename = $_FILES["choosefile"]["name"];
$tempname = $_FILES["choosefile"]["tmp_name"];
$folder = "uploadedFile/".$filename;



$sql = "INSERT INTO vacancies (filename) VALUES ('$filename')";
mysqli_query($conn,$sql);

if(move_uploaded_file($tempname,$folder)){
$msg = "File Uploaded Successfully...";
}
else{
$msg = "Failed to Upload File...";
}
}

?>
        
      </tbody>
    </table>
  </div>
 <a href="home.php" class="btn btn-dark mb-3">Back</a>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>