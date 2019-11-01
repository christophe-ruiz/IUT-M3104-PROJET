function like() {
    $.ajax({
        method: "POST",
        url: '',
        data: {like:'like'},
        success:function(html) {
            alert(html);
            $('.likeCount').replaceWith(html);
        },
        error:function (){}
    });
}