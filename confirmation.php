<?php
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$gender     = $_POST['gender'];
$education  = $_POST['education'];
$phone      = $_POST['phone'];
$email      = $_POST['email'];
$street     = $_POST['street'];
$city       = $_POST['city'];
$state      = $_POST['state'];
$zip        = $_POST['zip'];
$issue_date = $_POST['issue_date'];
$issue_type = $_POST['issue_type'];
$comment    = $_POST['comment'];
?>

<script>
var first_name  = "<?php echo $first_name; ?>";
var last_name   = "<?php echo $last_name; ?>";
var gender      = "<?php echo $gender; ?>";
var education   = "<?php echo $education; ?>";
var phone       = "<?php echo $phone; ?>";
var email       = "<?php echo $email; ?>";
var street      = "<?php echo $street; ?>";
var city        = "<?php echo $city; ?>";
var state       = "<?php echo $state; ?>";
var zip         = "<?php echo $zip; ?>";
var issue_date  = "<?php echo $issue_date; ?>";
var issue_type  = "<?php echo $issue_type; ?>";
var comment     = "<?php echo $comment; ?>";

var address     = street + city + state + zip;
</script>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![ENDif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![ENDif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![ENDif]-->
<!--[if gt IE 8]><!-->
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
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
</head>
<body>
<script>document.write(address);</script><br>
<script>document.write(issue_type);</script><br>
<?php echo $issue_type; ?>


  <!-- container -->
  <div class="container" style="min-width: 350px;">
    <div class="col-md-12">
      <h3 style="font-weight:bolder; font-size:25px; text-align:center;">Please Verify Your Submission</h3>

      <div class="col-md-12">
        <hr>
        <form class="form-horizontal" id="form">
          <!-- Form Name -->
          <div style="border: 4px solid #666; border-radius: 2px; padding: 7.5px;">
            <legend style="margin-top: 0px;">Personal Information <i class="glyphicon glyphicon-user"></i></legend>
            <fieldset>

              <!-- First Name -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">First Name:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $first_name; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Last Name -->
              <div class="col-md-6"	>
                <div class="form-group">
                  <label class="col-md-4 control-label">Last Name:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $last_name; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Select Gender -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Gender:</label>
                  <div class="col-md-7 selectContainer">
                    <div class="input-group">
                      <select disabled class="form-control selectpicker">
                        <option><?php echo $gender; ?></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Education -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Education:</label>
                  <div class="col-md-7 selectContainer">
                    <div class="input-group">
                      <select disabled class="form-control selectpicker">
                        <option><?php echo $education; ?></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Phone -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Phone #:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $phone; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Email -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">E-Mail:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $email; ?>">
                    </div>
                  </div>
                </div>
              </div>

            </fieldset>


            <legend style="margin-top: 10px;border-top: 2.5px solid grey;">Location of the Issue <i class="glyphicon glyphicon-map-marker"></i></legend>
            <fieldset>

              <!-- St Address -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Street Address:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $street; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <!-- City -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">City:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $city; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <!-- State -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">State:</label>
                  <div class="col-md-7 selectContainer">
                    <div class="input-group">
                      <select disabled class="form-control selectpicker">
                        <option><?php echo $state; ?></option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Zip -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Zip Code:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $zip; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Map -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Google Maps:</label>
                  <div class="col-md-7">
                    <div id="map"></div>
                    <script>
                    function initMap() {
                      var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 14,
                        center: {lat: 37.7219, lng: -122.4782}
                      });
                      var geocoder = new google.maps.Geocoder();
                      geocodeAddress(geocoder, map, address)
                    }

                    function geocodeAddress(geocoder, resultsMap, address) {
                      geocoder.geocode({'address': address}, function(results, status) {
                        if (status === 'OK') {
                          resultsMap.setCenter(results[0].geometry.location);
                          var marker = new google.maps.Marker({
                            map: resultsMap,
                            position: results[0].geometry.location
                          });
                        } else {
                          alert('Geocode was not successful for the following reason: ' + status);
                        }
                      });
                    }
                    </script>
                  </div>
                </div>
              </div>

            </fieldset>

            <legend style="margin-top: 10px;border-top: 2.5px solid grey;">Details about the Issue <i class="glyphicon glyphicon-pencil"></i></legend>
            <fieldset>

              <!-- Date -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Date:</label>
                  <div class="col-md-7 inputGroupContainer">
                    <div class="input-group">
                      <input class="form-control" disabled value="<?php echo $issue_date; ?>">
                    </div>
                  </div>
                </div>
              </div>

              <!-- Issue Type -->
              <div class="col-md-6">
                <div class="form-group">
                  <label class="col-md-4 control-label">Category of Issue:</label>
                  <div class="col-md-7 selectContainer">
                    <div class="input-group">
                      <select disabled class="form-control selectpicker">
                        <optio><?php echo $issue_type; ?></option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Comment -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Additional details: </label>
                    <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <textarea disabled class="form-control" disabled value="<?php echo $comment; ?>"></textarea>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Image -->
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="col-md-4 control-label">Upload Image: </label>
                    <div class="col-md-7 inputGroupContainer">
                      <div class="input-group">
                        <input disabled type="file" onchange="readURL(this);" />
                        <img id="issue_img" style="display: block;"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </fieldset>
            <hr style="margin-top: 5px; margin-bottom: 5px;">


            <div class="col-md-6">
              <div class="form-group">
                <label class="col-md-4 control-label" style="text-align:left;">Terms and Conditions:</label>
                <div class="col-md-7 inputGroupContainer">
                  <div class="input-group">
                    <input disabled value="Agreed" id="agree"> I have read and agree to the
                    <a href="terms.html" target="_blank" style="text-decoration: underline;">Terms and Conditions</a>.
                  </div>
                </div>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
    <!-- /.container -->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/form.js"></script>
    <!--script type="text/javascript" src="./js/maps.js"></script-->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwJMd3lV5AaJ0Qf5d10tp0H1eHnaOEskA&callback=initMap"
    async defer></script>

  </body>
  </html>
