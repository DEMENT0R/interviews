<?php

$startingDay = 26;

$days = [
    "Понедельник, " . $startingDay++ . " апреля" => [
        "13:00 - 14:00" => STATUSES['UNAVAILABLE'],
        "14:00 - 15:00" => STATUSES['CANCEL'],
        "15:00 - 16:00" => STATUSES['INTERVIEW'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Вторник, " . $startingDay++ . " апреля" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['INTERVIEW'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Среда, " . $startingDay++ . " апреля" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Четверг, " . $startingDay++ . " апреля" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Пятница, " . $startingDay++ . " апреля" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Суббота, 1 мая" => [
        "13:00 - 14:00" => STATUSES['UNAVAILABLE'],
        "14:00 - 15:00" => STATUSES['UNAVAILABLE'],
        "15:00 - 16:00" => STATUSES['UNAVAILABLE'],
        "16:00 - 17:00" => STATUSES['UNAVAILABLE'],
    ],
    "Вторник, 4 мая" => [
        "14:30 - 16:00" => STATUSES['INTERVIEW'],
    ],
];
