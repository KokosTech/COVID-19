<?php
    date_default_timezone_set('Europe/Sofia');
    include '../php/conn.inc.php';
    include '../php/fun.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Новини | COVID-19 | Kaloyan Tech</title>

    <link rel="stylesheet" href="../css/syle.css">
    <link rel="stylesheet" href="../css/commentS.css">
    <link rel="stylesheet" href="../fonts/fonts.css">
    <link rel="stylesheet" href="../css/mrWorldwide.css">
    <link rel="icon" href="../icons/COVID-logo.png">

    <script src="../js/main.js"></script>
    <script data-ad-client="ca-pub-1785200103429012" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <style>
        .div{
            margin-top: 15px;
        }
        .div img{
            width: 100%;
            border-radius: 7px;
        }
        html{
            scroll-behavior: smooth;
        }
        @media and screen (max-width: 600px){
            h1{
                font-size: 15px;
            }
        }

    </style>
</head>
<body id="body">
    <header id="con">
        <div id="navy">
            <a href=".." class="navlink">Начало</a>
            <h1 onclick="toggleTheme();">Как да си мием ръцете?</h1>
            <a href="../aboutus" class="navlink">За нас</a>
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
        <div id="tips" >
            <div class="div" style="text-align: center;">
                <h2></h2>
                <img src="image.jpg" alt="washing hands">
            </div>
            <img src="" alt="">
            <div class="div">
                <h3>На тази страница ще прочетете:</h3>
                <ul>
                    <li><a href="#C1">Как да си миете ръцете правилно?</a></li>
                    <li><a href="#C2">Как да използвате дезифектант?</a></li>
                    <li><a href="#C3">Кога трябва да си миете ръцете?</a></li>
                    <li><a href="#C4">Трябва ли да използвате топла вода, когато си миете ръцете?</a></li>
                    <li><a href="#C5">Кое е по-добре: да си миете ръцете или да използвате дезифектант?</a></li>
                    <li><a href="#C6">Как може да помогнете на детето си да си мие ръцете?</a></li>
                    <li><a href="#C7">Трябва ли да подсушавате ръцете си с кърпа?</a></li>
                </ul>
            </div>
            <div class="div">
                <h3 id="C1">Как да си миете ръцете правилно?</h3>
                <p>Последвайте тези стъпки, за да си измиете ръцете правилно:</p>
                <ul>
                    <li>1. Намокрете ръцете си с течаща вода.</li>
                    <li>2. Нанесете достатъчно сапун, за да покриете мокрите си ръце. </li>
                    <li>3. Разнесете по всички повърхности на ръцете - включително на задната част, между пръстите и под ноктите - за най-малко 20 секунди.</li>
                    <li>4. Изплакнете обилно с течаща вода.</li>
                    <li>5. Изсушете ръцете с чиста кърпа, кърпа за еднократна употреба или сешоар.</li>
                </ul>                
            </div>
            <div class="div">
                <h3 id="C2">Как да използвате дезифектант?</h3>
                <p>Казаното по-горе важи и за дезифектанта за ръце. Използвайте дезинфектант, който съдържа най-малко 60% алкохол. Разтрийте го в ръцете си за поне 20 секунди, за да осигурите пълно покритие.</p>
            </div>
            <div class="div">
                <h3 id="C3">Кога трябва да си миете ръцете?</h3>
                <p>Мийте ръцете си често, особено: </p>
                <ul>
                    <li>след издухване на носа, кашляне или кихане</li>
                    <li>след посещение на обществено място, включително обществен транспорт, пазари и места за поклонение</li>
                    <li>след досег с повърхности извън дома</li>
                    <li>след работа с пари</li>
                    <li>преди, по време и след грижи за болен или уязвим човек</li>
                    <li>преди и след ядене.</li>
                </ul>
            </div>
            <div class="div">
                <h3>Мий твойте ръце винаги: </h3>
                <ul>
                    <li>след ходене до тоалетна</li>
                    <li>преди и след ядене</li>
                    <li>след изхвърляне на боклука</li>
                    <li>след досег с животни или домашни любимци</li>
                    <li>след смяна на бебешките пелени или помощ на децата да използват тоалетната</li>
                    <li>когато ръцете ви са видимо мръсни.</li>
                </ul>
            </div>
            <div class="div">
                <h3 id="C4">Трябва ли да използвате топла вода, когато си миете ръцете?</h3>
                <p>Не, не е необходимо. Можете да използвате всяка температура на водата, за да измиете ръцете си. Както студената, така топлата вода убиват микробите и вирусите, стига да използвате сапун</p>                
            </div>
            <div class="div">
                <h3 id="C5">Кое е по-добре: да си миете ръцете или да използвате дезифектант?</h3>
                <p>Миенето на ръце със сапун и вода или използването на дезинфекциращо средство, когато се прави правилно, са еднакво ефективни при убиване на повечето микроби и вируси. Дезинфектантът за ръце често е по-удобен, когато сте извън дома, но може да бъде скъп или труден за намиране в спешни условия.</p>
            </div>
            <div class="div">
                <h3 id="C6">Как може да помогнете на детето си да си мие ръцете?</h3>
                <p>Можете да улесните миенето на ръцете на децата, като поставите столче, за да могат те сами да достигнат до водата и сапуна. Също така можете да им направите забавление, като пеете любимите им песни, докато им помагате да търкат ръцете си.</p>                
            </div>
            <div class="div">
                <h3 id="C7">Трябва ли да подсушавате ръцете си с кърпа?</h3>
                <p>Микробите се разпространяват по-лесно от мокра кожа, отколкото от сухата кожа, така че изсушаването на ръцете ви е напълно важна стъпка. Хартиените кърпи или чистите кърпи са най-ефективният начин за премахване на микроби, без да ги разпространявате върху други повърхности.</p>                
            </div>

        </div>
        <div id="comment_section">
            <?php
                echo"
                    <form id='com'method='POST' action='".setComments2($conn)."'>
                        <h3 style='margin: 0 0; margin-bottom: 5px'>Коментирай:</h3>
                        <input class='ff' type='text' name='uid' require placeholder='Name'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                        <textarea class='ff' name='message' require placeholder='Type here...'></textarea>
                        <button class='ff' type='submit' name='commentSubmit' id='submit'>Comment</button>
                    </form>
                ";
            ?>
            <div id="comments">
                <?php getComments2($conn); ?> 
            </div>
        </div>
        <footer>

        </footer>
    </div>

    <script src="../js/mobile.js"></script>

</body>
</html>
