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

    <link rel="stylesheet" href="../../css/syle.css">
    <link rel="stylesheet" href="../../css/commentS.css">
    <link rel="stylesheet" href="../../fonts/fonts.css">
    <link rel="stylesheet" href="../../css/mrWorldwide.css">
    <link rel="stylesheet" href="../../css/art.css">
    <link rel="icon" href="../../icons/COVID-logo.png">

    <script src="../../js/main.js"></script>
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
        @media screen and (max-width: 600px){
            h1{
                font-size: 15px;
            }
        }

    </style>
</head>
<body>
    <header id="con">
        <div id="navy">
            <a href=".." class="navlink">Начало</a>
            <h1 onclick="toggleTheme();">Защо да носим маски?</h1>
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
            <div class="div">
                <img src="https://moeto-zdrave.com/image/catalog/Optimized/maska-protiv-koronavirus.jpg" alt="Момиче с маска">
            </div>
            <div class="div">
                <h3>На теория: защо маските имат значение?</h3>
                <p>Нека го кажем още от самото начало, за да няма объркване – носенето на маска не ви гарантира, че няма да се разболеете и главното предназначение на маските е да предпазват другите хора от вас. Неслучайно една от най-добрите препоръки за предпазване от COVID-19, която рядко ще чуете от телевизора и радиото, е да се държите с отговорността на вече болен човек. С тази уговорка настрана, нека изредим схематично какви са възможните механизми, които превръщат носенето на маска в колкото неудобно, толкова и потенциално смислено занимание:</p>
                <ul>
                    <li>Маските доказано намаляват количеството аерозолизирани вирусни частици, които болните генерират по време на дишане и говорене.</li>
                    <li>Маските доказано спират разпространението на големите капкови частици, произведени от болен човек при кихане и кашляне.</li>
                    <li>Маските могат да филтрират част от микрокапките, които ще попаднат в носа и устата на здрав човек от въздуха.</li>
                    <li>Маските могат да ни направят по-съзнателни, намалявайки честотата на докосване на носа и устата както от болни, така и от здрави хора.</li>
                    <li>В крайна сметка маските могат ви спестят контакт с коронавируса или в най-лошия случай – да намалят количеството коронавирус, на което ще бъдете изложени (т.нар. инфекциозна доза).</li>
                </ul>
            </div>

            <div class="div">
                <h3>На практика: как да носим маска правилно?</h3>
                <p>Въпреки че маските на теория предпазват от заразяване, начинът на тяхното носене в реалността често може да обезсмисли всички научни усилия. Затова не просто спазвайте заповедта за носене на маски на обществени места (за да си спестите глоба), но го правете така, че да гарантирате на себе си и околните максимална защита:</p>
                <ol>
                    <li>Преди да сложите маската, измийте ръцете си със сапун или ги дезинфекцирайте с дезинфектант.</li>
                    <li>Винаги слагайте маската, преди да сте излезли от вкъщи и по-възможност – преди да се пипали други повърхности.</li>
                    <li>Маската трябва да покрива плътно устата, носа и брадата ви през цялото време – между нея и кожата ви не бива да остават пролуки. Ориентир за добре поставена маска е, ако при вдишване повърхността на маската се вдлъбва към лицето ви.</li>
                    <li>Избягвайте да докосвате маската по време на носене. Ако се наложи да я докоснете, почистете ръцете си със сапун или дезинфектант след това.</li>
                    <li>За да свалите маската, хванете я за връзките или ластиците в задната част на главата ви – не докосвайте предната ѝ част и я дръжте далеч от себе си и други повърхности.</li>
                    <li>Веднага изхвърлете маската, ако е медицинска маска за еднократна употреба или я изперете, ако е текстилна маска за многократна употреба.</li>
                    <li>Измийте или дезинфекцирайте ръцете си, след като сте изхвърлили маската или сте я сложили за пране.</li>
                    <li>Не слагайте на лицето си маски, които са влажни или прокъсани. Не носете вече носени маски за еднократна употреба. Сменяйте маските за еднократна употреба при навлажняване или на всеки 3–4 часа (при продължително носене) или на всяко носене, при краткотрайно носене.</li>
                </ol>
            </div>
            <div class="div">
                <img src="https://moeto-zdrave.com/image/catalog/blog/vidove-maski-koronavirus-thumb.jpg" alt="Видове маски">
            </div>
            <div class="div">
                <h3>Заключение</h3>
                <p>Всяка маска може да ви защити от коронавирус, ако я носите правилно, но никоя маска не може да ви предостави 100% защита. Не се нуждаете от високотехнологични маски, за да имате прилично ниво на защита. Маски като N95 са предназначени за медицинските работници в инфекциозните отделения, които прекарват дълго време във високорискова среда.</p>
                <p>Най-сигурните мерки за предпазване от COVID-19 продължават да са физическата дистанция от поне 2 метра, честото и старателно миене на ръцете и избягването на контакт между ръцете и лигавиците. Колкото по-стриктно се придържате към тях, толкова по-скоро ще можем да се завърнем към нормалния си ритъм на живот.</p>
            </div>
            <div id="comment_section">
            <?php
                echo"
                    <form id='com'method='POST' action='".setComments($conn, 'comments3')."'>
                        <h3 style='margin: 0 0; margin-bottom: 5px'>Коментирай:</h3>
                        <input class='ff' type='text' name='uid' require placeholder='Name'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                        <textarea class='ff' name='message' require placeholder='Type here...'></textarea>
                        <button class='ff' type='submit' name='commentSubmit' id='submit'>Comment</button>
                    </form>
                ";
            ?>
            <div id="comments">
                <?php getComments($conn, 'comments3'); ?> 
            </div>
        </div>
        </div>
    </div>
    <script src="../../js/mobile.js"></script>
</body>
</html>