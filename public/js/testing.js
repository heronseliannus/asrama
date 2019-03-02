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

    var $form =  $('#contact-us-form');

    $form.submit(function (e) {
        // remove the error class
        // $('.form-group').removeClass('has-error');
        // $('.help-block').remove();

        // get the form data
        var formData = {
            'firstname' : $('#form-contact-name').val(),
            'email': $('#form-email').val(),
            'subject': $('#form-subject').val(),
            'message': $('#form-message').val()
        };
        console.log("FORM DATa", formData)
        // process the form
        $.ajax({
            type : 'POST',
            url  : '/testing',
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
                
            } else {
                // display success message
                $form.html('<div class="alert alert-success">' + data.message + '</div>');
            }
        }).fail(function (data) {
            // for debug
            console.log("failed", data)


        });

        e.preventDefault();
    });
}(jQuery, window, document));
