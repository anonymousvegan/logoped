<header>
    <a href="<?php echo $location;?>index.php">
        <img src="<?php echo $location ?>files/logo.png" />
    </a>
    <a href="<?php echo $location;?>index.php"><h1>logopedijaiOT</h1></a>
    <a class="fake-link" href="#"></a>
    <a class="real-link" href="#">Blog</a>
</header>
<div id="change-container">
        <div class="change-icon" onclick="changeIcon(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </div>
<nav id="horisontal-nav">
    <ul class="nav-links">
        <li class="nav-link">
            <a href="<?php echo $location;?>index.php">ПОЧЕТНА</a>
        </li>
        <li class="nav-link">
            <a href="<?php echo $location;?>био.php">БИО</a>
        </li>
        <li class="nav-link">
            <div class="dropdown">
                <div class="dropdown-button">
                    <a href="<?php echo $location;?>услуги.php">&#9660;УСЛУГИ</a>
                </div>
                <div class="dropdown-content">
                    <a href="<?php echo $location;?>скрининг-и-опсервација.php">СКРИНИНГ И ОПСЕРВАЦИЈА</a>
                    <a href="<?php echo $location;?>планирање-на-програма-за-интервенција.php">ПЛАНИРАЊЕ НА ПРОГРАМА НА ИНТЕРВЕНЦИЈА</a>
                    <a href="<?php echo $location;?>терапевтска-интервенција.php">ТЕРАПЕВТСКА ИНТЕРВЕНЦИЈА</a>
                    <a href="<?php echo $location;?>тренинг-на-семејството-и-наcaregive.php">ТРЕНИНГ НА СЕМЕЈСТВОТО И НА CAREGIVER-ОТ</a>
                    <a href="<?php echo $location;?>тимски-пристап-во-работата.php">ТИМСКИ ПРИСТАП БО РАБОТАТА</a>
                </div>
            </div>
        </li>
        <li class="nav-link">
        <div class="dropdown">
                <div class="dropdown-button">
                    <a href="<?php echo $location;?>окупациона-терапија.php">&#9660;ОКУПАЦИОНА ТЕРАПИЈА</a>
                </div>
                <div class="dropdown-content">
                    <a href="<?php echo $location;?>интервенции.php">ИНТЕРВЕНЦИИ</a>
                    <a href="<?php echo $location;?>от-член-на-мултидисциплинарен-тим.php">ОТ - ЧЛЕН НА МУЛТИДИСЦИПЛИНАРЕН ТИМ</a>
                </div>
            </div>
        </li>
        <li class="nav-link">
            <a href="<?php echo $location;?>телерехабилитација.php">ТЕЛЕРЕХАБИЛИТАЦИЈА</a>
        </li>
        <li class="nav-link">
            <a href="<?php echo $location;?>контакти/index.php" >КОНТАКТИ</a>
        </li>
    </ul>
</nav>
<div  id="vertical-nav">
<ul class="nav-links">
        <li class="nav-link">
            <a href="<?php echo $location;?>index.php">ПОЧЕТНА</a>
        </li>
        <li class="nav-link">
            <a href="<?php echo $location;?>био.php">БИО</a>
        </li>
        <li class="nav-link">
            <div class="dropdown">
                <div class="dropdown-button">
                    <a href="#">&#9660;УСЛУГИ</a>
                </div>
                <div class="dropdown-content">
                    <a href="<?php echo $location;?>скрининг-и-опсервација.php"> СКРИНИНГ И ОПСЕРВАЦИЈА</a>
                    <a href="<?php echo $location;?>планирање-на-програма-за-интервенција.php"> ПЛАНИРАЊЕ НА ПРОГРАМА НА ИНТЕРВЕНЦИЈА</a>
                    <a href="<?php echo $location;?>терапевтска-интервенција.php"> ТЕРАПЕВТСКА ИНТЕРВЕНЦИЈА</a>
                    <a href="<?php echo $location;?>тренинг-на-семејството-и-наcaregive.php"> ТРЕНИНГ НА СЕМЕЈСТВОТО И НА CAREGIVER-ОТ</a>
                    <a href="<?php echo $location;?>тимски-пристап-во-работата.php"> ТИМСКИ ПРИСТАП BО РАБОТАТА</a>
                </div>
            </div>
        </li>
        <li class="nav-link">
        <div class="dropdown"> 
                <div class="dropdown-button">
                    <a href="#">&#9660;ОКУПАЦИОНА ТЕРАПИЈА</a>
                </div>
                <div class="dropdown-content">
                    <a href="<?php echo $location;?>интервенции.php"> ИНТЕРВЕНЦИИ</a>
                    <a href="<?php echo $location;?>от-член-на-мултидисциплинарен-тим.php"> ОТ - ЧЛЕН НА МУЛТИДИСЦИПЛИНАРЕН ТИМ</a>
                </div>
            </div>
        </li>
        <li class="nav-link">
            <a href="<?php echo $location;?>телерехабилитација.php">ТЕЛЕРЕХАБИЛИТАЦИЈА</a>
        </li>
        <li class="nav-link">
            <a  href="<?php echo $location;?>контакти/index.php">КОНТАКТИ</a>
        </li>
        <li class="nav-link">
            <a href="#" id="more">Blog</a>
        </li>
    </ul>
</ul>
</div>