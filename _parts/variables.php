<?php

$darkMode  = isset($_GET['dark']);
$darkClass = $darkMode ? 'bg-dark text-light' : '';

$hoursSlots = [
    '10:00 - 11:00',
    '11:00 - 12:00',
    '12:00 - 13:00',
    '13:00 - 14:00',
    '14:00 - 15:00',
    '15:00 - 16:00',
    '16:00 - 17:00',
];

$hoursListAvailable   = [];
$hoursListUnavailable = [];
foreach ($hoursSlots as $hoursSlot) {
    $hoursListAvailable[$hoursSlot]   = STATUSES['AVAILABLE'];
    $hoursListUnavailable[$hoursSlot] = STATUSES['UNAVAILABLE'];
}

$currentDate = date("Y-m-d", time());