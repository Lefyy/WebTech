setCookie('lastVisit', 'now', 10);

setSessionCookie('nowHere', '1');

function setCookie(name, value, daysToLive){
    const date = new Date();
    if (value != null) {
        value = date.toLocaleString().slice(0,-3);
    }
    date.setTime(date.getTime() + (daysToLive * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = `${name}=${value}; ${expires}; path=/`;
}

function setSessionCookie(name, value){
    const date = new Date();
    date.setTime(date.getTime() + (1000 * 60 * 60 * 60))
    let expires = "expires=" + date.toUTCString();
    document.cookie = `${name}=${value}; ${expires}; path=/`
}

function setPageCookie(name, value, daysToLive) {
    const date = new Date();
    date.setTime(date.getTime() + (daysToLive * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = `${name}=${value}; ${expires}; path=/`;
}