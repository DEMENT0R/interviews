<?php

$date  = $_GET['next_week'] ? strtotime('monday next week') : strtotime('monday this week');

$dates = [];
for ($i = 0; $i < 7; $i++) {
    $dates[] = date("Y-m-d", strtotime('+' . $i . ' day', $date));
}

setlocale(LC_ALL, 'ru_RU.UTF-8');

$events = [
    '2022-02-23' => HOLIDAY,
    '2022-02-25' => [
        '12:00 - 13:00' => STATUSES['INTERVIEW'],
        '16:00 - 17:00' => STATUSES['CALL'],
    ],
    '2022-03-01' => [
        '16:00 - 17:00' => STATUSES['CALL'],
    ],
    '2022-03-02' => [
        '12:00 - 13:00' => STATUSES['INTERVIEW'],
        '13:00 - 14:00' => STATUSES['CALL'],
    ],
    '2022-03-03' => [
        '12:00 - 13:00' => STATUSES['INTERVIEW'],
    ],
    '2022-03-04' => [
        '12:00 - 13:00' => STATUSES['INTERVIEW'],
    ],
    '2022-03-08' => HOLIDAY,
];
