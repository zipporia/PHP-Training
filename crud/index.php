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
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Contact</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM members WHERE active = 1";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                                <td>" . $row['fname'] . " " . $row['lname'] . "</td>
                                <td>" . $row['contact'] . "</td>
                                <td>" . $row['age'] . "</td>
                                <td>
                                    <a href='edit.php?id=".$row['id']."'> <button type='button'> Edit </button></a>
                                    <a href='remove.php?id=".$row['id']."'> <button type='button'> Remove </button></a>
                                </td>
                            </tr>";
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>