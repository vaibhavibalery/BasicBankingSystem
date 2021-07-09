<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap');

        body {
            background-color: cornsilk;
        }

        h2 {
            font-family: 'Yeon Sung', cursive;
            color: crimson;
            font-size: 40px;
        }

        button,
        input {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            letter-spacing: 1.4px;
        }

        .app-form-group {
            margin-bottom: 13px;

        }
        
        

        .app-form-group.button {
            margin-bottom: 0;
            text-align: center;
            bottom: 50px;
        }

        .app-form-control {
            width: 70%;
            padding: 8px 0;
            background: none;
            border: none;
            border-bottom: 1px solid #4C4B4B;
            color: #4C4B4B;
            font-size: 14px;
            outline: none;
            transition: border-color .2s;
        }

        .app-form-control::placeholder {
            color: maroon;
        }

        .app-form-button:focus {
            outline: none;
            border-bottom-color: #4C4B4B;
        }

        .app-form-button:hover {
            color: #4C4B4B;
        }

        .app-form-button {
            color: #666;
            border: none;
            font-size: 18px;
            outline: none;

        }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $balance = $_POST['balance'];
        $sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script> alert('Success! Account Created');
                               window.location='userdetails.php';
                     </script>";
        }
    }
    ?>

    <?php
    include 'navbar.php';
    ?>
    <h2 class="text-center my-2"><strong>Create an Account</strong></h2><br>
    <div class="container my-3">
        
        <div class="media">
        <img  src="img/user.jpg" width="250px" height="250px" style="float:right; border:2px solid black;" alt="Generic placeholder image">
            <div class="media-body">
                <form class="app-form" method="post">
                    <div class="app-form-group ">
                        <input class="app-form-control" placeholder="NAME" style="font-size: 17px;" type="text" name="name" required>
                    </div><br>
                    <div class="app-form-group">
                        <input class="app-form-control" placeholder="EMAIL" style="font-size: 17px;" type="email" name="email" required>
                    </div><br>
                    <div class="app-form-group">
                        <input class="app-form-control" placeholder="BALANCE" style="font-size: 17px;" type="number" name="balance" required>
                    </div><br>
                    <div class="app-form-group">
                        <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                    </div>
                    
                </form>
               
            </div>
            
            
            
        </div>
        

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>