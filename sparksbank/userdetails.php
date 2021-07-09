<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap');
        body{
            background-color: cornsilk;
        }
        .table{
        border: 2px solid black;
        }

        button {
            transition: 1.5s;
        }

        button:hover {
            background-color: #616C6F;
            color: white;
        }

        h2 {
            font-family: 'Yeon Sung', cursive;
            color: crimson;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    ?>
    <?php
    include 'navbar.php';
    ?>
    <div class="container">
        <h2 class="text-center my-3"><strong>User Details</strong></h2><br>
        <div class="row">
            <div class="col">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center py-2" style="font-size: 18px; color:brown">Id</th>
                                <th scope="col" class="text-center py-2" style="font-size: 18px; color:brown">Name</th>
                                <th scope="col" class="text-center py-2" style="font-size: 18px; color:brown">E-Mail</th>
                                <th scope="col" class="text-center py-2" style="font-size: 18px; color:brown">Balance</th>
                                <th scope="col" class="text-center py-2" style="font-size: 18px; color:brown">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($rows = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['id'] ?></td>
                                    <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['name'] ?></td>
                                    <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['email'] ?></td>
                                    <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['balance'] ?></td>
                                    <td class="text-center"><a href="transfermoney.php?id= <?php echo $rows['id']; ?>"> <button type="button" class="btn ">Transact</button></a></td>
                                </tr>
                            <?php
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>