<?php
include 'conn.php';
if (isset($_POST['done'])) {
  $id = $_GET['id'];
  $heading=$_POST['heading'];
  $description=$_POST['disc'];
  $button=$_POST['button'];
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];  
    $folder = "images/".$filename;
  $q="UPDATE `mytab` SET `id`='$id',`heading`='$heading',`description`='$description',`button`='$button',image=' $filename' WHERE id='$id'";
        if (move_uploaded_file($tempname, $folder)) {
      $msg = "Image uploaded successfully";
}else{
        $msg = "Failed to upload image";
}
echo $msg;
  $query=mysqli_query($con,$q);
  header("location:display.php");

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2  class="btn btn-primary form-control">Update Data</h2>
  <form method="post">
 <div class="mb-3">
<label>Heading:</label>
      <input type="text" class="form-control" placeholder="Enter heading" name="heading">
    </div>
<div  class="mb-3">
      <label>Description:</label>
      <input type="text" class="form-control" placeholder="Enter description" name="disc">
    </div>
    <div class="mb-3 mt-3">
      <label>button:</label>
      <input type="text" class="form-control" placeholder="Enter button" name="button">
    </div>
       <div class="mb-3 mt-3">
      <label>image:</label>
    <input type="file" 
                   name="uploadfile" 
                   value="" />
      </div>  
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-success form-control" name='done'>Submit</button>
  </form>
</div>

</body>
</html>
