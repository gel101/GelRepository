<?php
// Set session cookie to expire after 12 hours (43200 seconds)
$sessionExpiration = 86400 + 86400 + 86400;
session_set_cookie_params($sessionExpiration);
session_start();
$customerID = $_SESSION['cust_id'];
global $customerID;

include 'db/connection.php';

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
    <link rel="stylesheet" href="css/acustomer.css">
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
        .mainDetails{
            font-weight: bold;
            font-size: 20px;
        }
        .mainLabel{
            color: gray;
        }
        .confirmQuantity{
            visibility: hidden;
        }
    </style>
</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

<!-- HEADER -->
<?php include 'customer-header.php' ?>
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
        <?php include 'customer-sidebar.php' ?>

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
                                <h4 class="mb-sm-0">My cart</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Customer</a></li>
                                        <li class="breadcrumb-item active">Cart</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <!-- Main content -->
                    
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table text-center table1">
                                        <thead style="color: #1873d3">
                                            <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Car Type</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Product Price</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include 'db/connection.php';

                                            $stmt = mysqli_query($conn, "SELECT * FROM carts WHERE cust_id='$customerID' AND car_id != '' AND status='on cart'");

                                            while($data = mysqli_fetch_assoc($stmt)){
                                        ?>
                                                <tr>
                                                    <td><input type="checkbox" name="getcheckbox[]" class="form-check-input" value="<?php echo $data['cart_id']; ?>"></td>
                                                    <td><?php echo $data['product']; ?></td>
                                                    <td><?php echo $data['name']; ?></td>
                                                    <td><img src="db/<?php $color = $data['color'];

                                                    if ($color != '') {
                                                        $stmt64 = mysqli_query($conn, "SELECT * FROM paints WHERE paint_color='$color' AND status=''");
                                                        while($data321 = mysqli_fetch_assoc($stmt64)){
                                                            echo $data321['img'];
                                                        }
                                                    }else {
                                                        echo $data['img'];
                                                    }
                                                    ?>" style="width: 80px; height: 80px;" alt="Car Image"></td>
                                                    <td>&#8369; <span class="computedpriceValue"><?php echo number_format($data['price'], 2); ?></span></td>
                                                    <td>
                                                        <button class="btn btn-info" data-value-1="<?php echo $data['details']; ?>" data-value-2="db/<?php $carColor = $data['color']; $stmt11 = mysqli_query($conn, "SELECT img FROM paints WHERE paint_color='$carColor' AND status='' "); while($data11 = mysqli_fetch_assoc($stmt11)){ echo $data11['img'];}?>" 
                                                            onclick="prevCar(
                                                            '<?php echo $data['cart_id']; ?>',
                                                            '<?php echo $data['img']; ?>',
                                                            '<?php echo $data['product']; ?>',
                                                            '<?php echo $data['name']; ?>',
                                                            '<?php echo $data['model']; ?>',
                                                            '<?php echo $data['engine']; ?>',
                                                            '<?php echo number_format($data['quantity'] * $data['price'], 2); ?>',
                                                            '<?php echo $data['color']; ?>',
                                                            '<?php echo $data['quantity']; ?>',
                                                            '<?php echo $data['leftQuantity']; ?>',
                                                            this.getAttribute('data-value-1'),
                                                            this.getAttribute('data-value-2')
                                                            )"><i class="fas fa-eye"></i></button>
                                                        <button class="btn btn-danger" onclick="archiveCart(
                                                            '<?php echo $data['cart_id']; ?>',
                                                            '<?php echo $data['cust_id']; ?>',
                                                            '<?php echo $data['product']; ?>',
                                                            '<?php echo $data['name']; ?>',
                                                            '<?php echo $data['model']; ?>',
                                                            '<?php echo $data['engine']; ?>',
                                                            '<?php echo $data['price']; ?>',
                                                            '<?php echo $data['color']; ?>',
                                                            '<?php echo $data['quantity']; ?>',
                                                            '<?php echo $data['status']; ?>'
                                                            )"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            <?php
                                                }
                                            ?>


                                            <!-- TOTAL PRICE -->
                                            <tr>
                                                <td colspan="3" class="bg-primary" style="opacity:.8;color:white;font-weight:bold;font-size:15px;">CAR/S</td>
                                                <td class="bg-primary" style="color:white;font-weight:bold;font-size:15px;">TOTAL PRICE: </td>
                                                <td class="bg-primary" style="color:white;font-weight:bold;font-size:15px;" >&#8369; <span id="totalPrice">0.00</span></td>
                                                <td class="bg-primary"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" onclick="placeOrder('car', '<?php if(isset($_SESSION['cust_id'])){echo $_SESSION['cust_id'];} ?>', document.getElementById('totalPrice').innerText.replace(/,/g, ''))" <?php if(isset($_SESSION['userStatus'])){ if ($_SESSION['userStatus'] === 'Pending') { echo 'disabled'; }} ?>>Place order</button>
                                    </div>

                                    </div><!-- end card-body -->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div><!-- end row -->
                                    
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table text-center table2">
                                        <thead style="color: #1873d3">
                                            <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Product Price</th>
                                            <th scope="col">Computed Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            include 'db/connection.php';

                                            $stmt = mysqli_query($conn, "SELECT * FROM carts WHERE cust_id='$customerID' AND sparepart_id != '' AND status='on cart'");

                                            $rowIndex = 1;

                                            while($data = mysqli_fetch_assoc($stmt)){
                                        ?>
                                                <tr>
                                                    <td><input type="checkbox" name="getcheckbox2[]" class="form-check-input" value="<?php echo $data['cart_id']; ?>"></td>
                                                    <td><?php echo $data['product']; ?></td>
                                                    <td><img src="db/<?php $color = $data['color'];

                                                    if ($color != '') {
                                                        $stmt64 = mysqli_query($conn, "SELECT * FROM paints WHERE paint_color='$color' AND status=''");
                                                        while($data321 = mysqli_fetch_assoc($stmt64)){
                                                            echo $data321['img'];
                                                        }
                                                    }else {
                                                        echo $data['img'];
                                                    }
                                                    ?>" style="width: 80px; height: 80px;" alt="Car Image"></td>
                                                    <td>&#8369; <span class="computedpriceValue"><?php echo number_format($data['price'], 2); ?></span></td>
                                                    <td class="computedpriceValue1">&#8369; <?php echo number_format($data['quantity'] * $data['price'], 2); ?></td>
                                                    <td class="d-grid" style="place-items:center;justify-content:center">
                                                        <button class="quantity-button btn btn-light" id="plusButton<?php echo $rowIndex; ?>">+</button>
                                                        <input class="quantity-input form-control" style="width:50px" type="number" id="carQuantity<?php echo $rowIndex; ?>" value="<?php echo $data['quantity']; ?>" min="1">
                                                        <button class="quantity-button btn btn-light" id="minusButton<?php echo $rowIndex; ?>">-</button>
                                                        <button class="btn btn-primary confirmQuantity" onclick="addsquantity(this.value, '<?php echo $data['sparepart_id']; ?>')" value="<?php echo $rowIndex; ?>" id="confirmQuantity<?php echo $rowIndex; ?>"><i class="fas fa-check"></i></button>
                                                    </td>
                                                    <td>
                                                        <!-- <button class="btn btn-info" data-value-1="<?php echo $data['details']; ?>" data-value-2="db/<?php $carColor = $data['color']; $stmt11 = mysqli_query($conn, "SELECT img FROM paints WHERE paint_color='$carColor' AND status='' "); while($data11 = mysqli_fetch_assoc($stmt11)){ echo $data11['img'];}?>" 
                                                            onclick="prevCar(
                                                            '<?php echo $data['cart_id']; ?>',
                                                            '<?php echo $data['img']; ?>',
                                                            '<?php echo $data['product']; ?>',
                                                            '<?php echo $data['name']; ?>',
                                                            '<?php echo $data['model']; ?>',
                                                            '<?php echo $data['engine']; ?>',
                                                            '<?php echo number_format($data['quantity'] * $data['price'], 2); ?>',
                                                            '<?php echo $data['color']; ?>',
                                                            '<?php echo $data['quantity']; ?>',
                                                            '<?php echo $data['leftQuantity']; ?>',
                                                            this.getAttribute('data-value-1'),
                                                            this.getAttribute('data-value-2')
                                                            )"><i class="fas fa-eye"></i></button> -->
                                                        <button class="btn btn-danger" onclick="archiveCart(
                                                            '<?php echo $data['cart_id']; ?>',
                                                            '<?php echo $data['cust_id']; ?>',
                                                            '<?php echo $data['product']; ?>',
                                                            '<?php echo $data['name']; ?>',
                                                            '<?php echo $data['model']; ?>',
                                                            '<?php echo $data['engine']; ?>',
                                                            '<?php echo $data['price']; ?>',
                                                            '<?php echo $data['color']; ?>',
                                                            '<?php echo $data['quantity']; ?>',
                                                            '<?php echo $data['status']; ?>'
                                                            )"><i class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            <?php
                                                $rowIndex++;
                                                }
                                            ?>


                                            <!-- TOTAL PRICE -->
                                            <tr>
                                                <td colspan="4" class="bg-primary" style="opacity:.8;color:white;font-weight:bold;font-size:15px;">SPAREPART/S</td>
                                                <td class="bg-primary" style="color:white;font-weight:bold;font-size:15px;">TOTAL PRICE: </td>
                                                <td class="bg-primary" colspan="2" style="color:white;font-weight:bold;font-size:15px;">&#8369; <span id="totalPrice1">0.00</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" onclick="placeOrder('sparepart', '<?php if(isset($_SESSION['cust_id'])){echo $_SESSION['cust_id'];} ?>', document.getElementById('totalPrice1').innerText.replace(/,/g, ''))" <?php if(isset($_SESSION['userStatus'])){ if ($_SESSION['userStatus'] === 'Pending') { echo 'disabled'; }} ?>>Place order</button>
                                    </div>
                                    
                                        
                                </div><!-- end card-body -->
                            </div> <!-- end card-->
                        </div><!-- end col -->
                    </div><!-- end row -->

<!-- Modal -->
<div class="modal fade" id="prevModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Product Preview</h1>
            <button type="button" class="btn-close dismissBtn" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <input type="hidden" id="cart_id">
                    <div class="carForm row">
                        <div class="formImg col-md-6">
                            <img src="" id="carImagePrev" alt="Product Image">
                        </div>
                        <div class="formInput col-md-6">
                            <div class="row">
                                <div class="col-md-12 preHide">
                                    <label for="name" id="carnamee" class="mainLabel form-label">Name</label>
                                    <h4 class="mainDetails" id="carName">Null</h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="name" class="mainLabel form-label">Product</label>
                                    <h4 class="mainDetails" id="carType">Null</h4>
                                </div>
                                <div class="col-md-6 preHide">
                                    <label for="name" id="carmodell" class="mainLabel form-label">Model</label>
                                    <h4 class="mainDetails" id="carModel">Null</h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6 preHide">
                                    <label for="name" class="mainLabel form-label" id="carenginee">Car Engine</label>
                                    <h4 class="mainDetails" id="carEngine">Null</h4>
                                </div>
                                <div class="col-md-6">
                                    <label for="name" class="mainLabel form-label">Price</label>
                                    <h4 class="mainDetails">&#8369; <span id="carPrice"></span></h4>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <br>
                                    <button class="btn btn-secondary"  id="prodDetails" data-bs-toggle="modal" data-bs-target="#showpartDetails2">Show Description</button>
                                </div>
                                <div class="col-md-6 preHide">
                                    <label for="name" class="mainLabel form-label">Select Paint Color</label>
                                    <select class="form-select" name="color" id="carColor">
                                        
                                            <?php
                                                include 'db/connection.php';
                                                $stmtttt = mysqli_query($conn, "SELECT * FROM paints WHERE status='' ");
                                                while($data = mysqli_fetch_assoc($stmtttt)){
                                            ?>
                                                <option value="<?php echo $data['paint_color']; ?>"><?php echo $data['paint_color']; ?></option>
                                            <?php
                                                }
                                            ?>

                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <!-- <label for="name" class="mainLabel form-label">Quantity</label>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <button class="quantity-button btn btn-light" id="minusButton">-</button>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="quantity-input form-control form-control" type="number" id="carQuantity" value="1" min="1">
                                        </div>
                                        <div class="col-md-3">
                                            <button class="quantity-button btn btn-light" id="plusButton">+</button>
                                        </div>
                                    </div>
                                    <label for="name" class="mainLabel form-label float-end" id="availableQuantity"></label> -->


                                    
                                </div>
                            </div>
                            <div class="row">
                                    <!-- <label for="name" class="mainLabel form-label">Example Color</label>
                                    <img src="sampleColor" alt="ExampleColor"> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button><!-- Assuming you have a PHP variable $userStatus that contains the user's status -->
                    <button type="button" id="addCartBtn" onclick="saveToCart()" class="btn btn-primary" <?php if ($_SESSION['userStatus'] === 'Pending') { echo 'disabled'; } ?>>Save Changes</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade zoomIn" id="showpartDetails2" tabindex="-1" aria-labelledby="firstModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Description</h5>
                <button type="button" class="btn-close dismissBtn" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <textarea class="form-control" id="sdetails2" style="resize:none;overflow:auto" cols="30" rows="10" disabled></textarea>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#prevModal">BACK</button>
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

        document.addEventListener('DOMContentLoaded', function () {
            // Add event listener to all checkboxes with name 'getcheckbox[]'
            var checkboxes = document.querySelectorAll('input[name="getcheckbox[]"]');
            var checkboxes1 = document.querySelectorAll('input[name="getcheckbox2[]"]');

            checkboxes.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    updateTotalPrice();
                });
            });
            checkboxes1.forEach(function (checkbox) {
                checkbox.addEventListener('change', function () {
                    updateTotalPrice1();
                }); 
            });

            // Function to update total price based on checked checkboxes
            function updateTotalPrice() {
                var totalPrice = 0;

                // Loop through each checked checkbox
                checkboxes.forEach(function (checkbox) {
                    if (checkbox.checked) {
                        // Get the computed price value in the same row
                        var computedPriceElement = checkbox.closest('tr').querySelector('.computedpriceValue');
                        
                        // Remove currency symbol and commas, then parse as a float
                        var price = parseFloat(computedPriceElement.innerText.replace(/[^\d.]/g, ''));
                        
                        // Add to total price
                        totalPrice += price;
                    }
                });

                // Update the total price in the 'totalPrice' span
                document.getElementById('totalPrice').innerText = numberWithCommas(totalPrice.toFixed(2));
            }

            // Function to update total price based on checked checkboxes
            function updateTotalPrice1() {
                var totalPrice = 0;

                // Loop through each checked checkbox
                checkboxes1.forEach(function (checkbox) {
                    if (checkbox.checked) {
                        // Get the computed price value in the same row
                        var computedPriceElement = checkbox.closest('tr').querySelector('.computedpriceValue1');
                        
                        // Remove currency symbol and commas, then parse as a float
                        var price = parseFloat(computedPriceElement.innerText.replace(/[^\d.]/g, ''));
                        
                        // Add to total price
                        totalPrice += price;
                    }
                });

                // Update the total price in the 'totalPrice' span
                document.getElementById('totalPrice1').innerText = numberWithCommas(totalPrice.toFixed(2));
            }

            // Function to add commas to a number
            function numberWithCommas(number) {
                return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            }
        });



        // Wait for the DOM to be ready
        // document.addEventListener('DOMContentLoaded', function () {
        //     // Calculate and update total price
        //     updateTotalPrice();
        //     updateTotalPrice1();

        //     // Function to update total price
        //     function updateTotalPrice() {
        //         var totalPrice = 0;

        //         // Loop through each row with class "computedpriceValue"
        //         var computedPriceElements = document.querySelectorAll('.computedpriceValue');
        //         computedPriceElements.forEach(function (element) {
        //             // Remove the currency symbol and commas, then parse the inner text as a float and add to totalPrice
        //             totalPrice += parseFloat(element.innerText.replace(/[^\d.]/g, ''));
        //         });

        //         // Update the total price in the element with id "totalPrice1"
        //         document.getElementById('totalPrice').innerText = totalPrice.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        //     }

        //     // Attach an event listener to quantity input to recalculate total when quantity changes
        //     var quantityInputs = document.querySelectorAll('.quantity-input');
        //     quantityInputs.forEach(function (input) {
        //         input.addEventListener('input', updateTotalPrice);
        //     });
        //     // Function to update total price
        //     function updateTotalPrice1() {
        //         var totalPrice = 0;

        //         // Loop through each row with class "computedpriceValue"
        //         var computedPriceElements = document.querySelectorAll('.computedpriceValue1');
        //         computedPriceElements.forEach(function (element) {
        //             // Remove the currency symbol and commas, then parse the inner text as a float and add to totalPrice
        //             totalPrice += parseFloat(element.innerText.replace(/[^\d.]/g, ''));
        //         });

        //         // Update the total price in the element with id "totalPrice1"
        //         document.getElementById('totalPrice1').innerText = totalPrice.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
        //     }

        //     // Attach an event listener to quantity input to recalculate total when quantity changes
        //     var quantityInputs = document.querySelectorAll('.quantity-input');
        //     quantityInputs.forEach(function (input) {
        //         input.addEventListener('input', updateTotalPrice);
        //     });

            
        // });


        $(document).ready(function() {
            var img = $('#carImagePrev');
            var color = $('#carColor');

            color.on('change', function(event) {
                event.preventDefault();

                var selectedColor = color.val();

                $.ajax({
                url: 'db/changeCarColor.php',
                method: 'GET',
                data: { color: selectedColor },
                dataType: 'json',
                success: function(response) {
                    if (response.color === selectedColor) {
                    img.attr('src', response.imgSrc);
                    } else {
                    img.attr('alt', 'No Available Example Color');
                    }
                },
                error: function() {
                    // Handle error here
                }
                });
            });

            $('#prodDetails').click(function (){
                $('#sdetails2').val(this.value);
            });
        });


        for (let i = 1; i <= <?php echo $rowIndex; ?>; i++) {
            const minusButton = document.getElementById('minusButton' + i);
            const plusButton = document.getElementById('plusButton' + i);
            const carQuantity = document.getElementById('carQuantity' + i);

            minusButton.addEventListener('click', () => {
                decreaseQuantity(carQuantity);
                $('#confirmQuantity' + i).css('visibility', 'visible');
            });

            plusButton.addEventListener('click', () => {
                increaseQuantity(carQuantity);
                $('#confirmQuantity' + i).css('visibility', 'visible');
            });
        }

        function decreaseQuantity(input) {
            let quantity = parseInt(input.value);
            if (quantity > 1) {
                quantity--;
            }
            input.value = quantity;
        }

        function increaseQuantity(input) {
            let quantity = parseInt(input.value);
            quantity++;
            input.value = quantity;
        }

        function addsquantity(i, sparepart_id){
            var button = document.getElementById(('confirmQuantity' + i));
            var quantity = document.getElementById(('carQuantity' + i)).value;
            var valid = true;

            if(quantity == 0){
                valid = false;
                alert("No Quantity");
            }
            
            if (valid) {
                var form_data = {
                        sparepart_id : sparepart_id,
                        quantity : quantity
                    }

                $.ajax({
                    url : "db/ajaxsparepartQuantityUpdate.php",
                    type : "POST",
                    data : form_data,
                    dataType: "json",
                    success: function(response){
                        if(response['valid'] == false){
                            alert(response['msg']);
                        }else{
                            location.reload();
                        }  
                    }
                });
            }
        }
        
        function prevCar(cart_id, img, product, name, model, engine, price, color, quantity, leftQuantity, details, imageColor){
            var cart_id = cart_id;
            var img = "db/" + img;
            var product = product;
            var name = name;
            var model = model;
            var engine = engine;
            var price = price;
            var color = color;
            var quantity = quantity;
            var leftQuantity = leftQuantity + " available";
            var details = details.replace(/\n/g, '<br>');

            var formattedPrice = price.toLocaleString('en-US', {
                style: 'currency',
                currency: 'USD',
                minimumFractionDigits: 2
            });

            $("#cart_id").val(cart_id);
            $("#carType").text(product);
            $("#carName").text(name);
            $("#carModel").text(model);
            $("#carEngine").text(engine);
            $("#carPrice").text(formattedPrice);
            if (color == "") {
                $('#carColor').val("");
                $('#carColor').css("display", "none");
                // $(".preHide").css("display", "none");
                // $("#carQuantity").css("display", "block");
                // $("#plusButton").css("display", "block");
                // $("#minusButton").css("display", "block");

            } else {
                $('#carColor').val(color);
                $('#carColor').css("display", "block");
                // $(".preHide").css("display", "block");
                // $("#carQuantity").css("display", "none");
                // $("#plusButton").css("display", "none");
                // $("#minusButton").css("display", "none");
            }
            // $("#carQuantity").val(quantity);
            $("#availableQuantity").text(leftQuantity);
            $("#prodDetails").val(details.replace(/<br>/g, '\n'));

            if (imageColor =="db/") {
                $("#carImagePrev").attr("src", img);
            }else {
                $("#carImagePrev").attr("src", imageColor);
            }

            $("#prevModal").modal("show");
        }

        
        function saveToCart(){
                var valid = true;
                var cart_id = $("#cart_id").val();
                var color = $("#carColor").val();
                // var quantity = $("#carQuantity").val();
                var quantity = 1;
                
                if(cart_id == ""){
                    valid = false;
                    alert("Cart ID empty");
                }
                
                if(quantity == 0){
                    valid = false;
                    alert("No Quantity");
                }


                if(valid){
                    if(confirm('Confirm Changes?')){
                        var form_data = {
                            cart_id : cart_id,
                            color : color,
                            quantity : quantity
                        }

                        $.ajax({
                            url : "db/cartUpdate.php",
                            type : "POST",
                            data : form_data,
                            dataType: "json",
                            beforeSend: function () {
                                $('.dismissBtn').click();
                            },
                            success: function(response){
                                if(response['valid'] == false){
                                    alert(response['msg']);
                                }else{
                                    $('.messageText').text('CHANGED!'); // Change the text
                                    $('#successModal').modal('show');

                                    // Close successModal after 2 seconds and trigger redirection
                                    setTimeout(function () {
                                        $('#successModal').modal('hide');
								        location.reload();
                                    },1000);
                                }        
                            }
                        });

                }else {
                    // window.location.href="customer-car.php";
                }}

        }
        
        function placeOrder(order, cust_id, totalprice){
            var valid = true;
            var cust_id = cust_id;
            var name = '<?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>';
            var totalprice = totalprice;
            
            // if (totalprice == "0.00") {
            //     valid = false;
            //     alert("No Selected Product");
            // }
            
            var checkedItems = [];
            
            if (order == "car") {
                // Find all checked checkboxes with name "getcheckbox[]"
                var checkedCheckboxes = document.querySelectorAll('input[name="getcheckbox[]"]:checked');
                
                // Loop through checked checkboxes and add their values to the array
                checkedCheckboxes.forEach(function (checkbox) {
                    checkedItems.push(checkbox.value);
                });

                if (checkedItems.length === 0) {
                    valid = false;
                    alert("No Selected Car/s");
                }
            }else if(order == "sparepart"){
                // Find all checked checkboxes with name "getcheckbox[]"
                var checkedCheckboxes = document.querySelectorAll('input[name="getcheckbox2[]"]:checked');
                
                // Loop through checked checkboxes and add their values to the array
                checkedCheckboxes.forEach(function (checkbox) {
                    checkedItems.push(checkbox.value);
                });

                if (checkedItems.length === 0) {
                    valid = false;
                    alert("No Selected Sparepart/s");
                }
            }else{
                $('#errormessageText').text('Error Performing Order!'); // Change the text
                $('#errorModal').modal('show');
            }


            if (valid) {
                if (confirm("Is it confirmed that you want to submit the selected product?")) {
                    var form_data = {
                        cust_id : cust_id,
                        order : order,
                        name : name,
                        totalprice : totalprice,
                        checkedItems: checkedItems  // Add checkedItems to the form data
                    }
                    
                    console.log(form_data);

                    $.ajax({
                        url : "db/transactionAdd.php",
                        type : "POST",
                        data : form_data,
                        dataType: "json",
                        beforeSend: function () {
                            $('#loadingModal').modal('show');
                            $('.dismissBtn').click();
                        },
                        success: function(response){
                            if(response['valid'] == false){
                                $('#loadingModal').modal('hide');
                                $('#errormessageText').text(response['msg']); // Change the text
                                $('#errorModal').modal('show');

                                // Close errorModal after 2 seconds and trigger redirection
                                setTimeout(function () {
                                    $('#errorModal').modal('hide');
								    location.reload();
                                }, 3000);
                            }else{
                                $('.messageText').text('YOUR ORDER WAS PLACED!'); // Change the text
                                $('#successModal').modal('show');

                                // Close successModal after 2 seconds and trigger redirection
                                setTimeout(function () {
                                    $('#successModal').modal('hide');
                                    $('#loadingModal').modal('hide');
								    location.reload();
                                },1000);
                            }
                            $('#loadingModal').modal('hide');
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert("Error: " + errorThrown);
                            $('#loadingModal').modal('hide'); // Hide the modal on error
                        },
                        complete: function () {
                            $('#loadingModal').modal('hide');
                        }
                    });
                }else{
                    
                }
            }
        }

        
        
    

        function archiveCart(cart_id, cust_id, product, name, model, engine, price, color, quantity, status){
            var date = new Date().toLocaleDateString();

            if (confirm("Are you sure you want to remove this Product?")) {
                var form_data = {
                    cart_id : cart_id,
                    cust_id : cust_id,
                    product : product,
                    name : name,
                    model : model,
                    engine : engine,
                    price : price,
                    color : color,
                    quantity : quantity,
                    status : status
                }

                $.ajax({
                    url : "db/cartDelete.php",
                    type : "POST",
                    data : form_data,
                    dataType: "json",
                success: function(response){
                    if(response['valid']==false){
                    alert(response['msg']);
                    }else{
                        // alert("Cart Information Removed!");
                        location.reload();
                    }
                }
                });
                }else {
                    
                }
        }

        
    </script>
</body>

</html>