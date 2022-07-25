<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->

  <!----------------------------------------------------------- Font Family ------------------------------------------------------------>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"
    integrity="sha256-6XMVI0zB8cRzfZjqKcD01PBsAy3FlDASrlC8SxCpInY=" crossorigin="anonymous"></script>


<!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
    
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

 
   <main role="main">
   
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/SVPCETxAccenture.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxATOS.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxBirlaSoft.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxCapgemini.jpg" alt="Fourth slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxCognizant.jpg" alt="Fifth slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxNICE.jpg" alt="Sixth slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxPersistant.jpg" alt="Seventh slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxTCS.jpg" alt="Eight slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/SVPCETxWipro.jpg" alt="Ninth slide">
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

<h1>Placements 2022</h1>
<br>
<br>
<br>
<br>


  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/Capgemini.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>IN <a href="https://www.capgemini.com/">Capgemini</a></h2>
            <ul class="list-unstyled">
            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Prakhar Tamrakar</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Tanay Mukkawar</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Nishant Bongade</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>Bhavesh Moon</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>Sarthak Zalte</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>Rohan Pathekar</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>Pritam Wankhede</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>Krushank Bhagat</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>Niharika Warghane </p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>Subiya Khan</p></td>
  </tr>

</table>
              </ul>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/TCS.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
          <br>
          <br>
            <h2>IN <a href="https://www.tcs.com/">TCS</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Aditya Kharwar</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Shashank Patne.</p></td>
  </tr>
</table>
              </ul>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/NICE.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
          
            <h2>IN <a href="https://www.nice.com/">NICE</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Sakshi Muttepawar</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Tanmay Chauhan</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p><p>Prajwal Wagh</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p><p>Mahek Batra</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p><p>Shubham Bagde</p></td>
  </tr>
</table>       
            </ul>
          </div>
        </div>
      </div>
    </section>
    <br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/Persistant.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>in <a href="https://www.persistent.com/">Persistant</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Bhavesh Sonewale</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Prapti Darvekar</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Priyanka Gaidhane</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Shambhavi Soman</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Himanshu Bharati </p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Devesh Kumar</p></td>
  </tr>
</table>  
</ul>
          </div>
        </div>
      </div>
    </section>
    <br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/Accenture.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
          <br>
          <br>
            <h2>in <a href="https://www.accenture.com/in-en/">Accenture</a></h2>
            <ul class="list-unstyled">
            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Neha Bhoyar</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Shreya Santoshwar</p></td>
  </tr>
</table>
              </ul>
          </div>
        </div>
      </div>
    </section>
    <br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/birlasoft.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
          <br>
          <br>
          <br>
          
        
            <h2>in <a href="https://www.birlasoft.com/">BirlaSoft</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Shashwat Gupta</p></td>
  </tr>

</table>
</ul>
          </div>
        </div>
      </div>
    </section>
    <br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/Wipro.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
          <br>
          <br>
          <br>
          <br>
            <h2>in <a href="https://www.wipro.com/">Wipro</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Vishakha Gade</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Aniket Gaurikar</p></td>
  </tr>
</table>
</ul>
          </div>
        </div>
      </div>
    </section>
    <br>
<br>
<br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/Atos.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>in <a href="https://atos.net/en/india">Atos</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Anushka Thakre</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Athul Nair</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Himani Raut</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Issac Martin</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Kashish Bawankule</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Mahima Chakraborty</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Pradhnyawant Tayade</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Purva Jawanjale</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Saloni Umredkar</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Sameer Bagde</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Saniya Imroze</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Saptak Naik</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Shriya Sorte</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Suyog Kulkarni</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Vipasha Chikate</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Yash Anwane</p></td>
  </tr>
</table>
</ul>
          </div>
        </div>
      </div>
    </section>
    <br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/Cognizant.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>in <a href="https://www.cognizant.com/in/en">Cognizant</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p> Aditya Pande</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p> Komal Selokar</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p> Srividya Vadlamani</p></td>
  </tr>

  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Aishwarya Balkare</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Purva Nagpure</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p> Shubham Awchat</p></td>
  </tr>
</table>
</ul>
          </div>
        </div>
      </div>
    </section>
    <br>
<br>
<br>
<br>
  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/InfoCepts.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>In <a href="https://www.infocepts.com/">InfoCepts</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Mrunalini Shende</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Tejas Bhanarkar</p></td>
  </tr>
</table> 
            </ul>
          </div>
        </div>
      </div>
    </section>

      <!-- FOOTER -->
      <!-- <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer> -->

      <footer class="text-center text-white" style="background-color: #e3f2fd;">
  <!-- Grid container -->
  <div class=" pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://m.facebook.com/stvincentngp/" role="button"
          data-mdb-ripple-color="dark"><i><img src="https://img.icons8.com/ios-glyphs/30/000000/facebook-new.png"/></i></a>

        <!-- Twitter -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://twitter.com/techpallottines?t=NHlQkW3me34pWp_Ugy9svw&s=08" role="button"
          data-mdb-ripple-color="dark"><i><img src="https://img.icons8.com/ios-glyphs/30/000000/twitter--v1.png"/></i>
        </a>

        <!-- Google -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.stvincentngp.edu.in/" role="button"
          data-mdb-ripple-color="dark"><i><img src="https://img.icons8.com/ios-glyphs/30/000000/google-logo--v1.png"/></i></a>

        <!-- Instagram -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://instagram.com/svpcetnagpur?igshid=YmMyMTA2M2Y=" role="button"
          data-mdb-ripple-color="dark"><i><img src="https://img.icons8.com/ios-glyphs/30/000000/instagram-new.png"/></i></a>

        <!-- youtube -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.youtube.com/channel/UCwI-u4lNseB2N9t2H5otnVA" role="button"
          data-mdb-ripple-color="dark"><i><img src="https://img.icons8.com/ios-glyphs/30/000000/youtube-play.png"/></i></a>
        <!-- Mail -->
        <a class="btn btn-link btn-floating btn-lg text-dark m-1"  href="mailto:info@stvincentngp.edu.in" role="button"
          data-mdb-ripple-color="dark"><i><img src="https://img.icons8.com/ios-glyphs/30/000000/gmail.png"/></i></a>
      </section>
    <!-- Section: Social media -->
  </div>

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: #F6E3FC;">
    © 2022 Copyright:
    <a class="text-dark" href="https://www.stvincentngp.edu.in/">St. Vincent Pallotti College Of Engineering And Technology</a>
  </div>
  <!-- Copyright -->
</footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
