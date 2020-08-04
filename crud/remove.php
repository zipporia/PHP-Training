<?php
    require_once 'php_action/db_connect.php';

    if($_GET){
        $id = $_GET['id'];
        $sql = "SELECT * FROM members WHERE id = {$id}";
        $reuslt = $conn->query($sql);
        
        $data = $reuslt->fetch_assoc();

        $conn->close();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Remove Members</title>
</head>
<body>
    <legend>Do You really want to remove?</legend>
        <form action="php_action/remove.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id'] ?> ">
            <button type="submit">Save Changes</button>
            <a href="index.php"> <button type="button">Back</button></a>
        </form>
</body>
</html>
