<?php

$date  = strtotime('monday this week');
$dates = [];
for ($i = 0; $i < 7; $i++) {
    $dates[] = date("Y-m-d", strtotime('+' . $i . ' day', $date));
}

setlocale(LC_ALL, 'ru_RU.UTF-8');

$events = [
    '2022-02-25' => [
        '12:00 - 13:00' => STATUSES['INTERVIEW'],
        '16:00 - 17:00' => STATUSES['CALL'],
    ],
];
