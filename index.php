<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <h1>COUNTDOWN</h1>
    <div class="countdown">
    <ul>
        <li>
            <span id="days" class="timers"></span>
            <span class="times">GUN</span>
        </li>
        <li>
            <span id="hours" class="timers"></span>
            <span class="times">SAAT</span>
        </li>
        <li>
            <span id="minutes" class="timers"></span>
            <span class="times">DEQIQE</span>
        </li>
        <li>
            <span id="seconds" class="timers"></span>
            <span class="times">SANIYE</span>
        </li>
    </ul>
    </div>


    <script src="timer.js"></script>
    
</body>
</html>