<?php
include 'navbar.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Bank System</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap');
        body{
            background-color:cornsilk;
        }
        h2{
            color:crimson;
            font-family: 'Yeon Sung', cursive;
            font-size: 40px;
        }
        p{
            color:black;
            font-size: 20px;
        }
        label{
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h2 class="text-center my-3"><strong> Contact Us </strong> </h2>
    <div class="container my-2">
    <form>
        <div class="form-group col-lg-8">
            <label for="username"><b>Username</b></label>
            <input type="text" class="form-control" id="username" placeholder="enter your name">
        </div><br>
        <div class="form-group col-lg-8">
            <label for="email1"><b>Email</b></label>
            <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div><br>
        <div class="form-group col-lg-8">
            <label for="address"><b>Address</b></label>
            <input type="text" class="form-control" id="address" placeholder="enter your address">
        </div><br>
        <div class="form-group col-lg-8">
            <label for="issues"><b>Issues</b></label>
            <textarea class="form-control" id="issues" rows="3" placeholder="issues related to bank"></textarea>
        </div><br>
        <button type="submit" class="btn btn-secondary btn-outline  ">Submit</button>
    </form>
    </div>
    <div class="container my-2 ">
        <footer class="my-4 pt-4 text-muted text-center text-small ">
            <p class="mb-1"><strong>© 2020-2021 Copyrights reserved</strong></p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>