<?php 
    include "functions.php" ;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $users = get_users();
        foreach($users as $user): 
        $template = 'hello dear #name# , your email is #email# .';
        $temp = str_replace(array('#name#','#email#'),array($user['name'],$user['email']),$template);
        
    ?>   
        <p><?php echo $temp ?></p>
        <?php endforeach; ?>
    
</body>
</html>