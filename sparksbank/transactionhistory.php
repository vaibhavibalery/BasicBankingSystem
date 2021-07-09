<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap');
    body{
        background-color: beige;
    }
    .table{
        border: 2px solid black;
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
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center my-3"><strong>Transaction History</strong></h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered ">
        <thead>
            <tr>
                <th class="text-center" style="font-size: 18px; color:brown">S.No.</th>
                <th class="text-center" style="font-size: 18px; color:brown">Sender</th>
                <th class="text-center" style="font-size: 18px; color:brown">Receiver</th>
                <th class="text-center" style="font-size: 18px; color:brown">Amount</th>
                <th class="text-center" style="font-size: 18px; color:brown">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr>
            <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['sno']; ?></td>
            <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2" style="font-weight: bold;"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>