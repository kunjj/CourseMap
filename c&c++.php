<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="homepage.css"> -->
    <link rel="stylesheet" href="navbarCSS.css">
    <title>C & C++ Courses</title>
    <style>
        .course img {
            border-radius: 15px;
        }
        /*.course h2{
            font-weight: 800px;
        } */
    </style>

</head>

<body>
    <!-- Navbar -->
    <?php require "navbar.php"; ?>
    <!-- Navbar Ending -->


    <!-- Course Section -->
    <div class="container course my-4">
        <h1>Free Courses</h1>

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-2">
                <img class="img-fluid" src="imgs/nptel.jfif" alt="" width="175" height="150">
            </div>
            <div class="col-md-10">
                <h2 class="featurette-heading">Introduction to Programming in C</h2>
                <p class="lead">This is a course in programming in C. No prior programming experience is assumed; however, mathematical maturity at the level of a second year science or engineering undergraduate is assumed.
                We emphasize solving problems using the language, and introduce standard programming techniques like alternation, iteration and recursion. We will briefly glimpse the basics of software engineering practices like modularization, commenting, and naming conventions which help in collaborating and programming in teams. <br>
                </p>
                <a href="https://onlinecourses.nptel.ac.in/noc20_cs91/preview" target="_blank"
                    class="btn btn-primary">Go To Course.</a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-2">
                <img class="img-fluid" src="imgs/greatLearning.jpg" alt="" width="175" height="150">
            </div>
            <div class="col-md-10">
                <h2 class="featurette-heading">С Programming.</h2>
                <p class="lead">This Live course will cover all the concepts of C Programming under the common year/1st year syllabus. This course is specially designed to help you understand the concepts you need help in. This course will help you in solving numerical, answer questions, understand concepts & help you prepare for internal/exams.<br> 
                </p>
                <a href="https://www.greatlearning.in/academy/learn-for-free/courses/c-programming" target="_blank"
                    class="btn btn-primary">Go To Course.</a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-2">
                <img class="img-fluid" src="imgs/coursera.jfif" alt="" width="175" height="150">
            </div>
            <div class="col-md-10">
                <h2 class="featurette-heading">Introductory C Programming Specialization.</h2>
                <p class="lead">Learn Essential Programming Fundamentals. Master programming skills to solve complex
                    problems.<br> <strong>Offered By - Duke University</strong>
                </p>
                <a href="https://www.coursera.org/specializations/c-programming" target="_blank"
                    class="btn btn-primary">Go To Course.</a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-2">
                <img class="img-fluid" src="imgs/coursera.jfif" alt="" width="175" height="150">
            </div>
            <div class="col-md-10">
                <h2 class="featurette-heading">Coding for Everyone: C and C++ Specialization.</h2>
                <p class="lead">Beginner to Programmer — Learn to Code in C & C++. Gain a deep understanding of computer
                    programming by learning to code, debug, and solve complex problems with C and C++.</p>
                <a href="https://www.coursera.org/specializations/coding-for-everyone?" target="_blank"
                    class="btn btn-primary">Go To Course.</a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-2">
                <img class="img-fluid" src="imgs/edx.jpg" alt="" width="175" height="150">
            </div>
            <div class="col-md-10">
                <h2 class="featurette-heading">C Programming: Pointers and Memory Management.</h2>
                <p class="lead">Continue building your coding skills along your path to becoming a proficient C programmer by mastering the concept of pointers and memory management.
                </p>
                <a href="https://www.edx.org/course/c-programming-pointers-and-memory-management" target="_blank"
                    class="btn btn-primary">Go To Course.</a>
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette d-flex justify-centent-center align-items-center">
            <div class="col-md-2">
                <img class="img-fluid" src="imgs/coursera.jfif" alt="" width="175" height="150">
            </div>
            <div class="col-md-10">
                <h2 class="featurette-heading">С/C++ for competitive programming.</h2>
                <p class="lead">C and C++ are the most popular programming languages in competitive programming, the
                    most convenient and frequently used in competitions.

                    The «C/C++ for competitive programming» online course will introduce the basic concepts of the
                    language, such as variables, data types, conditionals, loops, functions, and others.
                    <br> <strong>Offered By - Moscow Institue Of Physics And Technology.</strong>
                </p>
                <a href="https://www.coursera.org/learn/c-for-competitive-programming" target="_blank"
                    class="btn btn-primary">Go To Course.</a>
            </div>
        </div>

        <hr class="featurette-divider">

        

        <!-- /END THE FEATURETTES -->

    </div>

    <?php require "footer.php" ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</body>