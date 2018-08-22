<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Streams Calendar</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>

<header>
    <div class="logo">
        <img src="img/twitch.png" />
    </div>
    <div class="title">
        <h1>Streams Calendar</h1>
        <p>Times in GMT+2 (CEST)</p>
    </div>
    <div class="channel">
        <span>twitch.tv/sabinico</span>
    </div>
</header>

<section class="calendar">

    <?php
    $items = [
        ['weekday' => 'Monday 20', 'game' => 'Dead by Daylight - BBQ EVENT', 'img' => 'img/dbd_bbq.jpg', 'disabled' => true],
        ['weekday' => 'Tuesday 21', 'game' => 'Dead by Daylight - BBQ EVENT', 'img' => 'img/dbd.png', 'disabled' => true],
        ['weekday' => 'Wednesday 22', 'game' => 'Dead by Daylight - BBQ EVENT', 'img' => 'img/dbd.jpeg'],
        ['weekday' => 'Thursday 23', 'game' => 'Dead by Daylight - BBQ EVENT', 'img' => 'img/dbd_dwights.jpeg'],
        ['weekday' => 'Friday 24', 'game' => 'Dead by Daylight - BBQ EVENT'],
        ['weekday' => 'Saturday 25', 'game' => 'Alien Isolation - DAY 3', 'featured' => true, 'start' => '20:00', 'img' => 'img/alien.png'],
        ['weekday' => 'Sunday 26', 'game' => 'Alien Isolation - DAY 4', 'featured' => true, 'start' => '20:00', 'img' => 'img/alien_2.jpg'],
    ];
    foreach ($items as $item):
    ?>
    <article class="item <?= @$item['featured']?'featured':''; ?> <?= @$item['disabled']?'disabled':''; ?>">
        <div class="weekday"><?= $item['weekday']; ?></div>
        <div class="game" style="background-image: url('<?= @$item['img']?$item['img']:'img/dbd_dwight.jpg'; ?>');">
            <div class="caption"><span><?= $item['game']; ?></span></div>
        </div>
        <div class="schedule">
            <div class="time"><span><?= @$item['start']?$item['start']:'21:00'; ?></span></div>
            <div class="time"><span><?= @$item['end']?$item['end']:'00:00'; ?></span></div>
        </div>
    </article>
    <?php
    endforeach;
    ?>
</section>

</body>

</html>