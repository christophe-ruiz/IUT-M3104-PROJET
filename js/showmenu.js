function showmenu() {

    var divcon = document.getElementById('divconnexion');
    var divinsc = document.getElementById('divinscription');

    if (divcon.style.visibility == 'hidden') {

        divcon.style.visibility = 'visible';
        divinsc.style.visibility = 'hidden';
    }
    else if (divcon.style.visibility == 'visible' )
    {
        divcon.style.visibility = 'hidden';
    }


}

function showmenu2() {

    var divcon = document.getElementById('divconnexion');
    var divinsc = document.getElementById('divinscription');

    if (divinsc.style.visibility == 'visible' ) {

        divinsc.style.visibility = 'hidden';
    }
    else if (divinsc.style.visibility == 'hidden')
    {
        divinsc.style.visibility = 'visible';
        divcon.style.visibility = 'hidden';
    }
}

function showNewTopicForm() {
    let topic = document.getElementById('newTopic');
    if (topic.style.visibility == 'visible') topic.style.visibility = 'hidden';
    else topic.style.visibility = 'visible';
}