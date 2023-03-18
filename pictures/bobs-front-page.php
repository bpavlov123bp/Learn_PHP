<?php
$pictures = array('blades.jpg', 'car_door.jpg', 'oil.jpg', 'radio.jpg', 'spark_plugs.jpg',
'steering_wheel.jpg', 'tires.jpg');
srand((float)microtime() * 1000000);
shuffle($pictures);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bob's Auto Part</title>
    </head>
    <body>
        <h1 align="center">Bob's Auto Part</h1>
        <table width="100%">
            <?php
            for($i = 0; $i < 3; $i++)
            {
                echo '<td align="center"><img src="';
                echo $pictures[$i];
                echo '"width="100" height="100"></td>';
            }
            ?>
        </table>
    </body>
</html>