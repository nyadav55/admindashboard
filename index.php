<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    <label for="uname"><b>Username</b></label>
    <input type="text" id="uname " name="uname" >

<!--    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>-->
        
<button type="submit" onclick="loginuser()">Login</button>

  </div>

    <div id="result"></div>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>s
<script  src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="action.js" type="text/javascript"></script>
    </body>
</html>
