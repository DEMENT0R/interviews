<?php

if ($_GET['next_week']) {
    $date = strtotime('monday next week');
    $leftButton = THIS_WEEK;
    $rightButton = [];
} else if ($_GET['last_week']) {
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
        '12:00 - 13:00' => STATUSES['CANCEL'],
    ],
    '2022-03-04' => [
        '12:00 - 13:00' => STATUSES['INTERVIEW'],
    ],
    '2022-03-07' => HOLIDAY,
    '2022-03-08' => HOLIDAY,
    '2022-03-10' => [
        '15:00 - 16:00' => STATUSES['CALL'],
    ],
    '2022-03-14' => [
        '12:00 - 13:00' => STATUSES['CANCEL'],
        '14:00 - 15:00' => STATUSES['INTERVIEW'],
    ],
    '2022-03-15' => [
        '14:00 - 15:00' => STATUSES['CALL'],
    ],
    '2022-03-16' => [
        '13:00 - 14:00' => STATUSES['INTERVIEW'],
    ],
    '2022-03-18' => [
        '12:00 - 13:00' => STATUSES['CALL'],
    ],
    '2022-03-22' => [
        '16:00 - 17:00' => STATUSES['INTERVIEW'],
    ],
    '2022-03-25' => [
        '13:00 - 14:00' => STATUSES['INTERVIEW'],
    ],
    '2022-03-28' => [
        '16:00 - 17:00' => STATUSES['CALL'],
    ],
    '2022-03-29' => [
        '15:00 - 16:00' => STATUSES['CALL'],
    ],
];
