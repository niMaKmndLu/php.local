<?php 
    include "functions.php" ;
    $users = get_users();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table,td,tr{
            border: 1px solid #c5eaac;
        }

        table{
            border-collapse: collapse;
        }

        td{
            padding: 10px 10px;
            font-size:20px;
        }
    </style>
</head>
<body>
    
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
            <?php if(is_array($users) && count($users) > 0): ?>
                <?php foreach($users as $user): ?> 
                <tr>
                    
                        <td><?php echo  $user['id']; ?></td>
                        <td><?php echo  $user['name']; ?></td>
                        <td><?php echo  $user['email']; ?></td>
                    
                </tr>
                <?php endforeach; ?>
                    <?php else: ?>
                    <tr><td colspan="3">Nothing to Show</td></tr>
    </table>
            <?php endif; ?>
</body>
</html>