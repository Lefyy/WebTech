<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
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
            color: black;
        }
        * {
            margin: 0;
            padding: 0;
        }
        p {
            text-shadow: 0 0px 2px rgba(0, 0, 0, 0.25);
            font-size: xx-large;
            text-align: center;
            letter-spacing: 5px;
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.9), 
                        rgba(255, 255, 255, 0.75));
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
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
        .main {
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
            text-align: center;
            font-size: medium;
            padding-top: 20px;
            line-height: 2.75;
        }
        .mainbox {
            background: linear-gradient(135deg, 
                        rgba(255, 255, 255, 0.5), 
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
        .wrapperSign {
            display: flex;
            flex-direction: column;
            justify-content: justify;
            align-items: center;
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
    </style>
    <body>
        <div style="z-index: 100; position: fixed; left: 0; padding: 25px;">
            <button class="baseBtn baseBtn-style" style="width: 150px; height: 50px;" onclick="window.location.href = 'index.php'; setPageCookie('currPage', 'index', 15)">Главная</button>
        </div>
        <div class="wrapper">
            <div class="header">
                Авторизация
            </div>
            <div class="wrapperinner">
                <div class="mainbox">
                    <div class="main">
                        <form action="php/login.php" method="post">
                            <div class="wrapperSign">
                                <div style="font-size: 24px;">Введите данные</div>
                                <div>
                                    <input type="text" placeholder="Логин" name="login" style="padding: 5px;"> <br>
                                    <input type="password" placeholder="Пароль" name="pass" style="padding: 5px;"> <br>
                                </div>
                                <button type="submit" class="btn btn-style" style="height: 40px;">Войти</button>
                                <div style="font-size: 14px;">
                                    Еще не зарегистрированы? <a href="signingUp.php">Зарегистрируйтесь!</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer">
                2024 ©Все права защищены
            </div>
        </div>
        <script src="js/checkErrors.js"></script>
        <script src="js/cookieForForms.js"></script>
    </body>
</html>