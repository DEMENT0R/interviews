<?php

$darkMode  = isset($_GET['dark']);
$darkClass = $darkMode ? 'bg-dark text-light' : '';

$hoursList = [
    '10:00 - 11:00' => STATUSES['AVAILABLE'],
    '11:00 - 12:00' => STATUSES['AVAILABLE'],
    '12:00 - 13:00' => STATUSES['AVAILABLE'],
    '13:00 - 14:00' => STATUSES['AVAILABLE'],
    '14:00 - 15:00' => STATUSES['AVAILABLE'],
    '15:00 - 16:00' => STATUSES['AVAILABLE'],
    '16:00 - 17:00' => STATUSES['AVAILABLE'],
];

$currentDate = date("Y-m-d", time());