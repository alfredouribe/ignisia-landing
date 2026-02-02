$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#contact_form').on('submit', function (e) {
        e.preventDefault();

        const $form = $(this);
        const $btn = $('#send_message');

        $('#success_message, #error_message').hide();
        $btn.prop('disabled', true).val('Enviando...');

        grecaptcha.execute('6LeTll0sAAAAAD6PvBT34i2gx2Pqs0blx8MLKvz_', { action: 'contact' })
            .then(function (token) {

                $('#recaptcha_token').val(token);

                $.ajax({
                    url: '/contact',
                    method: 'POST',
                    data: $form.serialize(),
                    success: function () {
                        $('#success_message').fadeIn();
                        $form[0].reset();
                    },
                    error: function (xhr) {
                        $('#error_message').fadeIn();
                    },
                    complete: function () {
                        $btn.prop('disabled', false).val('Mandar Mensaje');
                    }
                });

            });
    });
});
