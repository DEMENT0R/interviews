<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css?v2">
    <link rel="icon" href="/favicon.png">
    <title>Расписание встреч</title>
</head>
<body>
<div class="container py-7">
    <h2 class="text-uppercase text-letter-spacing-xs my-0 text-secondary font-weight-bold">
        Расписание встреч
    </h2>
    <p class="text-sm text-dark mt-0 mb-5">Время указано московское, обычно 13:00-17:00</p>
    <?php
    $days = [
        "Четверг, 15 апреля" => [
            "13:00 - 14:00" => [
                "text" => "Звонок",
                "color" => "primary",
            ],
            "14:00 - 15:00" => [
                "text" => "Звонок",
                "color" => "primary",
            ],
            "15:00 - 16:00" => [
                "text" => "Собеседование",
                "color" => "success",
            ],
            "16:00 - 17:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
        ],
        "Пятница, 16 апреля" => [
            "13:00 - 14:00" => [
                "text" => "Собеседование",
                "color" => "success",
            ],
            "14:00 - 15:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "15:30 - 16:00" => [
                "text" => "Звонок",
                "color" => "primary",
            ],
            "16:00 - 17:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
        ],
        "Суббота, 17 апреля" => [
            "13:00 - 14:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "14:00 - 15:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "15:00 - 16:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "16:00 - 17:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
        ],
        "Воскресенье, 18 апреля" => [
            "13:00 - 14:00" => [
                "text" => "Встреча",
                "color" => "success",
            ],
            "14:00 - 15:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "15:00 - 16:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "16:00 - 17:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
        ],
        "Понедельник, 19 апреля" => [
            "13:00 - 14:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "14:00 - 15:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "15:00 - 16:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "16:00 - 17:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
        ],
        "Вторник, 20 апреля" => [
            "13:00 - 14:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "14:00 - 15:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
            "15:00 - 16:30" => [
                "text" => "Собеседование",
                "color" => "success",
            ],
            "16:30 - 17:00" => [
                "text" => "Свободно",
                "color" => "dark",
            ],
        ],
    ];
    ?>
    <div class="row">
        <?php foreach ($days as $key => $day): ?>
            <div class="col-md-6 col-lg-4 mb-3">
                <h4 class="mt-0 mb-3 text-dark op-8 font-weight-bold">
                    <?= $key ?>
                </h4>
                <ul class="list-timeline list-timeline-primary">
                    <?php foreach ($day as $hours => $details): ?>
                        <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                            <p class="my-0 text-dark flex-fw text-sm text-uppercase">
                                <span class="text-<?= $details['color'] ?> font-weight-bold op-8"><?= $hours; ?></span>
                                - <?= $details['text'] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<footer>
    <div class="text-center text-secondary">
        &copy; <a href="https://bezrukavnikov.ru">bezrukavnikov.ru</a>, 2021
    </div>
</footer>
</body>
</html>
