if (getCookie('cache') === null) {
    setPageCookie('cache', '200px', 15);
} else {
    if (getCookie('cache') === '200px') {
        setPageCookie('cache', '400px', 15);
        On();
    } else {
        setPageCookie('cache', '200px', 15);
        On();
    }
}

function On() {              
    if(getCookie('cache') === '200px') {
        document.getElementById('image').classList.remove('bigImage--hide')
        document.getElementById('image').classList.remove('bigImage--hideafter')
        document.getElementById('image').classList.add('bigImage--appear')
        setPageCookie('realCurrPage', 'aboutWithIm', 15);
        setPageCookie('cache', '400px', 15);
    } else {
        document.getElementById('image').classList.add('bigImage--hide');
    setTimeout(() => {
        document.getElementById('image').classList.add('bigImage--hideafter');
    }, 400);
        setPageCookie('realCurrPage', 'about', 15);
        setPageCookie('cache', '200px', 15);
    }
}

// импорт методов не сделался пришлось перекопировать

function setPageCookie(name, value, daysToLive) {
    const date = new Date();
    date.setTime(date.getTime() + (daysToLive * 24 * 60 * 60 * 1000));
    let expires = "expires=" + date.toUTCString();
    document.cookie = `${name}=${value}; ${expires}; path=/`;
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

function checkPage() {
    if (getCookie('currPage') != getCookie('realCurrPage')) {
        let page = getCookie('currPage');
        switch(page){
            case 'index':
                window.location.href = 'index.php';
                break;
            case 'contacts':
                window.location.href = 'links.php';
                break;
            case 'about':
                window.location.href = 'about.php';
                break;
            case 'aboutWithIm':
                window.location.href = 'about.php';
                break;
            default:
                window.location.href = 'index.php';
                break;
        }
    }
}