<!DOCTYPE html>
<html>
    <head>
        <title>Профиль</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles.css">
    </head>
    <style>
        body {
            height: 125vh;
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
            height: 800px;
            width: 750px;
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
            height: 125vh;
            display: flex;
            flex-direction: column;
        }
        .wrapperinner {
            height: 125vh;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }
        .wrapperinner2 {
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
        <?php
            if ($_COOKIE['userLogin'] == '') {
        ?>
            <script>window.location.href = 'index.php';</script>
        <?php } ?>
        <div id="image" class="bigImage bigImage--hideafter">
            <div class="bigImageBox">
                <img src="uploads/<?= $_COOKIE["userAvatar"] ?>" width="400" height="600" onclick="On(), setPageCookie('currPage', 'profile', 15)">
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
        <div style="z-index: 100; position: absolute; left: 0; padding: 40px;">
            <button class="baseBtn baseBtn-style" style="width: 150px; height: 50px;" onclick="window.location.href = 'index.php'; setPageCookie('currPage', 'index', 15)">Главная</button>
        </div>
        <div style="z-index: 100; position: absolute; right: 0; padding: 40px;">
            <button class="baseBtn baseBtn-style" style="width: 150px; height: 50px;" onclick="window.location.href = 'index.php'; deleteCookie('userLogin'); setPageCookie('currPage', 'index', 15)">Выход</button>
        </div>
        <div class="wrapper">
            <div class="header">
                Профиль   
            </div>
            <div class="wrapperinner">
                <div class="linksboxleft">
                    <div class="links">
                        <a href="about.php" onclick="setPageCookie('currPage', 'about', 15)">Обо мне</a>
                    </div>
                </div>
                <div class="mainbox">
                    <div class="main">
                        <img src="uploads/<?= $_COOKIE["userAvatar"] ?>" onclick="On(), setPageCookie('currPage', 'profileWithIm', 15)" align="left" width="300" height="400" style="position: absolute; left:40px; top:175px">
                        <div style="padding-left:230px" align="center">
                            <div style="font-size:32px; padding-bottom: 25px; padding-right: 200px"><?= $_COOKIE["userLogin"] ?></div>
                            <div style="font-size:18px; padding-bottom: 25px;">Смена логина</div>
                            <form action="php/loginChange.php" method="post">
                                <div>
                                    <input type="text" placeholder="Новый логин" name="login" style="padding: 5px;"> <br>
                                    <input type="password" placeholder="Нынешний пароль" name="pass" style="padding: 5px;"> <br>
                                </div>
                                <button type="submit" class="btn btn-style" style="height: 40px; width: 150px;">Изменить логин</button>
                            </form>
                            &nbsp;
                            <div style="font-size:18px; padding-bottom: 25px;">Смена пароля</div>
                            <form action="php/passChange.php" method="post">
                                <div>
                                    <input type="password" placeholder="Новый пароль" name="newpass" style="padding: 5px;"> <br>
                                    <input type="password" placeholder="Повтор нового пароля" name="newpassrepeat" style="padding: 5px;"> <br>
                                    <input type="password" placeholder="Нынешний пароль" name="pass" style="padding: 5px;"> <br>
                                </div>
                                <button type="submit" class="btn btn-style" style="height: 40px; width: 150px;">Изменить пароль</button>
                            </form>
                            &nbsp;
                            <div style="font-size:18px; padding-bottom: 25px;">Смена аватарки</div>
                            <form action="php/avatarChange.php" method="post" enctype="multipart/form-data">
                                <div>
                                    <input type="file" name="avatar" style="padding: 5px; padding-left: 80px;"> <br>
                                </div>
                                <button type="submit" class="btn btn-style" style="height: 40px; width: 150px;" name="changeAvatar">Изменить аватарку</button>
                            </form>
                            &nbsp;
                            <form action="php/deleteAccount.php" method="post">
                                <button type="submit" class="btn btn-style" style="height: 40px; width: 150px;" name="deleteAccount" onclick="setPageCookie('currPage', 'index', 15);">Удалить аккаунт</button>
                            </form>
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
        <script src="js/checkErrors.js"></script>
        <script type="text/javascript">
            if(getCookie('realCurrPage') != 'profileWithIm') {
                setPageCookie('realCurrPage', 'profile', 15);
            }
        </script>
    </body>
</html>