

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>

    <style></style>
</head>
<body> 

<div class="container">
    <div class="col-le-12">
    <h1 class="text-center">Display Table Data</h1><br>

    <table class="table table-striped table-hover table-bordered">
        <tr class="bg-dark text-white text-center">
            <th class="text-white">Id</th>
            <th class="text-white">User_Name</th>
            <th class="text-white">Email</th>
            <th class="text-white">Password</th>
            <th class="text-white">Delete</th>
            <th class="text-white">Update</th>
        </tr>
        <?php
            include 'connect.php';

                $q = " SELECT * FROM `login` WHERE 1 ";

                $query = mysqli_query($con, $q);

                while ($resu = mysqli_fetch_assoc($query)){
            ?>

        <tr class="text-center">
            <td><?php echo $resu['id'];   ?></td>

            <td><?php echo $resu['U_name'];   ?></td>

            <td><?php echo $resu['Email'];   ?></td>

            <td><?php echo $resu['Password'];   ?></td>

            <td><button class="btn btn-danger  text-center"><a class="text-white" href="delete.php?id=<?php echo $resu['id'];   ?>">Delete</a></button></td>

            <td><button class="btn btn-primary text-center"><a class="text-white" href="update.php?id=<?php echo $resu['id'];   ?>">Update</a></button></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </div>
</div>
    

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>