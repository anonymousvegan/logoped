<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>УСЛУГИ | logopedijaiOT</title>
    <script src="script/nav.js" defer></script>
    <script src="script/set-active.js" defer></script>
    <link rel="stylesheet" href="css/услуги.css" />
    <link rel="stylesheet" href="nav/nav.css" />
    <link rel="stylesheet" href="footer/footer.css">
    <link rel="icon" href="files/logo.png" />
</head>
<body onload="setActive(2)">
    <?php include "nav/nav.php"?>
    <div id="services-text">
    <p>Терапевтските интервенции се изведуваат во сите оние контексти во кои што клиентот
        вообичаено го поминува својот ден: неговиот дом, работно место, во социјални групи, 
        училиште, парк, летни кампови, или кое било место каде што нашиот клиент го поминува 
        своето продуктивно или слободно време. 
    </p>
    <div id="grid">
        <div class="grid">
            <a href="скрининг-и-опсервација.php"><img src="files/sio.webp" />
                <p class="grid-text">Скрининг и опсервација</p>
            </a>
        </div>
        <div class="grid">
            <a href="планирање-на-програма-за-интервенција.php"><img src="files/pnpzi.webp" />
                <p class="grid-text">Планирање на програма</p>
            </a>
        </div>
        <div class="grid vertical">
            <a href="терапевтска-интервенција.php"><img src="files/ti.webp" /> 
                <p class="grid-text">Терапевтска интервенција</p>
            </a>
        </div>
        <div class="grid">
            <a href="тренинг-на-семејството-и-наcaregive.php"><img src="files/tn.webp" />
            <p class="grid-text"> Тренинг на семејството и caregiver-от </p>
        </a>
        </div>
        <div class="grid">
            <a href="тимски-пристап-во-работата.php"><img src="files/team.png" />
            <p class="grid-text">Соработка со останати професионални фигури</p>
        </a>
        </div>
    </div>
    </div>
    <div id="contact"><div><a href="#"><img src="files/phone.png">Контактирај ме!</a></div></div>
    <?php include "footer/footer.php"?>
</body>
</html>