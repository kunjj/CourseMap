<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="navbarCSS.css">
  <style>
    #courses {
      text-align: center;
      line-height: 25px;
      word-wrap: break-word;

    }

    #courses h2 {
      text-decoration: underline;
      font-weight: 530;
    }

    #row div:hover {
      box-shadow: 1px 1px 10px rgb(160 160 160), -1px -1px 10px rgb(160 160 160);
      border: 2px groove rgb(187, 184, 184);
      cursor: pointer;
      border-radius: 7px;
    }

    #row div:hover img {
      margin-top: 3px;
    }
  </style>

</head>

<body>
  <!-- Navbar -->
  <?php require "navbar.php"; ?>
  <!-- Navbar Ending -->

  <!-- Courses -->
  <div class="container marketing" id="courses">

    <!-- Three columns of text below the carousel -->
    <div class="row  my-md-3" id="row">
      <div class="col-lg-4">
        <img src="imgs/c logo.png" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
        <h2>C & C++</h2>
        <p><a class="btn btn-secondary" href="c&c++.php">View Course »</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="imgs/java logo.png" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
        <h2>Java SE & EE</h2>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="imgs/python logo.png" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
        <h2>Python</h2>
        <p><a class="btn btn-secondary" href="python.php">View Courses »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <div class="row my-3" id="row">
      <div class="col-lg-4">
        <img src="imgs/web-devlopment logo.png" class="bd-placeholder-img rounded-circle" width="140" height="140"
          alt="">
        <h2>Web Devlopment</h2>
        <p><a class="btn btn-secondary" href="wd.php">View Courses »</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="imgs/android-devlopment logo.png" class="bd-placeholder-img rounded-circle" width="140" height="140"
          alt="">
        <h2>Android Devlopment</h2>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <img src="imgs/ml logo.png" class="bd-placeholder-img rounded-circle" width="140" height="140" alt="">
        <h2>Data Science & Machine Learning</h2>
        <p><a class="btn btn-secondary" href="#">View details »</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>

  <!-- Footer -->
  <?php require "footer.php" ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>

</html>