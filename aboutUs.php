<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varta:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="navbarCSS.css">
</head>

<body>
    <!-- Navbar -->
    <?php require "navbar.php"; ?>
    <!-- Navbar Ending -->

    <!-- About Us -->
    <div class="container marketing my-4">
        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">We Started CourseMap in 2021. For Purpose Of Providing Better Courses.
                </h2>
                <p class="lead">We believe
                    Learning is the source of human progress.
                    It has the power to transform our world
                    from illness to health,
                    from poverty to prosperity,
                    from conflict to peace.
                    It has the power to transform our lives
                    for ourselves,
                    for our families,
                    for our communities.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="imgs/aboutUs(1).jpg" alt=""
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="450"
                    height="275">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">It All Started With Idea Of Giving Free Knowledge For Those Who Are
                    Facing Financial Problem.</h2>
                <p class="lead">

                    No matter who we are or where we are,
                    learning empowers us to change and grow
                    and redefine what’s possible.
                    That’s why access to the best learning is a right, not a privilege.

                    And that’s why CourseMap is here.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="img-fluid" src="imgs/aboutUs(2).jfif" alt=""
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="450"
                    height="275">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">Cousres From Best Available Platform</h2>
                <p class="lead">We partner with the best institutions
                    to bring the best learning
                    to every corner of the world.

                    So that anyone, anywhere has the power to
                    transform their life through learning.</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="imgs/aboutUs(3).jfif" alt=""
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500">
            </div>
        </div>

        <!-- /END THE FEATURETTES -->

    </div>

        <!-- Footer -->
        <?php require "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>

</html>