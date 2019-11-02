function like() {
    $.ajax({
        method: "POST",
        url: '',
        data: {like:'1'},
        success:function() {
            location.reload();
        },
        error:function (){}
    });
}

function deleteMsg(id, hardDelete) {
    $.ajax({
        method: "POST",
        url: '',
        data: {delete:'1', delId:id, hardDelete:hardDelete},
        success:function() {
            location.reload();
        },
        error:function (){}
    });
}

function deleteUser(id) {
    $.ajax({
        method: "POST",
        url: '',
        data: {userDeletion:'1', delUser:id},
        success:function() {
            location.reload();
        },
        error:function (){}
    });
}

function changeStatus(id) {
    $.ajax({
        method: "POST",
        url: '',
        data: {changeStatus:1, user:id},
        success:function() {
            location.reload();
        },
        error:function (){}
    });
}