function loginuser() {
    var username = $('#uname').val()
            $.ajax({
                type: "GET",
                url: "controller/loginaccess.php?action=checkLogin&username="+ username,
                dataType: "html",
                async: true,
                success: function(data) {
                    alert(data);
                    $('#result').html(data);
                }
            });
}
