function showmenu() {
    var y = document.getElementById('divconnexion');
    var x = document.getElementById('divinscription');
    if (y.style.visibility == 'hidden') {
        y.style.visibility = 'visible';
        x.style.visibility = 'hidden';
    } else {
        y.style.visibility = 'hidden';
    }
}

function showmenu2() {
    var y = document.getElementById('divconnexion');
    var x = document.getElementById('divinscription');
    if (x.style.visibility == 'hidden') {
        x.style.visibility = 'visible';
        y.style.visibility = 'hidden';
    }
    else {
        x.style.visibility = 'hidden';
    }
}