<?php

$startingDay = 3;

$days = [
    "Понедельник, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['UNAVAILABLE'],
        "14:00 - 15:00" => STATUSES['UNAVAILABLE'],
        "15:00 - 16:00" => STATUSES['UNAVAILABLE'],
        "16:00 - 17:00" => STATUSES['UNAVAILABLE'],
    ],
    "Вторник, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 14:30" => STATUSES['UNAVAILABLE'],
        "14:30 - 16:00" => STATUSES['INTERVIEW'],
        "16:00 - 17:00" => STATUSES['INTERVIEW'],
    ],
    "Среда, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Четверг, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Пятница, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['AVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Суббота, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['UNAVAILABLE'],
        "14:00 - 15:00" => STATUSES['UNAVAILABLE'],
        "15:00 - 16:00" => STATUSES['UNAVAILABLE'],
        "16:00 - 17:00" => STATUSES['UNAVAILABLE'],
    ],
    "Вторник, " . "11" . " мая" => [
        "13:00 - 14:00" => STATUSES['UNAVAILABLE'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['INTERVIEW'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
];
