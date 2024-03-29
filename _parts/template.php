<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/styles.css?v2">
    <link rel="icon" href="/favicon.png">
    <title>Расписание встреч</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-17583218-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-17583218-3');
    </script>
</head>
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
        10:00-17:00
    </p>
    <div class="row">
        <?php foreach ($dates as $key => $date): ?>
            <?php
            if (strftime("%A", strtotime($date)) == 'воскресенье'
                || strftime("%A", strtotime($date)) == 'Воскресенье'
                || strftime("%A", strtotime($date)) == 'sunday'
                || strftime("%A", strtotime($date)) == 'Sunday') {
                continue;
            }
            ?>
            <div class="col-md-6 col-lg-4 mb-3<?= $currentDate == $date ? ' border rounded' : '' ?>">
                <h4 class="mt-0 text-<?= $darkMode ? 'light' : 'dark' ?> op-8 font-weight-bold">
                    <?= strftime("%A", strtotime($date)); ?>
                </h4>
                <p class="text-secondary">
                    <?= strftime("%B, %d", strtotime($date)); ?>
                </p>
                <ul class="list-timeline list-timeline-primary">
                    <?php $slots =  $date >= $currentDate ? $hoursListAvailable : $hoursListUnavailable ?>
                    <?php foreach ($slots as $hours => $details): ?>
                        <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                            <p class="my-0 text-<?= $darkMode ? 'light' : 'dark' ?> flex-fw text-sm">
                                <span class="text-<?= $events[$date][$hours]['color']
                                ??
                                $details['color'] ?> font-weight-bold op-8"><?= $hours ?></span>
                                — <?= $events[$date][$hours]['text'] ?? $details['text'] ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 text-left w-100">
            <?php if ($leftButton): ?>
                <a href="<?= $leftButton['link'] ?><?= $darkMode ? '&dark=1' : '' ?>"
                   class="btn btn-secondary">
                    <?= $leftButton['title'] ?>
                </a>
            <?php endif; ?>
        </div>
        <div class="col-12 col-md-6 text-right w-100">
            <?php if ($rightButton): ?>
                <a href="<?= $rightButton['link'] ?><?= $darkMode ? '&dark=1' : '' ?>"
                   class="btn btn-secondary">
                    <?= $rightButton['title'] ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
<footer>
    <div class="text-center text-secondary">
        &copy; <a href="https://bezrukavnikov.ru" class="text-secondary">bezrukavnikov.ru</a>, 2022
    </div>
</footer>
</body>
</html>
