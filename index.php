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
        ['weekday' => 'Lunes 20', 'game' => 'Dead by Daylight'],
        ['weekday' => 'Martes 21', 'game' => 'DBD - BBQ EVENT', 'img' => 'img/dbd_bbq.png'],
        ['weekday' => 'Miércoles 22', 'game' => 'Dead by Daylight - BBQ EVENT'],
        ['weekday' => 'Jueves 23', 'game' => 'Game Name'],
        ['weekday' => 'Viernes 24', 'game' => 'Game Name'],
        ['weekday' => 'Sábado 25', 'game' => 'Game Name', 'featured' => true],
        ['weekday' => 'Domingo 26', 'game' => 'Game Name', 'featured' => true],
    ];
    foreach ($items as $item):
    ?>
    <article class="item <?= @$item['featured']?'featured':''; ?>">
        <div class="weekday"><?= $item['weekday']; ?></div>
        <div class="game" style="background-image: url('<?= @$item['img']?$item['img']:'img/dbd_dwight.jpg'; ?>');">
            <div class="caption"><span><?= $item['game']; ?></span></div>
        </div>
        <div class="schedule">
            <div class="time"><span>21:00</span></div>
            <div class="time"><span>00:00</span></div>
        </div>
    </article>
    <?php
    endforeach;
    ?>
</section>

</body>

</html>