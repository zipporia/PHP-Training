<?php
    require_once 'php_action/db_connect.php'
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>CRUD</title>
    <link rel="stylesheet" href="php_action/style.css">

</head>
<body>

    <div class="manageMember">
        <a href="create.php"><button type="button">Add Member</button></a>
        <table cellspacing="0" cellpadding="0" border="1">
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Contact</th>
                <th>Option</th>
            </tr>
        </table>
    </div>

</body>
</html>