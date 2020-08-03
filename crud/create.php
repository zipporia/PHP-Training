<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Add Member</title>
    <link rel="stylesheet" href="php_action/style.css">
</head>
<body>

<fieldset>
    <legend>Add Member</legend>
    <form action="php_action/create.php" method="post">
        <table>
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name"></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td> <input type="text" name="lname" placeholder="Last Name"></td>
            </tr>
            <tr>
                <th>Age</th>
                <td> <input type="text" name="age" placeholder="Age"></td>
            </tr>
            <tr>
                <th>Contact</th>
                <td> <input type="text" name="contact" placeholder="Contact"></td>
            </tr>
            <tr>
                <td> <button type="submit">Save Change</button></td>
                <td> <a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
</fieldset>
    
</body>
</html>