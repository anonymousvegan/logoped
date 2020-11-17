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
        <link rel="stylesheet" href="../nav/nav.css" />
        <link rel="stylesheet" href="../footer/footer.css">
        <link rel="icon" href="../files/logo.png" />
    </head>
    <body onload="setActive(6)">
        <?php 
            $location= "../";
            include "../nav/nav.php"
        ?>
            <p>
                Ако имаш некое прашање што сакаш да ми го поставиш или сакаш да знаеш нешто повеќе за 
                одредена област со која се занимавам, пиши ми на мојата електронска пошта на 
                nermina1901@hotmail.it, или остави ми порака во прозорецот под овој текст.
            </p>
        <div id="contact-container">
            <div id="contact">
                <div id="form-image">
                    <img src="form-img.png" alt="form-image" />
                </div>
                <div id="form">
                    <form action="send-form.php" method="post">
                        <h1>Ве молам внесете ги потребните податоци</h1>
                        <div class="input-container">
                            <input type="text" placeholder="Име" name="name" id="name">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                        </div>
                        <div class="input-container">
                            <input type="email" placeholder="Email" name="email" id="email" required>
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path  d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg>
                        </div>
                        <div class="input-container">
                            <input type="text" name="subject" placeholder="Назив на пораката" id="subject">
                        </div>
                        <textarea name="message" id="message" placeholder="Порака"></textarea>
                        <button>
                        Испрати
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <?php 
            include "../footer/footer.php"
        ?>
</body>
</html>