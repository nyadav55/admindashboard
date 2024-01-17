<html lang="en">
<head>
  <title>Crud PHP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
  </div>
    <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Project</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center text-danger font-weight-normal my-3">
                    ABC Bank
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h4 class=" text-primary">All Records</h4>
            </div>
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary m-1 float-right" id="addnewUser">
                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp; Add New User
                </button>
                 
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="displayUser">
                    <!--<p id="xxx">Testing</p>--> 
                </div>
            </div>
        </div>
    </div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!--Data Table-->
<!--    <script src="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>-->



  <script type="text/javascript">
  $(document).ready(function () {
    
     displayallUser();
     
     function displayallUser () {
         $.ajax({
             type: "GET",
            url: "../controller/logicdata.php?action=getUserdata",
            dataType: "html",
                async: true,
                success: function (data) {
                    $('#displayUser').html(data);
                        }
         });
     }
  });

//----------- Add New User Event ----------
document.getElementById("addnewUser").onclick = function () {
        location.href = "http://localhost/crudapp/view/addnewuser.php";
};
  </script>
</body>
<head>

</head>
<body>

<i class="fa fa-car"></i>

</body>
</html>