function showmenu() {
    var y = document.getElementById('divconnexion');
    if (y.style.visibility == 'hidden' && x.style.visibility == 'hidden') {
        y.style.visibility = 'visible';
    } else {
        y.style.visibility = 'hidden';
    }
}

function showmenu2() {
    var y = document.getElementById('divconnexion');
    var x = document.getElementById('divinscription');
    if (x.style.visibility == 'hidden' && y.style.visibility == 'hidden') {
        x.style.visibility = 'visible';
    }
    else {
        x.style.visibility = 'hidden';
    }
}