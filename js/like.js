function like() {
    $.ajax({
        method: "POST",
        url: '',
        data: {like:'like'},
        success:function(html) {},
        error:function (){}
    });
}