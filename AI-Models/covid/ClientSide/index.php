

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Covid-19 Detection With X-RAY</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap-5.1.1-dist/css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom styles for this template -->
    <link href="static/bootstrap-5.1.1-dist/css/form_upload.css" rel="stylesheet">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   
    <link href="style_new.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="static/bootstrap-5.1.1-dist/css/style.css" rel="stylesheet">



  </head>

  <body class="text-center">
  <header id="header" class="fixed-top d-flex align-items-center">

<div class="container d-flex align-items-center justify-content-between">
  <div class="logo">
  <img src="images/hospital.png">
  </div>
  <div class="container d-flex align-items-center justify-content-between">
    <div class="logo">
      <h1><a href="index.html">HMIS</a></h1>
    </div>
  <!-- .navbar -->
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="getstarted scrollto" href="../../../Front-End/Registration/Radiology/index.html">Choose Another Radiology</a></li>
      <li><a class="getstarted scrollto" href="../../../Front-End/Registration/main/index.html"><b>Home</b></a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
<!-- End navbar -->
</div>

  </div>
</header>

















    <form  action="pre.php" class="form-upload" method="POST" enctype="multipart/form-data">
      <img class="mb-4" src="images/Radiography-bro.svg" alt="">
      <h1 class="h3 mb-3 font-weight-normal">Please Upload X-Ray Image</h1>
      <input type="file" id="img" name="img" class="form-control" required autofocus accept=".jpg,.jpeg ,.png">
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="predict" style="margin-top:20px;width: 100%;">Predict</button>
    </form>
  </body>
</html>
