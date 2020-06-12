<?php
    date_default_timezone_set('Europe/Sofia');
    include 'php/conn.inc.php';
    include 'php/fun.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>COVID-19 | Kaloyan Tech</title>

    <link rel="stylesheet" href="css/syle.css">
    <link rel="stylesheet" href="css/commentS.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="css/mrWorldwide.css">
    <link rel="icon" href="icons/COVID-logo.png">

    <script src="js/main.js"></script>

    <script src="https://hcaptcha.com/1/api.js?" async defer></script>
    <script data-ad-client="ca-pub-1785200103429012" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<body id="body">
    <header id="con">
        <div id="navy">
            <a href="survey" class="navlink">Тест</a>
            <h1 onclick="toggleTheme();">COVID-19</h1>
            <a href="aboutus" class="navlink">За нас</a>
        </div>
    </header>
    <div id="else">
    <div id="sidebar">
        <div>
            <h3>България</h3>
            <img class="flags" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Flag_of_Bulgaria.svg" alt="">
            <p>Общо случаи:<br>
                <span class="cases" id="bgcases">
                    <?php                
                        getNum("https://api.apify.com/v2/key-value-stores/np4eYah8M5uQtj0Su/records/LATEST?disableRedirect=true" , 2);
                    ?>
                </span>
            </p>
            <p>Смъртни случаи:<br>
                <span class="deathroll" id="bgdeaths">
                    <?php                
                        getNum("https://api.apify.com/v2/key-value-stores/np4eYah8M5uQtj0Su/records/LATEST?disableRedirect=true" , 7);
                    ?>
                </span>
            </p>
        </div>
        <div>
            <h3>Свят</h3>
            <img class="flags" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/International_Flag_of_Planet_Earth.svg/1200px-International_Flag_of_Planet_Earth.svg.png" alt="">
            <p>Общо случаи:<br>
                <span class="cases" id="wwcases">
                    <?php                
                        getNum("https://api.apify.com/v2/key-value-stores/SmuuI0oebnTWjRTUh/records/LATEST?disableRedirect=true" , 4);
                    ?>
                </span>
            </p>
            <p>Смъртни случаи:<br>
                <span class="deathroll" id="wwdeaths">
                    <?php                
                        getNum("https://api.apify.com/v2/key-value-stores/SmuuI0oebnTWjRTUh/records/LATEST?disableRedirect=true" , 6);
                    ?>
                </span>
            </p>

        </div>
    </div>
    <div id="content">
        <a href="main-article">
            <div id="top_article" class="div">
                <div id="inner_top_article">
                    <img id="t_img" src="main-article\image.jpg" alt="">
                    <h2 id="t_title">Как да си мием ръцете?</h2>
                </div>
            </div>
        </a>
        <div>
            <a href="articles/1">
                <div>
                    <img src="" alt="">
                    <h3>Защо да носим маски?</h3>
                </div>
                <div href="articles/2">
                    <img src="" alt="">
                    <h3>Защо да носим маски?</h3>
                </div>
                <div href="articles/3">
                    <img src="" alt="">
                    <h3>Защо да носим маски?</h3>
                </div>
            </a>
        </div>
        <div id="tips" class="div">
            <h3 id="h3">Как да се предпазим?</h3>
                <h5>Може да правиш много полезни неща, за да се защитиш от вируса. Ето някои от тях:</h5>
                <ul>
                    <li>
                        <b>Стой вкъщи</b>
                         и си направи интересен план с различни неща за вършене.
                    </li>
                    <li>
                        Мий често ръцете си като следваш тези 5 стъпки: намокряш, насапунисваш (с балончета), разтъркваш ръцете една в друга много пъти, изплакваш и изсушаваш. 
                        Натисни <a href="article/tips/how-to-wash-your-hands">ТУК</a>, ако искаш да научиш повече за това как да си миеш ръцете!
                    </li>
                    <li>
                        Когато кихаш или кашляш, използвай лакътя си или носна кърпичка, която трябва да изхвърлиш веднага след това.
                    </li>
                    <li>
                        Не пипай устата, очите и носа си с немити ръце – така вирусът няма да може да влезе в тялото ти и да те разболее.
                    </li>
                    <li>
                        Когато ти се налага да си с други хора, бъди на голямо разстояние – поне два метра.
                    </li>
                    <li>
                        Дръж вещите си чисти! Учените и медиците все още изследват новия вирус, но предполагат, че той се задържа най-много върху всички видове банкноти, 
                        стъклени предмети, пластмаса и желязо, плат, дърво и най-малко върху картон или носни кърпички.
                    </li>
                </ul>        
        </div>
        <div id="comment_section">
            <?php
                echo"
                    <form id='com'method='POST' action='".setComments($conn, 'comments')."'>
                        <h3 style='margin: 0 0; margin-bottom: 5px'>Коментирай:</h3>
                        <input class='ff' type='text' name='uid' required placeholder='Name'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                        <textarea class='ff' name='message' required placeholder='Type here...'></textarea>
                        <div class='h-captcha' data-sitekey='b20349ae-6b8f-49ea-9fd4-1c56829a94bf' class='hc' data-theme='dark'></div>
                        <button class='ff' type='submit' name='commentSubmit' id='submit'>Comment</button>
                    </form>
                ";
            ?>
            <div id="comments">
                <?php getComments($conn, 'comments'); ?> 
            </div>
        </div>
        <footer>

        </footer>
    </div>
    </div>

    <script src="js/mobile.js"></script>
    <script>
        if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
        }
</script>
</body>
</html>
