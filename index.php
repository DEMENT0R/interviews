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
<?php
$darkMode = isset($_GET['dark']) ? true : false;
$darkClass = $darkMode ? 'bg-dark text-light' : '';
include('constants.php');
include('schedule.php');
?>
<body class="<?= $darkClass ?>">
<div class="container py-7 <?= $darkClass ?>">
    <h2 class="text-uppercase text-letter-spacing-xs my-0 text-secondary font-weight-bold">
        <span class="badge badge-<?= $darkMode ? 'light' : 'dark' ?> float-right">
            <a href="/<?= $darkMode ? '' : '?dark' ?>"
               class="text-<?= $darkMode ? 'dark' : 'light' ?>"><?= $darkMode ? 'Light' : 'Dark' ?></a>
        </span>
        Расписание встреч
    </h2>
    <p class="text-sm text-<?= $darkMode ? 'light' : 'dark' ?> mt-0 mb-5">Время указано московское, обычно
        13:00-17:00</p>
    <div class="row">
        <?php foreach ($days as $key => $day): ?>
            <div class="col-md-6 col-lg-4 mb-3">
                <h4 class="mt-0 mb-3 text-<?= $darkMode ? 'light' : 'dark' ?> op-8 font-weight-bold">
                    <?= $key ?>
                </h4>
                <ul class="list-timeline list-timeline-primary">
                    <?php foreach ($day as $hours => $details): ?>
                        <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                            <p class="my-0 text-<?= $darkMode ? 'light' : 'dark' ?> flex-fw text-sm">
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
        &copy; <a href="https://bezrukavnikov.ru" class="text-secondary">bezrukavnikov.ru</a>, 2021
    </div>
</footer>
</body>
</html>