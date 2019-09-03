<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WayToGO</title>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    <style>

    </style>

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="#">waytogo</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="company">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">DASHBOARD</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="http://localhost:8000/Tour/index1">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">BOOKINGS</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="http://localhost:8000/Contact">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">MESSAGES</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text"> TOURS</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="http://localhost:8000/Tour/create">ADD TOURS</a>
                    </li>
                    <li>
                        <a href="http://localhost:8000/Tour">VIEW TOURS</a>
                    </li>

                </ul>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">



            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Home </a>/
                <a href="#">Company </a>
            </li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

        <div class="container col-lg-6 col-md-6 col-sm-6" >

            <br>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">



                    <center><h3  >Add New Tour</h3></center>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <br>




            <form method="post" action="{{url('Tour')}}">
                {{csrf_field()}}
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="title" name="name">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">Details</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="title" name="Details">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">Budget</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="title" name="Budget">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">Departure</label>
                    <div class="col-md-10">
                        <input type="date" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="title" name="departure">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">Days</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="title" name="days">
                    </div>
                </div>
                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">No of Available Seats</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="title" name="NSA">
                    </div>
                </div>

                <div class="form-group row">

                    <label for="lgFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">Available Discount</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control form-control-sm" id="lgFormGroupInput" placeholder="title" name="discount">
                    </div>
                </div>
				
							
                <div class="form-group row">
                    <label for="smFormGroupInput" class="col-md-2 col-form-label  col-form-label-sm">Image</label>
                    <div class="col-md-10">
                        <input type="file" name="Image" accept="image/*">
                    </div>
                </div>
                <div class="form-group row float-right">
                    <div class="col-md-12">
                        <center> <button type="submit" class="btn btn-primary">Submit</button></center>
                    </div>

                </div>
            </form>
            <br>
        </div>






        <footer class="sticky-footer">
            <div class="container">
                <div class="text-center">
                    <small></small>
                </div>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- Logout Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Logout!</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="http://localhost:8000/C_Logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Page level plugin JavaScript-->
        <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin.min.js')}}"></script>
        <!-- Custom scripts for this page-->
        <script src="{{asset('js/sb-admin-datatables.min.js')}}"></script>
        <script src="{{asset('js/sb-admin-charts.min.js')}}"></script>
    </div>
</body>

</html>
