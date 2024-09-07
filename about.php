<!DOCTYPE html>
<html>
    <head>
        <title>Обо мне</title>
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
            text-shadow: 0 0px 1px rgba(0, 0, 0, 0.25);
            text-align: center;
            font-size: medium;
            padding: 13px;
        }
        .linksboxleft {
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.5), 
                        rgba(255, 255, 255, 0.75));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            height: 50px;
            width: 150px;
        }
        .linksboxright {
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.5), 
                        rgba(255, 255, 255, 0.75));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            height: 50px;
            width: 150px;
        }
        .main {
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
            text-align: justify;
            font-size: medium;
            padding: 25px;
            line-height: 1.75;
        }
        .mainbox {
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.5), 
                        rgba(255, 255, 255, 0.75));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            height: 350px;
            width: 700px;
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
        IMG {
            border-radius: 20px;
        }
        IMG:hover {
            cursor: pointer;
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
        .bigImageBox {
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            height: 600px;
            width: 400px;
            position: fixed;
            z-index: 1000;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto
        }
        .bigImage {
            z-index: 1000;
            background: rgba(0, 0, 0, .6);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: all 0.3s ease-in-out;
        }
        .bigImage--hide {
            opacity: 0;
        }
        .bigImage--hideafter {
            display: none;
        }
        .bigImage--appear {
            animation-name: Appearance;
            animation-duration: 0.4s;
            animation-timing-function: cubic-bezier(.1,-.6,.2,0);
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
        .alert--disappear {
            animation-name: Disappearance;
            animation-duration: 0.5s;
            animation-timing-function: ease-in-out(.1,-.6,.2,0);
        }
        @keyframes Disappearance {
        0% {opacity: 1;}
        100% {opacity: 0;}
        }
        @keyframes Appearance {
        0% {opacity: 0;}
        100% {opacity: 1;}
        }
    </style>
    <body>
        <div id="image" class="bigImage bigImage--hideafter">
            <div class="bigImageBox">
                <img src="images/krol.jpeg" width="400" height="600" onclick="On(), setPageCookie('currPage', 'about', 15)">
            </div>
        </div>
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
                Обо мне
            </div>
            <div class="wrapperinner">
                <div class="linksboxleft">
                    <div class="links">
                        <a href="index.php" onclick="setPageCookie('currPage', 'index', 15)">Главная</a>
                    </div>
                </div>
                <div class="mainbox">
                    <div class="main">
                        <img src="images/krol.jpeg" onclick="On(), setPageCookie('currPage', 'aboutWithIm', 15)" align="left" width="200" height="300">
                        &nbsp;
                        <div style="padding-left: 230px"><b>ФИО:</b> Гелемеев Илья Николаевич
                        <br>
                        <b>Возраст:</b> 19 лет
                        <br>
                        <b>Информация обо мне:</b> студент первого курса факультета компьютерных наук в Воронежском Государственном Университете
                        <br>
                        <b>Информация о сайте:</b> на этом сайте будет веб-версия моего проекта по увеличению разрешения изображений в стиле digital art, ура!
                        </div>
                    </div>
                </div>
                <div class="linksboxright">
                    <div class="links">
                        <a href="links.php" onclick="setPageCookie('currPage', 'contants', 15)">Мои контакты</a>
                    </div>
                </div>
            </div>
            <div class="footer">
                2024 ©Все права защищены
            </div>
        </div>
        <script src="js/imageZoom.js"></script>
        <script src="js/cookie.js"></script>
        <script src="js/alertLV.js"></script>
        <script type="text/javascript">
            if(getCookie('realCurrPage') != 'aboutWithIm') {
                setPageCookie('realCurrPage', 'about', 15);
            }
        </script>
    </body>
</html>