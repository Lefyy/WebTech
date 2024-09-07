if (getCookie('error') != '') {
    let error = getCookie('error');
    switch (error) {
        case 'noLogin':
            alert("Логин должен быть длиннее 2-х символов");
            deleteCookie('error');
            break;
        case 'noPass':
            alert("Пароль должен быть длиннее 4-х символов");
            deleteCookie('error');
            break;
        case 'wrongLoginOrPass':
            alert("Неверный логин или пароль");
            deleteCookie('error');
            break;
        case 'gotLogin':
            alert("Логин занят");
            deleteCookie("error");
            break;
        case 'wrongPassRepeat':
            alert("Неправильный повтор пароля");
            deleteCookie("error");
            break;
        case 'wrongPass':
            alert("Неверный пароль");
            deleteCookie("error");
            break;
        case 'badImage':
            alert("Картинка не подходит (должно быть .png/.jpg/.jpeg размером не более 25мб)");
            deleteCookie("error");
            break;
        case 'badMove':
            alert("Не получилось загрузить изображение");
            deleteCookie("error");
            break;
        default:
            break;
    }
}

function getCookie(name){
    const cookieDecoded = decodeURIComponent(document.cookie);
    const cookieArray = cookieDecoded.split("; ");
    let result = null;

    cookieArray.forEach(element => {
        if(element.indexOf(name) == 0){
            result = element.substring(name.length + 1)
        }
    })
    return result;
}

function deleteCookie(name){
    setCookie(name, null, null);
}

function setCookie(name, value, daysToLive){
    const date = new Date();
    if (value != null) {
        value = date.toLocaleString().slice(0,-3);
    }
    date.setTime(date.getTime() + (daysToLive * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = `${name}=${value}; ${expires}; path=/`;
}