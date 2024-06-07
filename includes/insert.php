<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
        <link rel="stylesheet" href="vender.css" />
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" /> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="form">
            <h2>Insertion Form</h2><br>
            <form name="form" method="post" action="vender_register.php">
                vender_name: <input type="text" name="vender_name" /> <br />
                <br />
                user_name: <input type="text" name="user_name" /> <br />
                <br />
                password: <input type="password" name="password" /> <br />
                <br />

                <input type="submit" id="btn" value="submit" name="submit" />
            </form>
        </div>
    </body>
</html>
