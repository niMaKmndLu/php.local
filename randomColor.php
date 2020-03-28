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
        <?php for($i=1; $i<10; $i++): ?>
            <tr>
                <?php for($j=1; $j<10; $j++): 
                    $red = mt_rand(0,255);
                    $green = mt_rand(0,255);
                    $blue = mt_rand(0,255);
                ?>
                    <td style="background: rgb(<?php echo $red.','.$green.','.$blue ?>)"><?php echo mt_rand(1,9); ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>