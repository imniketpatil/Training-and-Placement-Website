<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="css/w.png" alt="First slide">
     <?php
  include 'conn.php';
  $q="SELECT * FROM mytab";
  $query=mysqli_query($con,$q);
  while ($res=mysqli_fetch_array($query)) {
    
  ?> 
        <div class="carousel-caption d-none d-md-block"  >
          <img src="images/<?php echo $res['image']; ?>" width="100%" height="100%" style="align:center">
         <h1><?php echo $res['heading']; ?></h1>
    <p><?php echo $res['description']; ?></p>
    <button class="btn btn-primary"><?php echo $res['button']; ?></button>
</div>
<?php
}
?>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="css/w.png" alt="Second slide">
            <?php
  include 'conn.php';
  $q="SELECT * FROM mstab";
  $query=mysqli_query($con,$q);
  while ($res=mysqli_fetch_array($query)) {
    
  ?>
        <div class="carousel-caption d-none d-md-block" >
          <img src="images/<?php echo $res['image']; ?>" width="100%" height="100%" style="">

         <h1><?php echo $res['heading']; ?></h1>
    <p><?php echo $res['description']; ?></p>
    <button class="btn btn-primary"><?php echo $res['button']; ?></button>
</div>
<?php
}
?>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="css/w.png" alt="Third slide">
            <?php
  include 'conn.php';
  $q="SELECT * FROM mntab";
  $query=mysqli_query($con,$q);
  while ($res=mysqli_fetch_array($query)) {
    
  ?>
        <div class="carousel-caption d-none d-md-block"  >
                    <img src="images/<?php echo $res['image']; ?>" width="100%" height="100%" style="">

         <h1><?php echo $res['heading']; ?></h1>
    <p><?php echo $res['description']; ?></p>
    <button class="btn btn-primary"><?php echo $res['button']; ?></button>
</div>
<?php
}
?>  
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div> 