<?php

if (isset($_GET['next_week'])) {
    $date = strtotime('monday next week');
    $leftButton = THIS_WEEK;
    $rightButton = [];
} else if (isset($_GET['last_week'])) {
    $date = strtotime('monday last week');
    $leftButton = [];
    $rightButton = THIS_WEEK;
} else {
    $date = strtotime('monday this week');
    $leftButton = LAST_WEEK;
    $rightButton = NEXT_WEEK;
}

$dates = [];
for ($i = 0; $i < 7; $i++) {
    $dates[] = date("Y-m-d", strtotime('+' . $i . ' day', $date));
}

setlocale(LC_ALL, 'ru_RU.UTF-8');

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