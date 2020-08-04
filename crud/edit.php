<?php

    require_once 'php_action/db_connect.php';  

    if($_GET['id']){

        $id = $_GET['id'];

        $sql = "SELECT * FROM members WHERE id = {$id}";
        $result = $conn->query($sql);

        $data = $result->fetch_assoc();

        $conn->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
    <style>
        fieldset{
            margin: auto;
            margin-top: 50px;
            width: 50%;
        }

        table tr th{
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <legend>Edit Member</legend>

    <fieldset>
        <legend>Edit Member</legend>
        <form action="php_action/update.php" method="post">
            <table>
                <tr>
                    <th>First Name</th>
                    <td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['fname'] ?>"></td>
                </tr>
                <tr>
                    <th>Last Name</th>
                    <td> <input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['lname'] ?>"></td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td> <input type="text" name="age" placeholder="Age" value="<?php echo $data['age'] ?>"></td>
                </tr>
                <tr>
                    <th>Contact</th>
                    <td> <input type="text" name="contact" placeholder="Contact" value="<?php echo $data['contact'] ?>"></td>
                </tr>
                <tr>
                    <td> <input type="hidden" name="id" value="<?php echo $data['id']?>"></td>
                    <td> <button type="submit">Save Change</button></td>
                    <td> <a href="index.php"><button type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>