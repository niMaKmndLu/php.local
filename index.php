<?php 
include 'functions.php' ;

if(isset($_POST['send'])):
    $color = $_POST['backGround'];
endif;

$users = get_users();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>

    <style>
    table,tr,th,td{
        border: 1px solid #ddd;
    }
    </style>

</head>
<body style="background-: <?php echo $color ?>">
    <form action="" method="post">
        <input type="radio" name="backGround" value="blue">Blue <br>
        <input type="radio" name="backGround" value="green">Green <br>
        <input type="radio" name="backGround" value="red">Red <br><br>

        <input type="submit" name="send" value="Set">
    </form>

    <br><br><br><br><br><br>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
    <?php foreach($users as $user): ?>
            <tr>
                <td> <?php echo $user['id'] ?></td>
                <td> <?php echo $user['name'] ?></td>
                <td> <?php echo $user['email'] ?></td>
            </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>