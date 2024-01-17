  $(document).ready(function () {
    
     displayallUser();
     
    function displayallUser() {
    var username = $('#uname').val()
    alert("username "+username);
            $.ajax({
                type: "GET",
                url: "controller/loginaccess.php?action=checkLogin&username="+ username,
                dataType: "html",
                async: true,
                success: function(data) {
                    $("#displayresult").html(data);
                }
            });
}
});
