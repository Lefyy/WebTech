const elem = document.getElementsByClassName('dateLV');
let dateLV = getCookie('lastVisit') === null ? "никогда" : getCookie('lastVisit');
elem[0].innerHTML = dateLV;

setCookie('lastVisit', 'now', 10);

getSessionCookie('nowHere');
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

function deleteCookie(name){
    setCookie(name, null, null);
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

function getSessionCookie(name){
    if (getCookie(name) == '1') {
        document.getElementById('alert').classList.remove('alert--appear');
        document.getElementById('alert').classList.add('alert--hideafter');
    }
}