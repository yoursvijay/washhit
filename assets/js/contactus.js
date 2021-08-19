$(document).ready(function() {
    //togglebutton
    $('#nav-icon').click(function() {
        $(this).toggleClass('open');
        $("#headerDropdown").toggleClass('headerDropdownActive');
    });
    $('#navbarToggler').click(function() {
        $(this).toggleClass('open');
    });
    //togglebutton

    $("#phoneNumber").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
    $("#customerForm").validate({
        rules: {
            customerName: {
                required: true,
                minlength: 3,
                pattern: /^[a-zA-Z," "]+$/
            },
            emailId: {
                required: true,
                email: true,
                pattern: /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/
            },
            phoneNumber: {
                required: true,
                number: true,
                phoneUS: false,
                minlength: 10,
                maxlength: 12
            },
            location: {
                maxlength: 200
            },
            message: {
                maxlength: 500
            }
        },
        messages: {
            customerName: {
                required: 'Enter  name',
                minlength: 'Name should contain minimum 3 letters',
                pattern: 'Only alphabets and spaces are allowed'
            },
            emailId: {
                required: 'Enter your e-mail id',
                pattern: 'Enter valid Email Id'
            },
            phoneNumber: {
                required: 'Enter your mobile number',
                minlength: 'Mobile number cannot be less than 10 digits',
                maxlength: 'Mobile number cannot be greater than 10 digits',
                number: 'Only digits are allowed'
            },
            location: {
                maxlength: 'Text more than 200 words is not allowed'
            },
            message: {
                maxlength: 'Text more than 500 words is not allowed'
            }

        },
        submitHandler: function(form) {
            var form_data = $('#customerForm').serialize();
            $.ajax({

                url: "customersRegistration.php",
                type: "post",
                data: form_data,
                success: function(data, status) {
                    if (status == "success") {
                        $('#submitText').html("Your details are saved succesfully");
                        $('#submitText').addClass('successActive');
                        $('#customerForm').trigger("reset");
                        $('#submitText').fadeOut(2000);
                        $('.inpuField').removeClass('valid');

                        //                                location.reload();
                    } else {
                        $('#submitText').html("Your details are not saved succesfully");
                        $('#submitText').fadeOut(2000);
                        $('#submitText').addClass('errorActive');
                    }

                }
            });
        }


    });

});