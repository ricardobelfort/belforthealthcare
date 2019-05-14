/*
--------------------------------
Simple PHP Contact Form
--------------------------------
+ https://github.com/pinceladasdaweb/Simple-PHP-Contact-Form
+ A Simple Contact Form developed in PHP with VanillaJS Form validation.
+ version 1.1
+ Copyright 2015 Pedro Rogerio
+ VanillaJS version developed by William Bruno <https://github.com/wbruno>
+ Licensed under the MIT license
+ https://github.com/pinceladasdaweb/Simple-PHP-Contact-Form
*/

(function ($, window, document, undefined) {
    'use strict';

    function hasFormValidation () {
        return (typeof document.createElement('input').checkValidity === 'function');
    };

    function addError (el) {
        return el.parent().addClass('has-error');
    };

    if (!hasFormValidation()) {
        $('#contact-form').submit(function () {
            var hasError = false,
                nome     = $('#nome'),
                email    = $('#email'),
                tel      = $('#tel'),
                inter    = $('#inter'),
                msg      = $('#msg'),
                testmail = /^[^0-9][A-z0-9_]+([.][A-z0-9_]+)*[@][A-z0-9_]+([.][A-z0-9_]+)*[.][A-z]{2,4}$/,
                $this    = $(this);

            $this.find('div').removeClass('has-error');

            if (nome.val() === '') {
                hasError = true;
                addError(nome);
            }
            
            if (email.val() === '') {
                hasError = true;
                addError(email);
            }
            
            if (tel.val() === '') {
                hasError = true;
                addError(tel);
            }
            
            if (inter.val() === '') {
                hasError = true;
                addError(inter);
            }

            if (!testmail.test(mail.val())) {
                hasError = true;
                addError(mail);
            }

            if (msg.val() === '') {
                hasError = true;
                addError(msg);
            }

            if (hasError === false) {
                return true;
            }

            return false;
        });
    }
}(jQuery, window, document));