<?php
    session_start();
    include_once 'dbh.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PHP Training</title>
    </head>
    <body>

        <?php
            if(isset($_SESSION['id'])){
                if($_SESSION['id'] == 1){
                    echo "you are logged in as user #1";
                }

                echo "<form action='upload.php' method='POST' enctype='multipart/form-data'>
                        <input type='file' name='file'>
                        <button type='submit' name='submit'>UPLOAD</button>
                    </form>";
            }
            else{
                echo "You are not logged in";
            }
        ?>

        <p>Login as user!</p>
        <form action="login.php" method="post">
            <button type="submit" name="submitLogin">Login</button>
        </form>

        <p>Logout as user!</p>
        <form action="logout.php" method="post">
            <button type="submit" name="submitLogout">Logout</button>
        </form>
    </body>
</html>