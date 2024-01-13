function loginuser() {
    var username = $('#uname').val()
    alert("username "+username);
            $.ajax({
                type: "GET",
                url: "controller/loginaccess.php?action=checkLogin&username="+ username,
                dataType: "html",
                async: true,
                success: function(data) {
                    alert(data);
                    window.location = "http://localhost/crudapp/view/dashboard.php";
//                    $('#result').html(data);
                }
            });
}
