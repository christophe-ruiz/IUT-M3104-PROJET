function like() {
    $.ajax({
        method: "POST",
        url: 'app/model/like.php',
        data: {like:'like', id:''},
        success:function(html) {
            alert(html);
        },
        error:function (){}
    });
}