
$(document).ready(function () {

    $('#btn-submit').click(function () {

        $.ajax({
            url: params['submit_form_url'],
            cache: false,
            type: 'POST',
            dataType: 'json',
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                message: $('#message').val(),
                g_recaptcha_response: grecaptcha.getResponse(),
                _token: params['token']
            },
            success: function (response) {

                if (response.errors) {

                    $('#errors').html(response.errors);
                    $('#errors-div').show();
                } else {
                    $('#errors').html('');
                    $('#errors-div').hide();
                }

                if (response.success) {

                    $('#success').html(response.success);
                    $('#success-div').show();
                } else {
                    $('#success').html('');
                    $('#success-div').hide();
                }


            }
        });

    });

    $('#btn-contact').click(function () {

        $('html, body').animate({scrollTop: $('#contact-div').offset().top}, 'slow');

    });
});
