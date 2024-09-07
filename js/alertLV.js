function hideAlert(){
    document.getElementById('alert').classList.add('alert--disappear');
    setTimeout(() => {
        document.getElementById('alert').classList.add('alert--hideafter');
    }, 400);
}