<html>
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Plain CSS -->
        <link href="style.css" rel="stylesheet" type="text/css"/>

        <title>user login page</title>


    </head>
    <body>
        
        <h2>Login Form</h2>

        <form action="" method="post">
            <div class="container">
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter Username" id="uname" name="uname">


                <!--    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>-->

                <button type="submit" onclick="loginuser()">Login</button>

            </div>

        </form>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="displayresult">
                    <!--<p id="xxx">Testing</p>--> 
                </div>
                <a href="controller/logicdata.php"></a>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script  src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/fontawesome.min.css" integrity="sha512-d0olNN35C6VLiulAobxYHZiXJmq+vl+BGIgAxQtD5+kqudro/xNMvv2yIHAciGHpExsIbKX3iLg+0B6d0k4+ZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
         
        <script type="text/javascript">
            //----------- Check Access Event ----------
   
     function loginuser() {
         var username = $('#uname').val()
         alert("123-s--"+username);
         $.ajax({
             type: "GET",
            url: "controller/logicdata.php?action=checkLogin&username="+ username,
            dataType: "html",
                async: true,
                success: function(data) {
                    alert("Result --"+data);
                    $('#displayresult').html(data);
                        }
         });
     }



  </script>
    </body>
</html>
