<?php

$startingDay = 10;

$days = [
    "Понедельник, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['UNAVAILABLE'],
        "14:00 - 15:00" => STATUSES['UNAVAILABLE'],
        "15:00 - 16:00" => STATUSES['UNAVAILABLE'],
        "16:00 - 17:00" => STATUSES['UNAVAILABLE'],
    ],
    "Вторник, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['UNAVAILABLE'],
        "14:00 - 15:00" => STATUSES['INTERVIEW'],
        "15:00 - 16:00" => STATUSES['INTERVIEW'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Среда, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['CALL'],
        "14:00 - 15:00" => STATUSES['CALL'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "16:00 - 17:00" => STATUSES['AVAILABLE'],
    ],
    "Четверг, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['CALL'],
        "14:00 - 15:00" => STATUSES['AVAILABLE'],
        "15:00 - 16:00" => STATUSES['AVAILABLE'],
        "17:00 - 18:00" => STATUSES['INTERVIEW'],
    ],
    "Пятница, " . $startingDay++ . " мая" => [
        "13:00 - 14:00" => STATUSES['INTERVIEW'],
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
];
