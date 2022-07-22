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
 
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"> -->
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
    <h1 style="color:black"><?php echo $res['description']; ?></h1>
    <a href="https://www.stvincentngp.edu.in/"><button class="btn btn-primary"><?php echo $res['button']; ?></button></a>
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
    <h1 style="color:black"><?php echo $res['description']; ?></h1>
    <a href="https://www.stvincentngp.edu.in/training-placements"><button class="btn btn-primary"><?php echo $res['button']; ?></button></a>
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
    <h1 style="color:black"><?php echo $res['description']; ?></h1>
    <a href="https://www.stvincentngp.edu.in/hostels"><button class="btn btn-primary"><?php echo $res['button']; ?></button></a>
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

    <!-- <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="capgeminilogo.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="SVPCLOGO.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>        </div>
            <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="SVPCLOGO.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>        </div>
        <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="SVPCLOGO.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="SVPCLOGO.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>        </div>
            <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="SVPCLOGO.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>        </div>
        <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="SVPCLOGO.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>        </div>
        <div class="col-md-auto" style="Padding:50px">
        <img class="rounded-circle" src="SVPCLOGO.jpg" alt="Generic placeholder image" width="140" height="140" style="align:center">
            <h2>Heading</h2>
            <p>Description</p>
            <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>        </div>
      </div>
    </div> 


      </div> -->
<!-- -----------------------------------IMG SECTION--------------------------------------------- -->
<!-- <div class="container">            
      <img src="images/capgemini.jpg" class="img-rounded" alt="Cinque Terre" width="275" height="183"> 
      <h2 style="align:center">Capgemini</h2>
      <p style="align:center">Capgemini is a global leader in partnering with companies to transform and manage their business by harnessing the power of technology. The Group is guided everyday by its purpose of unleashing human energy through technology for an inclusive and sustainable future. It is a responsible and diverse organization of over 340,000 team members in more than 50 countries. With its strong 55-year heritage and deep industry expertise, Capgemini is trusted by its clients to address the entire breadth of their business needs, from strategy and design to operations, fueled by the fast evolving and innovative world of cloud, data, AI, connectivity, software, digital engineering and platforms. The Group reported in 2021 global revenues of €18 billion.</p>
      
      <img src="images/capgemini.jpg" class="img-rounded" alt="Cinque Terre" width="275" height="183"> 
      <h2 style="align:center"></h2>
      <p style="align:center">Capgemini is a global leader in partnering with companies to transform and manage their business by harnessing the power of technology. The Group is guided everyday by its purpose of unleashing human energy through technology for an inclusive and sustainable future. It is a responsible and diverse organization of over 340,000 team members in more than 50 countries. With its strong 55-year heritage and deep industry expertise, Capgemini is trusted by its clients to address the entire breadth of their business needs, from strategy and design to operations, fueled by the fast evolving and innovative world of cloud, data, AI, connectivity, software, digital engineering and platforms. The Group reported in 2021 global revenues of €18 billion.</p>
    </div> -->
    
      <h1>Our Prominent Recruiters</h1>
<br>
<br>

  <section class="other-features">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 wow fadeIn">
            <img src="company/Capgemini.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.capgemini.com/">Capgemini</a></h2>
            <ul class="list-unstyled">
            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Capgemini is a global leader in partnering with companies to transform and manage their business by harnessing the power of technology.</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td>The Group is guided everyday by its purpose of unleashing human energy through technology for an inclusive and sustainable future.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>It is a responsible and diverse organization of over 340,000 team members in more than 50 countries.</p></td>
  </tr>
  <td><li><i class="fa fa-cogs"></i></td>
  <td><p>With its strong 55-year heritage and deep industry expertise, Capgemini is trusted by its clients to address the entire breadth of their business needs, from strategy and design to operations, fueled by the fast evolving and innovative world of cloud, data, AI, connectivity, software, digital engineering and platforms. The Group reported in 2021 global revenues of €18 billion.</p></td>
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
            <img src="company/TCS.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.tcs.com/">TCS</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>A purpose-led organization that is building a meaningful future through innovation, technology, and collective knowledge. We're #BuildingOnBelief.</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>A part of the Tata group, India's largest multinational business group, TCS has over 500,000 of the world’s best-trained consultants in 46 countries. The company generated consolidated revenues of US $22.2 billion in the fiscal year ended March 31, 2021, and is listed on the BSE (formerly Bombay Stock Exchange) and the NSE (National Stock Exchange) in India.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>TCS' proactive stance on climate change and award-winning work with communities across the world have earned it a place in leading sustainability indices such as the MSCI Global Sustainability Index and the FTSE4Good Emerging Index.</p></td>
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
            <h2>About <a href="https://www.nice.com/">NICE</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>NICE, an Amazon company, delivers Cloud and Technical Computing / HPC solutions for companies and institutions.</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>This includes the industry leading EnginFrame web portal and the Desktop Cloud Visualization (DCV) remote desktop protocol for high-end 3D applications.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p><p>The NICE EnginFrame web portal boosts the performance of HPC users - with user-friendly, highly customizable access to Grids and High Performance Computing (HPC) applications, data, and infrastructures.</p></td>
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
            <img src="company/Persistant.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.persistent.com/">Persistant</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>We are a trusted Digital Engineering and Enterprise Modernization partner, combining deep technical expertise and industry experience to help our clients anticipate what’s next and take action. Our offerings, proven solutions and innovative partner ecosystem create unique competitive advantage for our clients by giving them the power to see beyond and rise above.</p></td>
  </tr>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>We work with many industry leading organizations across 18 countries - including 14 of the 30 most innovative US companies, 80% of the largest banks in the US and India, and numerous innovators across the healthcare ecosystem. In addition, we are recognized across the industry as the market leaders from delivery and customer excellence, as rated by ISG (2020 and 2021 ISG Star of Excellence Awards).</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>At Persistent, our values are more than a list of ideals to improve our corporate image. We’re dedicated to building an inclusive culture that reflects what’s important to our employees and is based on what they value. </p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td>Accelerate growth, both professionally and personally.</td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Impact the world in powerful, positive ways, using the latest technologies.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Enjoy collaborative innovation, with diversity and work-life wellbeing at the core</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Unlock global opportunities to work and learn with the industry’s best.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>As a result, 95% of our employees approve of the CEO and 83% recommend working at Persistent to a friend.</p></td>
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
            <img src="company/Accenture.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.accenture.com/in-en/">Accenture</a></h2>
            <ul class="list-unstyled">
            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Accenture is a global professional services company with leading capabilities in digital, cloud and security.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Combining unmatched experience and specialized skills across more than 40 industries, we work as one team with a common goal—to create 360° Value everywhere by embracing change. </p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>With our global network of over 100 innovation hubs around the world, we apply industry expertise, diverse skill sets and next-generation technology to each business challenge.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Our 699,000 people deliver on the promise of technology and human ingenuity every day, making a positive impact for all stakeholders and help our clients become the next and best versions of themselves.</p></td>
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
            <img src="company/birlasoft.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.birlasoft.com/">BirlaSoft</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>The Possibilities are Endless When You #ChallengeTheNorm</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Birlasoft combines the power of domain, enterprise, and digital technologies to reimagine business processes for customers and their ecosystem. </p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Its consultative and design thinking approach makes societies more productive by helping customers run businesses.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>As part of the multibillion-dollar diversified CK Birla Group, Birlasoft with its 12,000+ professionals, is committed to continuing the Group’s 160-year heritage of building sustainable communities.</p></td>
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
            <img src="company/Wipro.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.wipro.com/">Wipro</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Wipro Limited (NYSE: WIT, BSE: 507685, NSE: WIPRO) is a leading global information technology, consulting and business process services company.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>We harness the power of cognitive computing, hyper-automation, robotics, cloud, analytics and emerging technologies to help our clients adapt to the digital world and make them successful.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>A company recognized globally for its comprehensive portfolio of services, strong commitment to sustainability and good corporate citizenship, we have over 220,000 dedicated employees serving clients across six continents.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Together, we discover ideas and connect the dots to build a better and a bold new future. </p></td>
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
            <img src="company/Atos.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://atos.net/en/india">Atos</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>| Worldwide Digital Leader | 11 billion revenue | 111,000 Employees | 71 Countries | Olympic & Paralympic Games Worldwide Partner |</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Atos is a global leader in digital transformation with 111,000 employees and annual revenue of c. € 11 billion. European number one in cybersecurity, cloud and high performance computing, the Group provides tailored end-to-end solutions for all industries in 71 countries.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>A pioneer in decarbonization services and products, Atos is committed to a secure and decarbonized digital for its clients. Atos is a SE (Societas Europaea), listed on Euronext Paris and included in the CAC 40 ESG and Next 20 Paris Stock indexes.</p></td>
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
            <img src="company/Cognizant.jpg" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.cognizant.com/in/en">Cognizant</a></h2>
            <ul class="list-unstyled">

<table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>Cognizant (Nasdaq-100: CTSH) engineers modern businesses.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>We help our clients modernize technology, reimagine processes and transform experiences so they can stay ahead in our fast-changing world.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p> Together, we’re improving everyday life.</p></td>
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
            <img src="company/InfoCepts.png" alt="" class = "demoimg" />
          </div>
          <div class="col-md-7 col-sm-7 wow fadeIn">
            <h2>About <a href="https://www.infocepts.com/">InfoCepts</a></h2>
            <ul class="list-unstyled">

            <table>
  <tr>
    <td><li><i class="fa fa-cogs"></i></td>
    <td><p>We believe that every organization must ‘stay modern’ in order to thrive in today's business environment. That’s why our commitment to you is providing innovative, best-in-class data & analytics reusable solutions to drive modernization.</p></td>
  </tr>
  <tr>
  <td><li><i class="fa fa-cogs"></i></td>
    <td><p>We work with you and your teams to understand your specific business objectives and offer tailored solutions using the InfoCepts way of People, Processes, and Technology.</p></td>
  </tr>
</table> 
            </ul>
          </div>
        </div>
      </div>
    </section>




      
      <!-- /.container -->


      <!-- FOOTER -->
      <!-- <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer> -->

<!-- Remove the container if you want to extend the Footer to full width. -->
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
        <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="mailto:info@stvincentngp.edu.in" role="button"
          data-mdb-ripple-color="dark"><i><img src="https://img.icons8.com/ios-glyphs/30/000000/gmail.png"/></i></a>
      </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

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
