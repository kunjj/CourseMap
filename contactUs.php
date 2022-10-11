<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <link rel="stylesheet" href="navbarCSS.css">
  <style>
    .container{
      margin: 10px 70px 10px 50px;
    }
  </style>
</head>

<body>
  <?php require "navbar.php" ?>

  <div class="container">
    <h2>Contact Us!</h2>
    <form action="contactUs.php" method="post">
      <div class="mb-3">
        <label for="name" class="form-label">Your Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Your Name" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Your Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email" required>
      </div>
      <div class="mb-3">
        <label for="mobileNumber" class="form-label">Your Mobile Number</label>
        <input type="number" class="form-control" id="mobileNumber" aria-describedby="emailHelp" placeholder="Enter Your MobileNumber" required>
      </div>
      <div class="mb-3">
        <label for="query" class="form-label">Describe Your Query/Issue.</label>
        <textarea name="query" id="query" cols="30" rows="5" class="form-control" placeholder="Your Query/Issue."></textarea required>
      </div>
      <button type="submit" class="btn btn-danger">Submit</button>
    </form>
  </div>

  <?php require "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
    crossorigin="anonymous"></script>
</body>

</html>