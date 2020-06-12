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
            <a href="../../.." class="navlink">Начало</a>
            <h1 onclick="toggleTheme();">Какво да направим, ако имаме симптоми на COVID-19?</h1>
            <a href="../../../aboutus" class="navlink">За нас</a>
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
                <img src="https://nstatic.nova.bg/public/pics/nova/article/980x551_1580735058.jpg" alt="Симптоми">
            </div>
            <div class="div">
                <p>Ако имате грипоподобни симптоми (повишена телесна температура, треска, кашлица, затруднено дишане, мускулни болки) – трябва да се обадите по телефон на Вашия общопрактикуващ лекар. Той ще прецени здравословното Ви състояние, ще го съобрази с данните за предишни заболявания, които има в пациентското Ви досие и ще Ви даде допълнителни инструкции. Задължително информирайте лекаря си, ако имате установен контакт с положително за COVID-19 лице
                <p>Ако нямате общопрактикуващ лекар – свържете се с регионалната здравна инспекция, на чиято територия се намирате. Служителят на телефона ще Ви обясни как трябва да процедирате. Информирайте служителя ако сте пребивавали в чужбина в последните 14 дни или имате установен контакт с положително за COVID-19 лице.</p>
                <p>Ако оценявате здравословното си състояние или това на Ваш близък като спешно* позвънете на тел. 112, като трябва да информирате служителя ако сте пребивавали в чужбина в последните 14 дни или имате установен контакт с положително за COVID-19 лице.</p>
                <p><i>*Казано накратко: Спешно състояние е всяка остра или внезапно възникнала промяна в здравето на човека,  която може да доведе до смърт или до тежки или необратими увреждания, ако не се предприемат незабавни медицински действия.</i></p>
            </div>
            <div class="div">
                <h3>Какво е важно да знаете?</h3>
                <ul>
                    <li>За да се избегне струпването на много хора на едно място, общувайте с общопрактикуващия си лекар и служителите в РЗИ по телефон. По този начин предпазвате и себе си, и околните;</li>
                    <li>Не се самолекувайте, не приемайте медикаменти без консултация с лекар;</li>
                    <li>Следвайте препоръките, които дават здравните власти у нас.</li>
                </ul>
            </div>
            <div class="div">
                <h3>ViruSafe</h3>
                <p>Можете да използвате мобилното приложение за граждани, в което гражданите могат да отразяват здравния си статус (ViruSafe). Приложението поддържа нотификация към общопрактикуващ лекар и актуална информация за здравословното състояние на лицата. Предлага се безплатно в Google Play и Аpp Store.</p>
                <a href='https://play.google.com/store/apps/details?id=bg.government.virusafe&pcampaignid=pcampaignidMKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
                    <img alt='Предлага се в Google Play' src='../../icons/google-play-badge.png' style="width: 180px;"/>
                </a>
                <a href="https://apps.apple.com/bg/app/virusafe/id1506362170?mt=8" class="app-download ios">
                    <img src="../../icons/appstore.png"style='width: 160px'; alt="">
                </a>
            </div>
            <div class="div">
                <h3>Какво да направим, ако имаме симптоми на COVID-19?</h3>
                <style>
                    .embed-container{ 
                        margin-top: 15px;
                        position: relative; 
                        padding-bottom: 56.25%; 
                        height: 0; 
                        width: 100%; 
                        background-color: var(--color-primary);
                        overflow: hidden;
                        border-radius: 7px;
                    } 
                    .embed-container iframe, .embed-container object, .embed-container embed { 
                        position: absolute; 
                        top: 0; 
                        left: 0; 
                        width: 100%; 
                        height: 100%; 
                        z-index: 99;
                    }

                    #navy{
                        z-index: 100;
                    }

                    .divy{
                        width: 50%;
                        align-self: center;
                    }
                    iframe{
                        border-radius: 7px;
                    }
                </style>
                <div class="divy">
                    <div class='embed-container'>
                        <iframe src='https://www.youtube.com/embed/QplWx343sJQ?&showinfo=0&controls=0&loop=1' frameborder='0' allowfullscreen ></iframe>
                    </div>
                </div>
            </div>
            <div id="comment_section">
            <?php
                echo"
                    <form id='com'method='POST' action='".setComments($conn, 'comments4')."'>
                        <h3 style='margin: 0 0; margin-bottom: 5px'>Коментирай:</h3>
                        <input class='ff' type='text' name='uid' require placeholder='Name'>
                        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
                        <textarea class='ff' name='message' require placeholder='Type here...'></textarea>
                        <button class='ff' type='submit' name='commentSubmit' id='submit'>Comment</button>
                    </form>
                ";
            ?>
            <div id="comments">
                <?php getComments($conn, 'comments4'); ?> 
            </div>
        </div>
    </div>
</body>
</html>
