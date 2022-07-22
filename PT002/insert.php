<?php
include 'conn.php';
if (isset($_POST['done'])) {
	$heading=$_POST['heading'];
	$description=$_POST['disc'];
	$button=$_POST['button'];
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];  
    $folder = "images/".$filename;
      //$filename = $_FILES["uploadfile"]["name"];

     if($heading=="SLIDE 1"){
     // $q="UPDATE `mytab` SET `id`='$id',`heading`='$heading',`description`='$description',`button`='$button',image=' $filename' WHERE id='$id'";
     $q="DELETE FROM mytab";
     $query=mysqli_query($con,$q);
     $q="INSERT INTO mytab (heading, description, button, image) VALUES('$heading','$description','$button','$filename')";
      if (move_uploaded_file($tempname, $folder)) {
      $msg = "Image uploaded successfully";
     }
     else{
      $msg = "Failed to upload image";
     }
    }
    else if($heading=="SLIDE 2"){
      $q="DELETE FROM mstab";
     $query=mysqli_query($con,$q);
      $q="INSERT INTO mstab (heading, description, button, image) VALUES('$heading','$description','$button','$filename')";
      if (move_uploaded_file($tempname, $folder)) {
      $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
      }
    }
    else if($heading=="SLIDE 3"){
      $q="DELETE FROM mntab";
     $query=mysqli_query($con,$q);
      $q="INSERT INTO mntab (heading, description, button, image) VALUES('$heading','$description','$button','$filename')";
      if (move_uploaded_file($tempname, $folder)) {
      $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
      }
    }

// 	$q="INSERT INTO mytab (heading, description, button, image) VALUES('$heading','$description','$button','$filename')";
//      if (move_uploaded_file($tempname, $folder)) {
//      $msg = "Image uploaded successfully";
// }else{
//        $msg = "Failed to upload image";
// }
echo $msg;
	$query=mysqli_query($con,$q);
}
?>

<?php
error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
      <!-- Bootstrap core CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php"><img src="images/vlogo.png" alt="" width="160" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="insert.php" style="color:black">Insert <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="tnp.php" style="color:black">Training & Placement <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
<br>
<br>
<br>
<div class="container mt-3">
  <h2  class="btn btn-primary form-control">Insert Data</h2>
  <form method="post"  enctype="multipart/form-data">
 <div class="mb-3">
<label>Heading:
</label>
<br>
      <select class="form-control" placeholder="Enter Heading" name="heading"><option>SLIDE 1</option>
      <option>SLIDE 2</option>
      <option>SLIDE 3</option>
</select>
<!-- <input type = "text"  class="form-control" placeholder="Enter Heading" name="heading"> -->
    </div>
<div  class="mb-3">
      <label>Description:</label>
      <input type="text" class="form-control" placeholder="Enter description" name="disc">
    </div>
    <div class="mb-3 mt-3">
      <label>button:</label>
      <input type="text" class="form-control" placeholder="Enter button" name="button">
    </div>
   
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <div class="mb-3 mt-3">
      <label>image:</label>
    <input type="file" 
                   name="uploadfile" 
                   value="" />
      </div>            
    <button type="submit" class="btn btn-success form-control" name='done'>Submit</button>
  </form>
</div>
<div>
        <p>   
            <?php echo $msg; //display some PHP here?> 
        </p>
</div>
</body>
</html>
