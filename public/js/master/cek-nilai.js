/*
--------------------------------
Ajax Contact Form
--------------------------------
+ https://github.com/mehedidb/Ajax_Contact_Form
+ A Simple Ajax Contact Form developed in PHP with HTML5 Form validation.
+ Has a fallback in jQuery for browsers that do not support HTML5 form validation.
+ version 1.0.1
+ Copyright 2016 Mehedi Hasan Nahid
+ Licensed under the MIT license
+ https://github.com/mehedidb/Ajax_Contact_Form
*/

(function ($, window, document, undefined) {
    'use strict';

    var $form = $('#loginuser-form');

    $form.submit(function (e) {
        // remove the error class
        $('.form-group').removeClass('has-error');
        $('.help-block').remove();

        // get the form data
        var formData = {
            'nik' : $('input[name="form-nik"]').val(),
            'password' : $('input[name="form-password"]').val(), 
        };
        console.log("FORM DATa", formData)
        // process the form
        $.ajax({
            type : 'POST',
            url  : '/akun',
            data : formData,
            dataType : 'json',
            encode : true,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        }).done(function (data) {
            // handle errors
            if (!data.success) {
                console.log("data", data)
                // if (data.errors.name) {
                //     $('#name-field').addClass('has-error');
                //     $('#name-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.name + '</span>');
                // }

                // if (data.errors.email) {
                //     $('#email-field').addClass('has-error');
                //     $('#email-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.email + '</span>');
                // }

                // if (data.errors.subject) {
                //     $('#subject-field').addClass('has-error');
                //     $('#subject-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.subject + '</span>');
                // }

                // if (data.errors.message) {
                //     $('#message-field').addClass('has-error');
                //     $('#message-field').find('.col-lg-10').append('<span class="help-block">' + data.errors.message + '</span>');
                // }
            } else {
                // display success message
                $form.html('<div class="alert alert-success">' + data.message + '</div>');
            }
        }).fail(function (data) {
            // for debug
            console.log(data)
        });

        e.preventDefault();
    });
}(jQuery, window, document));
