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
        .card{
            padding: 20px;
        }
        .productForm, .serviceForm, .stockForm , .rentForm{
            display: none;
        }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

<!-- HEADER -->
<?php include 'mechanic-header.php' ?>
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
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->





<!-- SIDEBAR -->
        <?php include 'mechanic-sidebar.php' ?>

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
                                <h4 class="mb-sm-0">Generate Report</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(o);">Mechanic</a></li>
                                        <li class="breadcrumb-item active">Report</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


<!-- Main content -->


                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-4">
                                        <canvas id="productLineChart"></canvas>
                                    </div>
                                    <div class="col-md-4">
                                        <canvas id="servicesLineChart"></canvas>
                                    </div>
                                    <div class="col-md-4">
                                        <canvas id="stockPieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="selectType">Generate Report</label>
                                        <select class="form-select" id="selectType" name="selectType">
                                            <option value="Select">Select</option>
                                            <option value="Product">Product</option>
                                            <option value="Service">Service</option>
                                            <!-- <option value="Rent">Rent</option> -->
                                            <option value="Stock">Stock</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="col-md-9">
                                        <form class="form-inline productForm" method="post" action="pdf/generate_product.php" target="_blank">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="selectOption">Select:</label>
                                                        <select class="form-select" id="selectOption" name="selectOption">
                                                            <option value="month">Specific Month</option>
                                                            <option value="year">Whole Year</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 rangeMonth">
                                                        <div class="form-group" id="monthSelect">
                                                            <label for="month">Select Range of Month:</label>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <input class="form-control" type="date" id="fmonth" name="selectedMonths[]">
                                                                    <!-- <select class="form-select">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select> -->
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <h4><center>=</center></h4>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input class="form-control" type="date" id="lmonth" name="selectedMonths[]">
                                                                    <!-- <select class="form-select">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group" id="yearSelect">
                                                            <label for="year">Select Year:</label>
                                                            <select class="form-select" id="year" name="year">
                                                                <?php
                                                                $currentYear = date("Y");
                                                                for ($year = $currentYear; $year >= $currentYear - 10; $year--) {
                                                                    echo "<option value='$year'>$year</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                                <input type="hidden" name="dataURL" id="dataURL1" value="">
                                                <input type="hidden" name="filename" id="filename1" value="">
                                                <button type="submit" id="submitBtn1" name="generate_pdf"  class="btn btn-primary float-end">Generate PDF</button>
                                                <button type="button" onclick="captureChartAsImage1()" class="btn btn-primary d-none triggerBtn float-end">Generate PDF</button>
                                        </form>

                                        <form class="form-inline serviceForm" id="yourFormId" method="post" action="pdf/generate_service.php" target="_blank">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="selectOption2">Select:</label>
                                                        <select class="form-select" id="selectOption2" name="selectOption2">
                                                            <option value="month">Specific Month</option>
                                                            <option value="year">Whole Year</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 rangeMonth2">
                                                        <div class="form-group" id="monthSelect">
                                                            <label for="month">Select Range of Month:</label>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <input class="form-control" type="date" id="fmonth" name="selectedMonths1[]">
                                                                    <!-- <select class="form-select" id="fmonth" name="selectedMonths1[]">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select> -->
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <h4><center>=</center></h4>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input class="form-control" type="date" id="lmonth" name="selectedMonths1[]">
                                                                    <!-- <select class="form-select" id="lmonth" name="selectedMonths1[]">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group" id="yearSelect2">
                                                            <label for="year">Select Year:</label>
                                                            <select class="form-select" id="year" name="year">
                                                                <?php
                                                                $currentYear = date("Y");
                                                                for ($year = $currentYear; $year >= $currentYear - 10; $year--) {
                                                                    echo "<option value='$year'>$year</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                                <input type="hidden" name="dataURL" id="dataURL2" value="">
                                                <input type="hidden" name="filename" id="filename2" value="">
                                                <button type="submit"  id="submitBtn2" id="generate_pdf" name="generate_pdf"  class="btn btn-primary float-end">Generate PDF</button>
                                                <button type="button" onclick="captureChartAsImage2()" class="btn btn-primary d-none triggerBtn float-end">Generate PDF</button>
                                        </form>
                                        
                                        <form class="form-inline rentForm" id="yourFormId2" method="post" action="pdf/generate_rent.php" target="_blank">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="selectOption3">Select:</label>
                                                        <select class="form-select" id="selectOption3" name="selectOption3">
                                                            <option value="month">Specific Month</option>
                                                            <option value="year">Whole Year</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6 rangeMonth3">
                                                        <div class="form-group" id="monthSelect">
                                                            <label for="month">Select Range of Month:</label>
                                                            <div class="row">
                                                                <div class="col-md-5">
                                                                    <input class="form-control" type="date" id="fmonth" name="selectedMonths2[]">
                                                                    <!-- <select class="form-select" id="fmonth" name="selectedMonths2[]">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select> -->
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <h4><center>=</center></h4>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <input class="form-control" type="date" id="lmonth" name="selectedMonths2[]">
                                                                    <!-- <select class="form-select" id="lmonth" name="selectedMonths1[]">
                                                                        <option value="1">January</option>
                                                                        <option value="2">February</option>
                                                                        <option value="3">March</option>
                                                                        <option value="4">April</option>
                                                                        <option value="5">May</option>
                                                                        <option value="6">June</option>
                                                                        <option value="7">July</option>
                                                                        <option value="8">August</option>
                                                                        <option value="9">September</option>
                                                                        <option value="10">October</option>
                                                                        <option value="11">November</option>
                                                                        <option value="12">December</option>
                                                                    </select> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group" id="yearSelect3">
                                                            <label for="year">Select Year:</label>
                                                            <select class="form-select" id="year" name="year">
                                                                <?php
                                                                $currentYear = date("Y");
                                                                for ($year = $currentYear; $year >= $currentYear - 10; $year--) {
                                                                    echo "<option value='$year'>$year</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                                <input type="hidden" name="dataURL" id="dataURL2" value="">
                                                <input type="hidden" name="filename" id="filename2" value="">
                                                <button type="submit"  id="submitBtn2" id="generate_pdf" name="generate_pdf"  class="btn btn-primary float-end">Generate PDF</button>
                                                <button type="button" onclick="captureChartAsImage2()" class="btn btn-primary d-none triggerBtn float-end">Generate PDF</button>
                                        </form>

                                        <form class="form-inline stockForm" method="post" action="pdf/generate_stocks.php" target="_blank">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <label for="selectStock">Select:</label>
                                                    <select class="form-select" id="selectStock" name="selectStock">
                                                        <option value="all">All Stock</option>
                                                        <option value="car">Car</option>
                                                        <option value="sparepart & accessory">Sparepart & Accessory</option>
                                                        <option value="paint">Paint</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="form-group d-none">
                                                <div class="row">
                                                    <input type="hidden" name="dataURL" id="dataURL3" value="">
                                                    <input type="hidden" name="filename" id="filename3" value="">
                                                </div>
                                            </div>
                                            <button class="btn btn-primary float-end" value="submit" name="submit" id="submitBtn3">Generate PDF</button>
                                            <button type="button" onclick="captureChartAsImage3()" class="btn btn-primary triggerBtn float-end d-none">Generate PDF</button>
                                        </form>


                                    </div>


                                </div>
                            </div>
                        </div>

                        </div><!-- end col -->
                    </div><!-- end row -->

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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js" integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>


        $(document).ready(function() {
            // Add a click event handler to the button
            $(".triggerBtn").click(function() {
                // Show the modal when the button is clicked
                $('#loadingModal').modal('show');
            });
            
            $('#selectType').on('change', function() {
                if (this.value == "Product") {
                    $('.productForm').css('display', 'block');
                    $('.serviceForm').css('display', 'none');
                    $('.stockForm').css('display', 'none');
                    $('.rentForm').css('display', 'none');
                    // $('#yearSelect').css('display', 'none');
                } else if (this.value == "Service") {
                    $('.serviceForm').css('display', 'block');
                    $('.productForm').css('display', 'none');
                    $('.stockForm').css('display', 'none');
                    $('.rentForm').css('display', 'none');
                    // $('#yearSelect2').css('display', 'none');
                } else if (this.value == "Rent") {
                    $('.rentForm').css('display', 'block');
                    $('.serviceForm').css('display', 'none');
                    $('.productForm').css('display', 'none');
                    $('.stockForm').css('display', 'none');
                    // $('#yearSelect2').css('display', 'none');
                } else if (this.value == "Stock") {
                    $('.stockForm').css('display', 'block');
                    $('.productForm').css('display', 'none');
                    $('.serviceForm').css('display', 'none');
                    $('.rentForm').css('display', 'none');
                } else {
                    $('.productForm').css('display', 'none');
                    $('.serviceForm').css('display', 'none');
                    $('.stockForm').css('display', 'none');
                }
            });


        });

        function makeLineChart1() {
            $.ajax({
                url: "db/chart.php",
                method: "POST",
                data: { action: 'productLineChart' },
                dataType: "JSON",
                success: function (data) {
                    var monthYear = [];
                    var total = [];
                    var color = [];

                    for (var count = 0; count < data.length; count++) {
                        monthYear.push(data[count].month_year);
                        total.push(data[count].total);
                        color.push(data[count].color);
                    }

                    var chart_data = {
                        labels: monthYear,
                        datasets: [
                            {
                                label: 'Total Sales',
                                borderColor: color, // Use the color for line
                                backgroundColor: 'transparent',
                                data: total
                            }
                        ]
                    };

                    var options = {
                        responsive: true,
                        scales: {
                            x: {
                                grid: {
                                    display: false // Hide x-axis grid lines
                                }
                            },
                            y: {
                                ticks: {
                                    min: 0
                                }
                            }
                        }
                    };

                    var group_chart3 = $('#productLineChart'); // Use a different element ID
                    var graph3 = new Chart(group_chart3, {
                        type: 'line', // Change to 'line'
                        data: chart_data,
                        options: options
                    });
                },
                error: function (xhr, status, error) {
                    alert(xhr + " " + status + " " + error);
                }
            });
        }
        function makeLineChart2() {
            $.ajax({
                url: "db/chart.php",
                method: "POST",
                data: { action: 'servicesLineChart' },
                dataType: "JSON",
                success: function (data) {
                    var monthYear = [];
                    var total = [];
                    var color = [];

                    for (var count = 0; count < data.length; count++) {
                        monthYear.push(data[count].month_year);
                        total.push(data[count].total);
                        color.push(data[count].color);
                    }

                    var chart_data = {
                        labels: monthYear,
                        datasets: [
                            {
                                label: 'Total Revenue',
                                borderColor: color, // Use the color for line
                                backgroundColor: 'transparent',
                                data: total
                            }
                        ]
                    };

                    var options = {
                        responsive: true,
                        scales: {
                            x: {
                                grid: {
                                    display: false // Hide x-axis grid lines
                                }
                            },
                            y: {
                                ticks: {
                                    min: 0
                                }
                            }
                        }
                    };

                    var group_chart3 = $('#servicesLineChart'); // Use a different element ID
                    var graph3 = new Chart(group_chart3, {
                        type: 'line', // Change to 'line'
                        data: chart_data,
                        options: options
                    });
                },
                error: function (xhr, status, error) {
                    alert(xhr + " " + status + " " + error);
                }
            });
        }
        function makePieChart1() {
            $.ajax({
                url: "db/chart.php",
                method: "POST",
                data: { action: 'stockPieChart' },
                dataType: "JSON",
                success: function (data) {
                    var labels = [];
                    var values = [];
                    var colors = [];

                    for (var count = 0; count < data.length; count++) {
                        var labelWithValue = `${data[count].label} : ${data[count].value}`;
                        labels.push(labelWithValue);
                        values.push(data[count].value);
                        colors.push(data[count].color);
                    }

                    var chart_data = {
                        labels: labels,
                        datasets: [
                            {
                                data: values,
                                backgroundColor: colors,
                            }
                        ]
                    };

                    var options = {
                        responsive: true
                    };

                    var pieChartCanvas = $('#stockPieChart');

                    new Chart(pieChartCanvas, {
                        type: 'pie',
                        data: chart_data,
                        options: options
                    });

                },
                error: function (xhr, status, error) {
                    alert(xhr + " " + status + " " + error);
                }
            });
        }

        makeLineChart1();
        makeLineChart2();
        makePieChart1();


        var countdownTimeout; // Declare a variable to store the timeout ID

        function captureChartAsImage1() {
            // Start a 3-second countdown
            var seconds = 3;
            var countdownDisplay = document.getElementsByClassName('countdownDisplay'); // Assuming you have an element to display the countdown

            function updateCountdown() {
                countdownDisplay.textContent = seconds + ' seconds left';
                seconds--;

                if (seconds < 0) {
                    // Hide the modal when the countdown is completed
                    $('#loadingModal').modal('hide');
                } else {
                    countdownTimeout = setTimeout(updateCountdown, 1000);
                }
            }

            // Start the countdown
            updateCountdown();

            var chartCanvas = document.getElementById("productLineChart");

            // Use html2canvas to capture the chart as an image
            html2canvas(chartCanvas).then(function(canvas) {
                // Generate a random filename with a timestamp
                var filename = "chart_image_" + Date.now() + ".png";
                // Create a data URL from the canvas
                var dataURL = canvas.toDataURL("image/png");

                $('#dataURL1').val(dataURL);
                $('#filename1').val(filename);
                $('#submitBtn1').click();
            });
        }

        function captureChartAsImage2() {
            // Start a 3-second countdown
            var seconds = 3;
            var countdownDisplay = document.getElementsByClassName('countdownDisplay'); // Assuming you have an element to display the countdown

            function updateCountdown() {
                countdownDisplay.textContent = seconds + ' seconds left';
                seconds--;

                if (seconds < 0) {
                    // Hide the modal when the countdown is completed
                    $('#loadingModal').modal('hide');
                } else {
                    countdownTimeout = setTimeout(updateCountdown, 1000);
                }
            }

            // Start the countdown
            updateCountdown();

            var chartCanvas = document.getElementById("servicesLineChart");

            // Use html2canvas to capture the chart as an image
            html2canvas(chartCanvas).then(function(canvas) {
                // Generate a random filename with a timestamp
                var filename = "chart_image_" + Date.now() + ".png";
                // Create a data URL from the canvas
                var dataURL = canvas.toDataURL("image/png");

                $('#dataURL2').val(dataURL);
                $('#filename2').val(filename);
                $('#submitBtn2').click();
            });
        }

        function captureChartAsImage3() {
            // Start a 3-second countdown
            var seconds = 3;
            var countdownDisplay = document.getElementsByClassName('countdownDisplay'); // Assuming you have an element to display the countdown

            function updateCountdown() {
                countdownDisplay.textContent = seconds + ' seconds left';
                seconds--;

                if (seconds < 0) {
                    // Hide the modal when the countdown is completed
                    $('#loadingModal').modal('hide');
                } else {
                    countdownTimeout = setTimeout(updateCountdown, 1000);
                }
            }

            // Start the countdown
            updateCountdown();

            var chartCanvas = document.getElementById("stockPieChart");

            // Use html2canvas to capture the chart as an image
            html2canvas(chartCanvas).then(function(canvas) {
                // Generate a random filename with a timestamp
                var filename = "chart_image_" + Date.now() + ".png";
                // Create a data URL from the canvas
                var dataURL = canvas.toDataURL("image/png");

                $('#dataURL3').val(dataURL);
                $('#filename3').val(filename);
                $('#submitBtn3').click();
            });
        }


// To stop the countdown and hide the modal, you can call the following function:
function stopCountdownAndHideModal() {
    clearTimeout(countdownTimeout); // Clear the countdown timeout
    $('#loadingModal').modal('hide'); // Hide the modal
}




        
        // Show/hide the year select based on the selected option
        document.getElementById("selectOption").addEventListener("click", function () {

            if (this.value === "month") {
                $('.rangeMonth').css('display', 'block');
                $('#yearSelect').css('display', 'none');
            } else if (this.value === "year") {
                $('.rangeMonth').css('display', 'none');
                $('#yearSelect').css('display', 'block');
            }
        });

        // Show/hide the year select based on the selected option
        document.getElementById("selectOption2").addEventListener("click", function () {

            if (this.value === "month") {
                $('.rangeMonth2').css('display', 'block');
                $('#yearSelect2').css('display', 'none');
            } else if (this.value === "year") {
                $('.rangeMonth2').css('display', 'none');
                $('#yearSelect2').css('display', 'block');
            }
        });

        // Show/hide the year select based on the selected option
        document.getElementById("selectOption3").addEventListener("click", function () {

            if (this.value === "month") {
                $('.rangeMonth3').css('display', 'block');
                $('#yearSelect3').css('display', 'none');
            } else if (this.value === "year") {
                $('.rangeMonth3').css('display', 'none');
                $('#yearSelect3').css('display', 'block');
            }
        });
    </script>
</body>

</html>