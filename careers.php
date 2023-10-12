<?php
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Gwasco</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

  <title>Careers</title>
</head>
 <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <img src="img/logo.png"  width="75" 
     height="75"/> 
                </a>
            </div>
           
               
              
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-3">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="index.html" class="nav-item nav-link active">Home</a>
                   <a href="about.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="about.html" class="dropdown-item">Who We Are</a>
                            <a href="directors.html" class="dropdown-item">Board Of Directors</a>
                            <a href="message.html" class="dropdown-item">Managing Director's Welcome Message</a>
                            <a href="management.html" class="dropdown-item">Management Team</a>
                        </div>
                   <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="supply.html" class="dropdown-item">Water Supply</a>
                            <a href="sewerage.html" class="dropdown-item">Sewerage Services</a>
                            <a href="solidwaste.html" class="dropdown-item">Solid Waste Management</a>
                            <a href="sanitation.html" class="dropdown-item">Hygiene and Sanitation Promotion</a>
                        </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Opportunities</a>
                        <div class="dropdown-menu fade-up m-0">
                            <a href="tenders.php" class="dropdown-item">Tenders</a>
                             <a href="careers.php" class="dropdown-item">Careers</a>
                            
                        </div>
                    </div>
                    <a href="portfolio.html" class="nav-item nav-link">Portfolio</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                        <i class="fa fa-phone-alt text-primary"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-1 text-white">Call Us</p>
                        <h5 class="m-0 text-secondary">0798 754 178</h5>
                    </div>
                </div>
            </div>
        </nav>
    </div>
  <div class="container">
   
    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <br>
          <br>
                  <th scope="col">Careers</th>
     
          
         
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `vacancies`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            
            <td><?php echo $row["filename"] ?></td>
            
            
           
           
            </td>
          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>
  </div>
  <br>
  <br>
  <br>
  <center><h1 class="mb-4">Careers</h1>
 <center>  <p>Gusii Water & Sanitation Company is seeking highly motivated and skilled people to join our team. </p>
                   <p>In the roles mentioned above.</p>

<p>Applications should be submitted to:</p>

<p>The Managing Director,<br>
Gusii Water & Sanitation Company Ltd.<br>
P.O Box 3880-40200, Kisii-KENYA<br>
Email: recruit@gwasco.co.ke</p></center>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>