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
        <a class="nav-link" href="#">Link 1</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link 3</a>
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
                <button type="button" class="btn btn-primary m-1 float-right">
                    <i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp; Add New User
                </button>
                <a href="#" class="btn btn-success m-1 float-right">
                    <i class="fas fa-table fa-lg"></i>&nbsp;&nbsp; Export
                </a> 
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive" id="displayUser">
                    <table class="table table-striped table-sm table-dashboard">
                        <thead>
                            <tr class="text-center">
                                <th>1</th>
                                <th>1</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php for($i=1; $i<=10; $i++) { ?>
                            <tr class="text-center text-secondary">
                                <td>User</td>
                                <td>User</td>
                                <td>
                                    <a href="#" title="View" class="text-success">
                                        <i class="fas fa-info-circle fa-lg"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="#" title="Edit" class="text-primary">
                                        <i class="fas fa-edit fa-lg"></i>
                                    </a>&nbsp;&nbsp;
                                    <a href="#" title="Delete" class="text-success">
                                        <i class="fas fa-trash-alt fa-lg"></i>
                                    </a>&nbsp;
                                </td>
                            </tr>
                          <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!--<script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <script type="text/javascript">
  $(document).ready(function () {
     $("table").DataTable(); 
  });
  </script>
</body>
</html>