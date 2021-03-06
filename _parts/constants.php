<?php

const STATUSES = [
    "AVAILABLE" => [
        "text" => "Свободно",
        "color" => "default",
    ],
    "UNAVAILABLE" => [
        "text" => "Недоступно",
        "color" => "secondary",
    ],
    "CANCEL" => [
        "text" => "Отмена",
        "color" => "secondary",
    ],
    "INTERVIEW" => [
        "text" => "Собеседование",
        "color" => "success",
    ],
    "CALL" => [
        "text" => "Звонок",
        "color" => "primary",
    ],
];

const HOLIDAY = [
    '12:00 - 13:00' => STATUSES['UNAVAILABLE'],
    '13:00 - 14:00' => STATUSES['UNAVAILABLE'],
    '14:00 - 15:00' => STATUSES['UNAVAILABLE'],
    '15:00 - 16:00' => STATUSES['UNAVAILABLE'],
    '16:00 - 17:00' => STATUSES['UNAVAILABLE'],
];

const THIS_WEEK = [
    'link'   => '/?',
    'title' => 'Текущая неделя',
];
const NEXT_WEEK = [
    'link'   => '/?next_week=1',
    'title' => 'Следующая неделя',
];
const LAST_WEEK = [
    'link'   => '/?last_week=1',
    'title' => 'Прошлая неделя',
];
