<!DOCTYPE html>
<html>
    <head>
        <title>Upscaling</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <style>
        body {
            height: 100vh;
            background-image: url("images/bg.png");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Verdana', sans-serif;
        }
        A {
            color:black;
        }
        * {
            margin: 0;
            padding: 0;
        }
        .header {
            text-shadow: 0 0px 2px rgba(0, 0, 0, 0.25);
            font-size: xx-large;
            text-align: center;
            letter-spacing: 5px;
            display: flex;
            justify-content: center;
            width: 100%;
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.9), 
                        rgba(255, 255, 255, 0.75));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            padding-top: 50px;
            padding-bottom: 50px;
        }
        .links {
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
            text-align: center;
            font-size: medium;
        }
        .main {
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
            text-align: center;
            font-size: large;
            padding: 30px;
            padding-top: 60px;
        }
        .buttons {
            padding-top: 25px;
        }
        .glassmorphism {
            background: linear-gradient(135deg, 
                        rgba(255,255,255, 0.5), 
                        rgba(255, 255, 255, 0.75));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            height: 300px;
            width: 500px;
        }
        .wrapper {
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .wrapperinner {
            height: 100vh;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        .footer {
            display: flex;
            justify-content: center;
            width: 100%;
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.5), 
                        rgba(255, 255, 255, 0.75));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            padding-top: 50px;
            padding-bottom: 50px;
            text-align: center;
            text-shadow: 0 0px 2px rgba(0, 0, 0, 0.25);
            font-size: small;
            letter-spacing: 3px;
            z-index: -1;
        }
        .alertbox {
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.95), 
                        rgba(255, 255, 255, 0.9));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            height: 150px;
            width: 450px;
            position: fixed;
            z-index: 1000;
            top: 75%;
            left: 70%;
            right: 0;
            bottom: 0;
            margin: auto;
        }
        .alertText {
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
            text-align: center;
            font-size: large;
            padding-top: 15px;
            line-height: 35px;

        }
        .alert--hideafter {
            display: none;
        }
        .alert--appear {
            animation-name: Appearance;
            animation-duration: 0.5s;
            animation-timing-function: ease-in-out(.1, .6, .2, 0);
        }
        @keyframes Appearance {
        0% {opacity: 0;}
        100% {opacity: 1;}
        }
        .alert--disappear {
            animation-name: Disappearance;
            animation-duration: 0.5s;
            animation-timing-function: ease-in-out(.1,-.6,.2,0);
        }
        @keyframes Disappearance {
        0% {opacity: 1;}
        100% {opacity: 0;}
        }
    </style>
    <body>
        <div class="alert--appear" id="alert">
            <div class="alertbox"> 
                <div class="alertText">
                    Последний раз Вы посещали мой сайт 
                    <div class="dateLV"></div>
                    <div>
                        <button class="btn btn-style" onclick="hideAlert()">ОК</button>
                        <button class="btn btn-style" onclick="deleteCookie('lastVisit'); hideAlert()">Сброс</button>
                    </div>  
                </div>
            </div>
        </div>
        <div style="z-index: 100; position: fixed; left: 0; padding: 40px;">
            <button class="baseBtn baseBtn-style" style="width: 150px; height: 50px;" onclick="deleteCookie('lastVisit'); alert('Последнее посещение сброшено')">Сброс последнего посещения</button>
        </div>
        <?php
            if ($_COOKIE['userLogin'] == '') {
        ?>
            <div style="z-index: 100; position: fixed; right: 0; padding: 40px;">
                <button class="baseBtn baseBtn-style" style="width: 150px; height: 50px;" onclick="window.location.href = 'signingIn.php'">Войти</button>
            </div>
        <?php 
            } else {
        ?>
            <div style="z-index: 100; position: fixed; right: 0; padding: 40px;">
                <button class="baseBtn baseBtn-style" style="width: 150px; height: 50px;" onclick="window.location.href = 'profile.php'; setPageCookie('currPage', 'profile', 15)">Профиль</button>
            </div>
        <?php } ?>
        <div class="wrapper">
            <div class="header">
                Upscaling
            </div>
            <div class="wrapperinner">
                <div class="glassmorphism">
                    <div class="main">
                        Когда-нибудь вы сможете увеличить разрешение...
                        <div class="buttons">
                            <input style="padding-left:50px" type="file"/>
                            <div style="padding-top: 10px;"></div>
                            <button class="baseBtn baseBtn-style" style="width:200px;">Увеличить разрешение</button>
                        </div>
                    </div>
                    <div class="links">
                        <a href="about.php" onclick="setPageCookie('currPage', 'about', 15)">Обо мне</a>
                        &nbsp;&nbsp;&nbsp;
                        <a href="links.php" onclick="setPageCookie('currPage', 'contants', 15)">Контакты</a>
                    </div>
                </div>
            </div>
            <div class="footer">
                2024 ©Все права защищены
            </div>
        </div>
        <script src="js/cookie.js"></script>
        <script src="js/alertLV.js"></script>
        <script type="text/javascript">
            setPageCookie('realCurrPage', 'index', 15);
            if(getCookie('realCurrPage') != getCookie('currPage')) {
                deleteCookie('nowHere');
                let page = getCookie('currPage');
                switch (page) {
                    case 'contacts':
                        window.location.href = 'links.php';
                        break;
                    case 'about':
                        window.location.href = 'about.php';
                        break;
                    case 'aboutWithIm':
                        window.location.href = 'about.php';
                        break;
                    case 'profile':
                        window.location.href = 'profile.php';
                        break;
                    case 'profileWithIm':
                        window.location.href = 'profile.php';
                        break;
                }
            }
        </script>
    </body>
</html>