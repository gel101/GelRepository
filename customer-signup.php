<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up | Hideout Garage</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- App favicon -->
    <link rel="shortcut icon" href="img/favicon.ico">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.lordicon.com/libs/frhvbuzj/lord-icon-2.0.2.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<style>
		/* *{
			border: 1px solid red;
		} */  

		/* Disable number input arrows */
		input[type="number"] {
			-moz-appearance: textfield; 
		}

		input[type="number"]::-webkit-inner-spin-button,
		input[type="number"]::-webkit-outer-spin-button {
			-webkit-appearance: none; 
			margin: 0; 
		}
		
        body{
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
        }

        .password-input-container {
            position: relative;
        }

        .password-input-container .toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .password-input-container .form-control {
            padding-right: 40px; /* Adjust the padding to accommodate the icon */
        }
	</style>

</head>
<body>

<button id="errorButton" style="display: none;" data-toggle="modal" data-target="#errorModal"></button>
<button id="successButton" style="display: none;" data-toggle="modal" data-target="#successModal"></button>

<div id="successModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon 
                        src="https://cdn.lordicon.com/oqdmuxru.json"
                        trigger="loop"
                        colors="primary:#30e849,secondary:#08a88a"
                        style="width:250px;height:250px">
                    </lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4 class="messageText">Account Successfully Created!</h4>
                    </div>
                    <div class="row">
                        <div class="center">
                            <!-- <button id="confirmAction" class="btn btn-primary">Yes</button> -->
                            <!-- <button class="btn btn-danger" data-bs-dismiss="modal">No</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- removeNotificationModal -->
<div id="errorModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/wdqztrtx.json" trigger="loop" colors="primary:#e83a30" style="width:100px;height:150px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4 id="errorText"></h4>
                        <p class="text-muted mx-4 mb-0">Please Try Again.</p>
                    </div>
                </div>
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-lg btn-light" data-dismiss="modal">CLOSE</button>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


	<div class="content-wrapper">
		<img class="wave" src="img/wave.png">
		<h1>Sign up to <span>Hideout</span><span style="color: red;"> Garage</span></h1>
		<div class="container">
			<div class="img"><!-- style="transform: scaleX(-1);" -->
				<img class="mainImageDisplay" style="transform: scaleX(-1);" src="img/signup.svg">
				</div>

				<div class="signupForm">
					<form>
						<img src="img/avatar.svg">
						<h2 class="title">sign up</h2>
						<div class="formControl">
							<!-- VALID ID -->
							<hr>
							<br>
							<div class="row">
								<a style="color: blue; text-align: right; display: block;" href="img/exampleValidID.jpg" target="_blank" rel="noopener noreferrer">Image Example</a>
							</div>
							<br>
							<div class="input-div one">
								<div class="i"> 
										<i class="fas fa-file"></i>
								</div>
								<div class="div">
										<h5 style="color:tomato;top: -18px;font-size:13px" id="file_err"></h5>
										<h5 style="top: -5px;font-size: 15px;" class="labels">Personal Image With Valid ID</h5>
										<input type="file" name="validID" id="validID" class="input" required>
								</div>
							</div>
							<div class="input-div one">
								<div class="i">
										<i class="fas fa-user"></i>
								</div>
								<div class="div">
										<h5 class="labels">First Name<span style="color:tomato;" id="fname_err"></span></h5>
										<input type="text" name="fname" id="fname" class="input" required>
								</div>
							</div>
							<div class="input-div one">
								<div class="i"> 
										<i class="fas fa-user"></i>
								</div>
								<div class="div">
										<h5 class="labels">Last Name<span style="color:tomato;" id="lname_err"></span></h5>
										<input type="text" name="lname" id="lname" class="input" required>
								</div>
							</div>
							<div class="input-div one">
								<div class="i bdate">
										<i class="fas fa-birthday-cake"></i>
								</div>
								<div class="div">
										<h5 style="top: -5px;font-size: 15px;" class="labels">Birthdate<span style="color:tomato;" id="date_err"></span></h5>
										<input type="date" name="birthdate" id="birthdate" class="input" required>
								</div>
							</div>
							<div class="input-div one">
								<div class="i">
										<i class="fas fa-address-card"></i>
								</div>
								<div class="div">
										<h5 class="labels">Address<span style="color:tomato;" id="address_err"></span></h5>
										<input type="text" name="address" id="address" class="input" required>
								</div>
							</div>
							<div class="input-div one">
								<div class="i"> 
										<i class="fas fa-phone"></i>
								</div>
								<div class="div">
										<h5 class="labels">Phone Number <span style="color:tomato;" id="infoText" class="text-danger"></span></h5>
										<input type="number" name="pnum" id="pnum" class="input" required oninput="validateNumber(this)">
								</div>
							</div>
							<div class="input-div one">
								<div class="i">
										<i class="fas fa-at"></i>
								</div>
								<div class="div">
										<h5 class="labels">Email <span style="color:tomato;" id="email_err"></span></h5>
										<input type="email" name="email" id="email" class="input" required>
								</div>
							</div>
							<div class="input-div one">
								<div class="i"> 
										<i class="fas fa-envelope"></i>
								</div>
								<div class="div">
										<h5 class="labels">Create Username<span style="color:tomato;" id="uname_err"></span></h5>
										<input type="text" name="uname" id="uname" class="input" required>
								</div>
							</div>
							<div class="input-div one">
								<div class="i">
										<i class="fas fa-lock"></i>
								</div>
								<div class="div password-input-container">
										<h5>Create Password<span style="color:tomato;" id="prepass_err"></span></h5>
										<input type="password" name="prepass" id="prepass" class="input" required>
                    					<span class="toggle-password" onclick="togglePasswordVisibility()"><i class="fas fa-eye"></i></span>
								</div>
							</div>
							<div class="input-div one">
								<div class="i">
										<i class="fas fa-lock"></i>
								</div>
								<div class="div">
										<h5>Confirm Password<span style="color:tomato;" id="pass_err"></span></h5>
										<input type="password" name="pass" id="pass" class="input" required>
								</div>
							</div>
						</div>
							<input type="checkbox" class="form-check-input" id="myCheckbox">
							<label class="form-check-label" for="myCheckbox">I Agree to the Terms and Privacy of Hideout Garage.</label> <!-- <a href="customer-termsConditions.html" target="_blank">Terms and Privacy</a> -->
						<div class="text-left">
							<span style="color:tomato" id="err_check"></span>
						</div>
							<br>
							<button type="button" class="newBtn" name="buhataccount" id="myButton">Sign Up</button>
							<h5>Already have an account? <a id="signUpLink" class="" href="customer-login.php"> Log in here!</a></h5>
						
						<br>
						<br>
					</form>
				</div>
			</div>

	</div>


	
    <script src="js/jquery-3.6.3.min.js"></script>
	<script>

		function togglePasswordVisibility() {
			var passwordInput = document.getElementById("prepass");
			var toggleIcon = document.querySelector(".toggle-password i");

			if (passwordInput.type === "password") {
				passwordInput.type = "text";
				toggleIcon.classList.remove("fa-eye");
				toggleIcon.classList.add("fa-eye-slash");
			} else {
				passwordInput.type = "password";
				toggleIcon.classList.remove("fa-eye-slash");
				toggleIcon.classList.add("fa-eye");
			}
		}
		
		$(document).ready(function() {
			// Wait for the document to be ready
			$('.mainImageDisplay').addClass('show');  // Add the 'show' class to trigger the transition
		});
		
		$('#myButton').prop('disabled', true);

		$(document).ready(function(){
    		$('#myCheckbox').prop('checked', false);

			// Function to handle checkbox change
			$('#myCheckbox').change(function () {
				// Check if the checkbox is checked
				if ($(this).prop('checked')) {
					// If checked, enable the button
					$('#err_check').text("");
					$('#myButton').prop('disabled', false);
				} else {
					$('#err_check').text("*Required");
					// If not checked, disable the button
					$('#myButton').prop('disabled', true);
				}
			});

            $('#myButton').click(function (){
				var validID = $("#validID").prop("files")[0]; // Get the file object
                var fname = $("#fname").val();
                var lname = $("#lname").val();
                var birthdate = $("#birthdate").val();
                var pnum = $("#pnum").val();
                var address = $("#address").val();
                var email = $("#email").val();
                var uname = $("#uname").val();
                var pass = $("#pass").val();
                var prepass = $("#prepass").val();
                var valid = true;
                

                if(typeof validID == "undefined"){
                    valid = false;
					$("#file_err").html(" *Upload Image!");
                }
				
                if(fname == ""){
                    valid = false;
					$("#fname_err").html(" *First name Empty!");
                }
				
                if(lname == ""){
                    valid = false;
					$("#lname_err").html(" *Last name Empty!");
                }
				
                if(birthdate == ""){
                    valid = false;
					$("#date_err").html(" *Birthdate Empty!");
                }
				
                if(pnum == ""){
                    valid = false;
					$("#textInfo").html(" *Phone Number Empty!");
                }
				
                if(address == ""){
                    valid = false;
					$("#address_err").html(" *Address Empty!");
                }
				
                if(email == ""){
                    valid = false;
					$("#email_err").html(" *Email Empty!");
                }

                if(uname == ""){
                    valid = false;
					$("#uname_err").html(" *Username Empty!");
                }

                if(pass === prepass){
					// alert(" *Password do mot match!");
					$("#pass_err").html("");
                }else{
					$("#pass_err").html(" *Password do not match!");
                    valid = false;
				}


                if(valid){
					var form_data = new FormData(); // Create a new FormData object
					form_data.append("validID", validID);
					form_data.append("fname", fname);
					form_data.append("lname", lname);
					form_data.append("birthdate", birthdate);
					form_data.append("address", address);
					form_data.append("pnum", pnum);
					form_data.append("email", email);
					form_data.append("uname", uname);
					form_data.append("pass", pass);
					

					// Send the image data and other form data to PHP using AJAX
					$.ajax({
						url: "db/customerSignup.php",
						type: "POST",
						data: form_data,
						contentType: false,
						processData: false,
						success: function(response){
							var responseData = JSON.parse(response);
							if(responseData.valid == false){
								// alert(responseData.msg);
                                $('#errorText').text(responseData.msg);
                                $('#errorButton').click();
							} else {
								// alert(responseData.msg);
                                $('#successButton').click();

								// Close successModal after 2 seconds and trigger redirection
								setTimeout(function () {
									window.location.href = "customer-login.php";
								},1000);
							}
						}
					});
    
                }else{
				}
		    });


        });

		function validateNumber(input) {
			var infoText = document.getElementById('infoText');

			if (input.value.length !== 11) {
			infoText.textContent = '*Should be exactly 11 digits and starts with 09! Ex.(09104445556)';
			} else {
			infoText.textContent = '';
			}
		}

		document.addEventListener('DOMContentLoaded', function() {
			document.querySelectorAll('.labels').forEach(function(label) {
				label.style.top = '-5px';
				label.style.fontSize = '15px';
			});
		});

		const inputs = document.querySelectorAll(".input");
		var login = document.getElementById("signUpLink");
		var signup = document.getElementById("loginLink");
		var form1 = document.getElementsByClassName("loginForm");
		var form2 = document.getElementsByClassName("signupForm");


		function addcl(){
			let parent = this.parentNode.parentNode;
			parent.classList.add("focus");
		};

		function remcl(){
			let parent = this.parentNode.parentNode;
			if(this.value == ""){
				parent.classList.remove("focus");
			}
		};


		inputs.forEach(input => {
			input.addEventListener("focus", addcl);
			input.addEventListener("blur", remcl);
		});


		// function showform1(){
		// 	form1.style.display = "none";
		// 	// form2.classList.toggle("show");
		// 	// form1.classList.toggle("hide");
		// 	// form1.style.opacity = "0";
		// 	// form1.style.visibility = "none";
		// 	// form2.style.opacity = "1";
		// 	// form2.style.visibility = "visible";
		// };

		// function showform2(){
		// 	form2.classList.toggle("show");
		// 	form1.classList.toggle("hide");
		// };
		
	</script>
</body>
</html>
