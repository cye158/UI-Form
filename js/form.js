
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
            message: 'Please enter your first name (eg. John)'
          }
        }
      },
      last_name: {
        validators: {
          stringLength: {
            min: 2,
          },
          notEmpty: {
            message: 'Please enter your last name (eg. Cena)'
          }
        }
      },
      gender: {
        validators: {
          stringLength: {
            min: 0
          },
        }
      },
      education: {
        validators: {
          stringLength: {
            min: 0,
          },
        }
      },
      phone: {
        validators: {
          notEmpty: {
            message: 'Please enter your phone number'
          },
          phone: {
            country: 'US',
            message: 'Please enter a valid US phone number with area code (eg. (555)444-3333)'
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: 'Please enter your email address'
          },
          emailAddress: {
            message: 'Please enter a valid email address (eg. mail@domain.com)'
          }
        }
      },
      address: {
        validators: {
          stringLength: {
            min: 8,
          },
          notEmpty: {
            message: 'Please enter the street address (eg. 1600 Holloway Avenue)'
          }
        }
      },
      city: {
        validators: {
          stringLength: {
            min: 4,
          },
          notEmpty: {
            message: 'Please enter the city (eg. San Francisco)'
          }
        }
      },
      state: {
        validators: {
          notEmpty: {
            message: 'Please select the state (eg. CA)'
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
            message: 'Please enter a valid zip code (eg. 94132)'
          }
        }
      },
      issue_date: {
        validators: {
          notEmpty: {
            message: 'Please enter today\'s date'
          },
          date: {
            format: 'DD/MM/YYYY',
            message: 'The value is not a valid date (eg. DD/MM/YYYY)'
          }
        }
      },
      issue_type: {
        validators: {
          notEmpty: {
            message: 'Please select a category of the issue (eg. Broken pipe)'
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


  /*.on('success.form.bv', function(e) {
    $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
    $('#form').data('bootstrapValidator').resetForm(true);

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

  });*/

    $('#clear').click( function () {
      $('#form').data('bootstrapValidator').resetForm(true);
    });


});

function readURL(input) {
   if (input.files && input.files[0]) {
       var reader = new FileReader();

       reader.onload = function (e) {
           $('#image')
               .attr('src', e.target.result)
               .width(150)
               .height(200);
       };

       reader.readAsDataURL(input.files[0]);
   }
}
