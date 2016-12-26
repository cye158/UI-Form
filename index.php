<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![ENDif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![ENDif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![ENDif]-->
<!--[if gt IE 8]><!-->
<?php
if(isset($_FILES['image'])){
	$errors= array();
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

	$expensions= array("jpeg","jpg","png");

	if(in_array($file_ext,$expensions)=== false){
		$errors[]="extension not allowed, please choose a JPEG or PNG file.";
	}

	if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
	}

	if(empty($errors)==true){
		move_uploaded_file($file_tmp,"images/".$file_name);
		echo "Success";
	}else{
		print_r($errors);
	}
}
?>

<html class="no-js" lang="en">
<!--<![ENDif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		SFSU CS Department
		-
		CSC 642 Fall 2016 project:
		Form UI
		Clarence Y. Enriquez
		cye0105@mail.sfsu.edu
	</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/style.css" rel="stylesheet" type="text/css"/>

	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
</head>

<body>
	<!-- container -->
	<div class="container" style="min-width:350px; max-width:800px;">
		<div class="col-xs-12">
			<h3 style="font-weight:bolder; font-size:25px; text-align:center;">Please Record the Problem by Filling the Form Below</h3>

			<div class="col-xs-12">
				<hr style="margin-top: 5px; margin-bottom: 5px;">
				<form class="form-horizontal" action="confirmation.php" method="post" id="form" enctype="multipart/form-data">
					<!-- Form Name -->
					<div style="border: 4px solid #666; border-radius: 2px; padding: 7.5px;">
						<legend style="margin-top: 0px;">Personal Information <i class="glyphicon glyphicon-user"></i></legend>
						<fieldset>

							<!-- First Name -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">First Name:</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input  name="first_name" placeholder="First Name" class="form-control"  type="text">

										</div>
									</div>
								</div>
							</div>

							<!-- Last Name -->
							<div class="col-xs-12"	>
								<div class="form-group">
									<label class="col-lg-4 control-label">Last Name:</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input name="last_name" placeholder="Last Name" class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>

							<!-- Select Gender -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Gender:</label>
									<div class="col-lg-7 selectContainer">
										<div class="input-group">
											<select name="gender" class="form-control selectpicker">
												<option value="">Select your gender</option>
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<!-- Education -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Education:</label>
									<div class="col-lg-7 selectContainer">
										<div class="input-group">
											<select name="education" class="form-control selectpicker">
												<option value="">Select your highest education</option>
												<option value="GED">General Educational Development(GED)</option>
												<option value="High School Diploma">High School Diploma</option>
												<option value="Bachelor's Degree">Bachelor's Degree</option>
												<option value="Master's Degree">Master's Degree</option>
												<option value="Ph.D. Degree">Ph.D. Degree</option>``
												<option value="None">None</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<!-- Phone -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Phone #: *</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input name="phone" placeholder="(555)555-5555" class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>

							<!-- Email -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">E-Mail: *</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input name="email" placeholder="mail@domain.com" class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>

						</fieldset>


						<legend style="margin-top: 10px;border-top: 2.5px solid grey;">Location of the Issue <i class="glyphicon glyphicon-map-marker"></i></legend>
						<fieldset>

							<!-- St Address -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Street Address: *</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input name="street" placeholder="Street Address" class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>

							<!-- City -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">City: *</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input name="city" placeholder="City" class="form-control"  type="text">
										</div>
									</div>
								</div>
							</div>

							<!-- State -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">State: *</label>
									<div class="col-lg-7 selectContainer">
										<div class="input-group">
											<select name="state" class="form-control selectpicker">
												<option value="">Select the state</option>
												<option value="AL">Alabama</option>
												<option value="ak">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<!-- Zip -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Zip Code: *</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input name="zip" placeholder="Zip" class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>

						</fieldset>

						<legend style="margin-top: 10px;border-top: 2.5px solid grey;">Details about the Issue <i class="glyphicon glyphicon-pencil"></i></legend>
						<fieldset>

							<!-- Date -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Date: *</label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<input name="issue_date" placeholder="DD/MM/YYYY" class="form-control" type="text">
										</div>
									</div>
								</div>
							</div>

							<!-- Issue Type -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Problem: *</label>
									<div class="col-lg-7 selectContainer">
										<div class="input-group">
											<select name="issue_type" class="form-control selectpicker">
												<option value="">Select the problem category</option>
												<option value="Spillage">Spillage</option>
												<option value="Broken pipe">Broken pipe</option>
												<option value="Electric hazard">Electric hazard</option>
												<option value="Broken pathway">Broken pathway</option>
												<option value="Other">Other</option>
											</select>
										</div>
									</div>
								</div>
							</div>

							<!-- Comment -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Additional Details: </label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group">
											<textarea id="comment" class="form-control" name="comment" placeholder="Enter short summary about the problem (max 200 characters)."  maxlength="200"></textarea>
										</div>
									</div>
								</div>
							</div>

							<!-- Image -->
							<div class="col-xs-12">
								<div class="form-group">
									<label class="col-lg-4 control-label">Upload Image: </label>
									<div class="col-lg-7 inputGroupContainer">
										<div class="input-group image_wrapper">
											<input type='file' onchange="readURL(this);" />
											<img id="image" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
					<hr style="margin-top: 5px; margin-bottom: 5px;">


					<!-- Terms -->
					<div class="col-xs-12">
						<div class="form-group">
							<label class="col-lg-4 control-label">Terms and Conditions: *</label>
							<div class="col-lg-7 inputGroupContainer" style="padding-top: 7px;">
								<div class="input-group">
									<input type="checkbox" name="terms" value="check" id="agree"/> I have read and agree to the
									<a href="terms.html" target="_blank" style="text-decoration: underline;">Terms and Conditions</a>.
								</div>
							</div>
						</div>
					</div>

					<hr style="margin-top: 5px; margin-bottom: 5px;">

					<div class="col-xs-12">
						<div class="form-group">
							<label class="col-lg-4 control-label">Captcha: *</label>
							<div class="col-lg-7 inputGroupContainer captcha">
									<script>
										document.write('<h6>Type these characters in the box provided below (case sensitive*)</h6><br>');
										var randNum = Math.floor(Math.random() * 3) + 1 ;
										if (randNum == 1) {
											document.write('<img src="./img/c1.gif">');
											document.write('<input type="text" class="input-group" name="captchaOne" />');
										}
										if (randNum == 2) {
											document.write('<img src="./img/c2.gif">');
											document.write('<input type="text" class="input-group" name="captchaTwo" />');
										}
										if (randNum == 3) {
											document.write('<img src="./img/c3.gif">');
											document.write('<input type="text" class="input-group" name="captchaTwo" />');
										}
									</script>

								</div>
							</div>
						</div>

						<!-- Clear Button -->
						<div class="pull-right">
							<div class="col-xs-6" style="display:inline-block;">
								<div class="form-group">
									<div class="col-xs-12">
										<button type="reset" class="btn btn-default" id="clear">Clear Form</button>
									</div>
								</div>
							</div>

							<!-- Submit Button -->
							<div class="col-xs-6" style="display:inline-block;">
								<div class="form-group">
									<div class="col-xs-12">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</div>
							<div>

							</form>
						</div>
					</div>
				</div>
				<!-- /.container -->


				<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
				<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
				<script type="text/javascript" src="./js/form.js"></script>

			</body>
			</html>
