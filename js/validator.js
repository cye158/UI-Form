
$(document).ready(function() {
  $('#form').bootstrapValidator({
    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok-circle',
      invalid: 'glyphicon glyphicon-remove-circle',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      first_name: {
        validators: {
          stringLength: {
            min: 2,
          },
          notEmpty: {
            message: 'Please enter your first name'
          }
        }
      },
      last_name: {
        validators: {
          stringLength: {
            min: 2,
          },
          notEmpty: {
            message: 'Please enter your last name'
          }
        }
      },
      phone: {
        validators: {
          notEmpty: {
            message: 'Please enter your phone number'
          },
          phone: {
            country: 'US',
            message: 'Please enter a valid US phone number with area code'
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: 'Please enter your email address'
          },
          emailAddress: {
            message: 'Please enter a valid email address'
          }
        }
      },
      address: {
        validators: {
          stringLength: {
            min: 8,
          },
          notEmpty: {
            message: 'Please enter the street address'
          }
        }
      },
      city: {
        validators: {
          stringLength: {
            min: 4,
          },
          notEmpty: {
            message: 'Please enter the city'
          }
        }
      },
      state: {
        validators: {
          notEmpty: {
            message: 'Please select the state'
          }
        }
      },
      zip: {
        validators: {
          notEmpty: {
            message: 'Please enter the zip code'
          },
          zipCode: {
            country: 'US',
            message: 'Please enter a valid zip code'
          }
        }
      },
      issue_date: {
        validators: {
          date: {
            format: 'DD/MM/YYYY',
            message: 'The value is not a valid date'
          }
        }
      },
      phone: {
        validators: {
          notEmpty: {
            message: 'Please enter the day'
          },
          phone: {
            country: 'US',
            message: 'Please enter '
          }
        }
      },
      issue_type: {
        validators: {
          notEmpty: {
            message: 'Please select a category'
          }
        }
      },
      terms: {
        validators: {
          choice: {
            min: 1,
            max: 1,
            message: 'Please check that you have read and agree to the Terms and Conditions'
          }
        }
      },
    }
  })


  .on('success.form.bv', function(e) {
    $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
    $('#form').data('bootstrapValidator').resetForm();

    // Prevent form submission
    e.preventDefault();

    // Get the form instance
    var $form = $(e.target);

    // Get the BootstrapValidator instance
    var bv = $form.data('bootstrapValidator');

    // Use Ajax to submit form data
    $.post($form.attr('action'), $form.serialize(), function(result) {
      console.log(result);
    }, 'json');
  });


  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#blah')
        .attr('src', e.target.result)
        .width(150)
        .height(200);
      };

      reader.readAsDataURL(input.files[0]);
    }
  }

});
