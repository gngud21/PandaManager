function generateAPI() {
    var code = prompt("Please enter API Secret Token", "");
    
    if (code != null) {
        $.ajax({
            url: "/manage/generateAPI/" + code,
            type: 'GET',
            //data: code,
            success: function(data) {
                $('#message').html(data);
            },
            failure: function(data) {
                $('#message').html("404 No Response: " + data);
            }
        })
    }
}

function rebootAPI() {
    $.ajax({
            url: "/manage/rebootAPI",
            type: 'GET',
            success: function(data) {
                $('#message').html(data);
            },
            failure: function(data) {
                $('#message').html("404 No Response: " + data);
            }
        })
    
}

