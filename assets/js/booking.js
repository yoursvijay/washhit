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

    $('input').on('focusin', function() {
        $(this).parent().find('label').addClass('formLabelActive');
    });
    $('input').on('focusout', function() {
        if (!this.value) {
            $(this).parent().find('label').removeClass('formLabelActive');
        }
    });
    $('#datepicker').click(function() {
        $(this).parent().find('label').addClass('formLabelActive');
    });

    $('select').on('focusin', function() {
        $(this).parent().find('label').addClass('formLabelActive');
    });

    $('select').on('focusout', function() {
        if (!this.value) {
            $(this).parent().find('label').removeClass('formLabelActive');
        }
    });


    //Date
    var dateToday = new Date();

    $("#datepicker").datepicker({
        autoclose: false,
        todayHighlight: true,
        dateFormat: 'dd-mm-yyyy',
        orientation: "top center",
        changeMonth: true,
        changeYear: true,
        numberOfMonths: 3,
        startDate: dateToday,

        onSelect: function(selectedDate) {
            var option = this.id == "from" ? "minDate" : "maxDate",
                instance = $(this).data("datepicker"),
                date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
            dates.not(this).datepicker("option", option, date);
        }
    });
    $('#datepicker').datepicker('setDate', dateToday);



    $("#phonenumber,#pincode").on("keypress keyup blur", function(event) {
        $(this).val($(this).val().replace(/[^\d].+/, ""));
        if ((event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

    $("#basic-form").validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                pattern: /^[a-zA-Z," "]+$/
            },
            email: {
                required: true,
                email: true,
                pattern: /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}/
            },
            gender: {
                required: true
            },
            datepicker: {
                required: true
            },
            phonenumber: {
                required: true,
                number: true,
                phoneUS: false,
                minlength: 10,
                maxlength: 12
            },
            housenumber: {
                required: true,
                maxlength: 300,
            },
            address: {
                required: true,
                maxlength: 200
            },
            pincode: {
                number: true,
                minlength: 6,
                maxlength: 6
            }
        },
        messages: {
            name: {
                required: 'Enter  name',
                minlength: 'Name should contain minimum 3 letters',
                pattern: 'Only alphabets and spaces are allowed'
            },
            email: {
                required: 'Enter your e-mail id',
                pattern: 'Enter valid Email Id'
            },
            datepicker: {
                required: 'Select date'
            },
            phonenumber: {
                required: 'Enter your mobile number',
                minlength: 'Mobile number cannot be less than 10 digits',
                maxlength: 'Mobile number cannot be greater than 10 digits',
                number: 'Only digits are allowed'
            },
            address: {
                required: 'Enter your address',
                maxlength: 'Text more than 200 words is not allowed'
            },
            housenumber: {
                required: 'Enter housenumber',
                maxlength: 'enter valid house number',
                minlength: 'enter valid house number',
            },
        },
        submitHandler: function(form) {
            var form_data = $('#basic-form').serialize();
            $.ajax({

                url: "customerDetailsInsertion.php",
                type: "post",
                data: form_data,
                success: function(data, status) {
                    if (status == "success") {
                        $('#submitText').html("Your details are saved succesfully");
                        $('#submitText').addClass('successActive');
                        $('#submitText').fadeOut(2000);
                        $('#basic-form').trigger("reset");
                        $('.form-control').removeClass('valid');

                        //location.reload();
                    } else {
                        $('#submitText').html("Your details are not saved succesfully");
                        $('#submitText').addClass('errorActive');
                        $('#submitText').fadeOut(2000);
                    }

                }
            });
        }


    });

});