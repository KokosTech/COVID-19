<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 | Kaloyan Tech</title>
    <link rel="stylesheet" href="syle.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="mrWorldwide.css">
    <script src="main.js"></script>
    <link rel="icon" href="icons/COVID-logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <header id="con">
        <div id="navy">
            <a href="survey">Тест</a>
            <h1 onclick="toggleTheme();">COVID-19</h1>
            <a href="aboutus">За нас</a>
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
                        include 'fun.php';
                        print_num("https://api.apify.com/v2/key-value-stores/np4eYah8M5uQtj0Su/records/LATEST?disableRedirect=true" , 1);
                    ?>
                </span>
            </p>
            <p>Смъртни случаи:<br>
                <span class="deathroll" id="bgdeaths">
                    <?php                
                        print_num("https://api.apify.com/v2/key-value-stores/np4eYah8M5uQtj0Su/records/LATEST?disableRedirect=true" , 2);
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
                        print_num("https://api.apify.com/v2/key-value-stores/SmuuI0oebnTWjRTUh/records/LATEST?disableRedirect=true" , 4);
                    ?>
                </span>
            </p>
            <p>Смъртни случаи:<br>
                <span class="deathroll" id="wwdeaths">
                    <?php                
                        print_num("https://api.apify.com/v2/key-value-stores/SmuuI0oebnTWjRTUh/records/LATEST?disableRedirect=true" , 6);
                    ?>
                </span>
            </p>

        </div>
    </div>
    <div id="content">
        <div id="top_article">
            <div id="inner_top_article">
                <img id="t_img" src="https://webnews.bg/uploads/images/21/9421/479421/768x432.jpg?_=1589462334" alt="">
                <h2 id="t_title">Протест в София</h2>
            </div>
        </div>

            <div id="other_news">
            <div id="inner_other_news">
                
            </div>
        </div>
        <div id="tips">
        </div>
        <div id="comment_section">

        </div>
        <footer>

        </footer>
    </div>
    </div>

</body>
</html>
