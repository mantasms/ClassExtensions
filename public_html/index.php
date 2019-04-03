<?php
require '../bootloader.php';

$sensors = new App\Sensors();
$sensor_fart_temp = new App\SensorFartTemp();
$sensor_fart_humidity = new App\SensorFartHumidity();

$sensors->add('temp', $sensor_fart_temp);
$sensors->add('humidity', $sensor_fart_humidity);
?>
<html>
    <head>
        <title>Sensors</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <h1>Sensors</h1>
        <div class="container">
            <div class="flex-container">
                <?php foreach ($model_user->loadAll() as $user): ?>
                    <h4><?php print $user->getUsername(); ?></h4>
                <?php endforeach; ?>
            </div>
        </div>
    </body>
</html>
