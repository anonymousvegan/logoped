<!DOCTYPE html>
<html lang="mk">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ПОЧЕТНА|logopedijaiOT</title>
        <script src="script/slider.js" defer></script>
        <script src="script/nav.js" defer></script>
        <script src="script/set-active.js" defer></script>
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="nav/nav.css" />
        <link rel="stylesheet" href="footer/footer.css">
        <link rel="icon" href="files/logo.png" />
    </head>
    <body onload="setActive(0)">
        <?php 
            include "nav/nav.php"
        ?>
<div id="slider-container">
    <div class="galerija">
        <div class="kontejner-za-slajdove">
            <div class="okvir-za-strelicu" id="levi-okvir-za-strelicu" onclick="sledeci_i_prethodni(-1, true)">
                <span class="strelica leva-strelica"></span>
            </div>
            <div class="okvir-za-strelicu" id="desni-okvir-za-strelicu" onclick="sledeci_i_prethodni(1, true)">
                <span class="strelica desna-strelica"></span>
            </div>
            <div class="okvir-za-tekst">
                <p id="tekst" class="tekst-slajda"></p>
            </div>
            <div class="slajd">
                <img src="files/img1.webp" alt="slika prva">
            <div class="tekst-slajda">tekst za prvu sliku</div>
            </div>
            <div class="slajd">
                <img src="files/img2.webp" alt="slika druga">
                <div class="tekst-slajda">tekst za drugu sliku</div>
            </div>
            <div class="slajd">
                <img src="files/img3.webp" alt="slika treća"> 
                <div class="tekst-slajda">tekst za treću sliku</div>
            </div>
            <div class="slajd">
                <img src="files/img4.webp" alt="slika četvrta">
                <div class="tekst-slajda">tekst za četvrtu sliku</div>
            </div>
            <div class="slajd">
                <img src="files/img5.webp" alt="slika četvrta">
                <div class="tekst-slajda">tekst za četvrtu sliku</div>
            </div>
            <div class="slajd">
                <img src="files/img6.webp" alt="slika četvrta">
                <div class="tekst-slajda">tekst za četvrtu sliku</div>
            </div>
        </div>
        <div id="kontejner-za-tacke"></div>
    </div>
</div>
<div id="text-container">
    <h1>Мојата визија на едно дете...</h1>
    <p>Првите години од животот на едно дете се критични за развојот на мозокот,
    како и за општиот развој.
    За време на овој период, децата стекнуваат основни вештини и со голема брзина
    развиваат компетенции како постојаност на објект,
    јазик, вештини на фина моторика, вештини на крупна моторика,
    емоционални и социјални вештини.
    Поради тоа важно е правовремено да се препознаат потешкотиите и да се насочи
    развојот на детето кон достигнување на неговиот максимален потенцијал.
    </p>
    <p>Повеќе инфо – <a class="link" href="#">ТЕРАПЕВТСКИ ИНТЕРВЕНЦИИ</a>
</div>
<?php include "footer/footer.php"; ?>
<script defer>
    setActive(1);
</script>
</body>
</html>