<?php
// Set session cookie to expire after 12 hours (43200 seconds)
$sessionExpiration = 86400 + 86400 + 86400;
session_set_cookie_params($sessionExpiration);
session_start();


?>


<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
<head>

    <meta charset="utf-8" />
    <title>Garage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

	<style>
        .center-both {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90px; /* This is optional and ensures vertical centering works within the viewport height. Adjust as needed. */
        }

    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

<!-- HEADER -->
<?php include 'admin-header.php' ?>
<!-- CLOSING HEADER -->

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Achive It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<!-- SIDEBAR -->
        <?php include 'admin-sidebar.php' ?>

<!-- SIDEBAR CLOSING -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Utilities</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(o);">Admin</a></li>
                                        <li class="breadcrumb-item active">Utilities</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


<!-- Main content -->

                    <div class="row">

                        <div class="col-md-6">
                            <div class="card p-4">
                                <h3 class="text-center">Available Services</h3>
                                <div class="container">
                                    <div class="row">
                                        <label class="form-label text-center" for="Vehicle Type">Vehicle Type </label>
                                        <select class="form-select text-center" style="font-weight:900;font-size:15px" name="" id="">
                                            
                                            <?php
                                                include 'db/connection.php';
                                                $stmtpaintdelete = mysqli_query($conn, "SELECT * FROM vehicletype_service ORDER BY id DESC");
                                                while($data = mysqli_fetch_assoc($stmtpaintdelete)){
                                            ?>

                                            <option value="<?php echo $data['id']; ?>"><?php echo $data['vehicleType']; ?></option>

                                            <?php
                                            }
                                            ?>
                                        </select>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Add :</label>
                                                    <input class="form-control" type="text" name="addvehicleService" id="addvehicleService" placeholder="Enter vehicle type">
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Add" class="btn btn-primary" name="add">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Achive</label>
                                                    <select class="form-select" name="deletevehicleService" id="deletevehicleService">

                                                        <?php
                                                            $stmtpaintdelete = mysqli_query($conn, "SELECT * FROM vehicletype_service  ORDER BY id DESC");
                                                            while($data = mysqli_fetch_assoc($stmtpaintdelete)){
                                                        ?>

                                                        <option value="<?php echo $data['id']; ?>"><?php echo $data['vehicleType']; ?></option>

                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Achive" class="btn btn-danger" name="delete">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <label class="form-label text-center" for="Vehicle Type">Service </label>
                                        <div class="row m-0 p-0">
                                            <div class="col-md-9 text-center">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="" class="form-label float-end">Reference :</label>
                                                <select class="form-select float-end" name="vehicleType" id="vehicleType">
                                                    
                                                    <?php
                                                    $stmtpaintdelete = mysqli_query($conn, "SELECT * FROM vehicletype_service ORDER BY id DESC");
                                                    while($data = mysqli_fetch_assoc($stmtpaintdelete)){
                                                    ?>

                                                    <option value="<?php echo $data['id']; ?>"><?php echo $data['vehicleType']; ?></option>

                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                            
                                        <select class="form-select text-center" style="font-weight:900;font-size:15px" name="showService" id="showService">
                                        </select>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="form-label" for="">Add :</label>
                                                    <input class="form-control" type="text" name="addService" id="addService" placeholder="Enter Service type">
                                                    <input type="hidden" name="carType" id="carType">
                                                </div>
                                                <div class="col-md-4 center-both">
                                                    <input class="form-control" type="text" name="addServicePrice" id="addServicePrice" placeholder="Enter Price">
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Add" class="btn btn-primary" name="add">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Achive</label>
                                                    <select class="form-select" name="deleteService" id="deleteService">
                                                    </select>
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Achive" class="btn btn-danger" name="delete">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-4">
                                <h3 class="text-center">Available Type of Car</h3>
                                <div class="container">
                                    <div class="row">
                                        <label class="form-label text-center" for="Vehicle Type">Vehicle Type </label>
                                        <select class="form-select text-center" style="font-weight:900;font-size:15px" name="" id="vehicletypeSell">
                                            
                                        </select>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Add :</label>
                                                    <input class="form-control" type="text" name="addvehicleSell" id="addvehicleSell" placeholder="Enter vehicle type">
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Add" class="btn btn-primary" name="add">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Achive</label>
                                                    <select class="form-select" name="deletevehicleSell" id="deletevehicleSell">

                                                    </select>
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Achive" class="btn btn-danger" name="delete">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <label class="form-label text-center" for="Vehicle Type">Model </label>
                                        <select class="form-select text-center" style="font-weight:900;font-size:15px" name="" id="carModel">
                                            
                                        </select>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Add :</label>
                                                    <input class="form-control" type="text" name="addCarModel" id="addCarModel" placeholder="Enter model">
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Add" class="btn btn-primary" name="add">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Achive</label>
                                                    <select class="form-select" name="deleteModel" id="deleteModel">

                                                    </select>
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Achive" class="btn btn-danger" name="delete">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="row">
                                        <label class="form-label text-center" for="Vehicle Type">Engine </label>
                                        <select class="form-select text-center" style="font-weight:900;font-size:15px" name="" id="carEngine">
                                            
                                        </select>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Add :</label>
                                                    <input class="form-control" type="text" name="addEngine" id="addEngine" placeholder="Enter engine">
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Add" class="btn btn-primary" name="add">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <form action="db/utilitiesvehicle.php" method="post" class="utilityvehicleForm">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <label class="form-label" for="">Achive</label>
                                                    <select class="form-select" name="deleteEngine" id="deleteEngine">

                                                    </select>
                                                </div>
                                                <div class="col-md-2 center-both">
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <input type="submit" value="Achive" class="btn btn-danger" name="delete">
                                                </div>
                                            </div>
                                        </form>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


<!-- FOOTER -->

<?php include 'admin-footer.php' ?>

<!-- END OF FOOTER -->
    <!-- JAVASCRIPT -->
    <script src="js/jquery-3.6.3.min.js"></script>
    
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- Dashboard init -->
    <script src="assets/js/pages/dashboard-analytics.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Call the function when the page is ready
            updateServiceOptions();
            
            // Add event listener for the change event
            document.getElementById('vehicleType').addEventListener('change', function() {
                updateServiceOptions();
            });
        });

        function updateServiceOptions() {
            var selectedVehicleType = document.getElementById('vehicleType').value;

            // Fetch and update options for showService
            fetch('db/utilitiesvehicle.php?vehicleType=' + selectedVehicleType)
                .then(response => response.json())
                .then(data => {
                    var showServiceSelect = document.getElementById('showService');
                    showServiceSelect.innerHTML = ''; // Clear existing options
                    data.forEach(service => {
                        var option = document.createElement('option');
                        option.value = service.id;
                        option.textContent = service.service;
                        showServiceSelect.appendChild(option);
                    });

                    // Fetch and update options for deleteService
                    fetch('db/utilitiesvehicle.php?vehicleType=' + selectedVehicleType)
                        .then(response => response.json())
                        .then(deleteData => {
                            var deleteServiceSelect = document.getElementById('deleteService');
                            deleteServiceSelect.innerHTML = ''; // Clear existing options
                            deleteData.forEach(deleteService => {
                                var deleteOption = document.createElement('option');
                                deleteOption.value = deleteService.id;
                                deleteOption.textContent = deleteService.service;
                                deleteServiceSelect.appendChild(deleteOption);
                            });
                        });
                });
        }


        $(document).ready(function () {

            
            $.ajax({
                url: 'db/utilitiesvehicle.php',
                type: 'GET',
                data: { 'action': 'getcarDetails' },
                dataType: 'json',
                success: function (data) {

                    // Populate the select element with the fetched vehicle types
                    var vehicletypeSell = $('#vehicletypeSell');
                    $.each(data.vehicletypes, function (index, value) {
                        vehicletypeSell.append($('<option>', {
                            value: value.id, // Set the ID as the option value
                            text: value.vehicleType
                        }));
                    });

                    // Populate the select element with the fetched vehicle types
                    var deletevehicleSell = $('#deletevehicleSell');
                    $.each(data.vehicletypes, function (index, value) {
                        deletevehicleSell.append($('<option>', {
                            value: value.id, // Set the ID as the option value
                            text: value.vehicleType
                        }));
                    });

                    // Populate the select element with the fetched car models
                    var carModel = $('#carModel');
                    $.each(data.carModels, function (index, value) {
                        carModel.append($('<option>', {
                            value: value.id, // Set the ID as the option value
                            text: value.model
                        }));
                    });

                    // Populate the select element with the fetched car models
                    var deleteModel = $('#deleteModel');
                    $.each(data.carModels, function (index, value) {
                        deleteModel.append($('<option>', {
                            value: value.id, // Set the ID as the option value
                            text: value.model
                        }));
                    });
					
                    var carEngine = $('#carEngine');
                    $.each(data.carEngines, function (index, value) {
                        carEngine.append($('<option>', {
                            value: value.id, // Set the ID as the option value
                            text: value.engine
                        }));
                    });
					
                    var deleteEngine = $('#deleteEngine');
                    $.each(data.carEngines, function (index, value) {
                        deleteEngine.append($('<option>', {
                            value: value.id, // Set the ID as the option value
                            text: value.engine
                        }));
                    });


                },
                error: function () {
                    console.error('Error fetching data from the server.');
                }
            });


            $("#carType").val($("#vehicleType").val());

            $("#vehicleType").on("change", function() {
                $("#carType").val(this.value);
            });
            

            // Catch the form submission
            $(".utilityvehicleForm").submit(function (event) {
                // Prevent the default form submission
                event.preventDefault();

                if (confirm("Are you sure to continue?")) {
                    // Use AJAX to submit the form data
                    $.ajax({
                        type: "POST",
                        url: $(this).attr('action'),
                        data: $(this).serialize(),
                        dataType: "json",
                        success: function (response) {
                            if(response['valid'] == false){
                                $('#errorModal').modal('show');

                                // Close errorModal after 2 seconds and trigger redirection
                                setTimeout(function () {
                                    $('#errorModal').modal('hide');
								    location.reload();
                                },1000);
                            }else{
                                $('#successModal').modal('show');

                                // Close successModal after 2 seconds and trigger redirection
                                setTimeout(function () {
                                    $('#successModal').modal('hide');
								    location.reload();
                                },1000);
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert("Error: " + errorThrown);
                        },
                    });
                }
            });
        });
    </script>
</body>

</html>