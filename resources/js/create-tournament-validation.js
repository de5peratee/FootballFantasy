$(document).ready(function() {
    function validateField(input) {
        var fieldName = input.attr('name');
        var fieldValue = input.val();

        $.ajax({
            type: 'POST',
            url: "/validate-field",
            data: {
                fieldName: fieldName,
                fieldValue: fieldValue
            },
            success: function(response) {
                if (response.valid) {
                    input.removeClass('invalid').addClass('valid');
                    input.next('.form__error').text('');
                } else {
                    input.removeClass('valid').addClass('invalid');
                    input.next('.form__error').text(response.message);
                }
            },
            error: function(xhr) {
                console.error('Ошибка при проверке поля:', xhr.statusText);
            }
        });
    }

    $('#tournament input').on('blur', function() {
        validateField($(this));
    });
    function resetFormStyles() {
        $('#tournament input').removeClass('valid invalid');
        $('[id^=error-]').text('');
        $('#tournament input').css('border-color', '');
    }

    $('#reset-button').on('click', function() {
        resetFormStyles();
    });

    $('#tournament').on('submit', function(e) {
        e.preventDefault();

        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: "/create-tournament",
            data: formData,
            success: function(response) {
                $('#tournament')[0].reset();
                window.location.href = '/my-tournaments';
            },
            error: function(xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $('.form__error').text('');
                    $.each(errors, function(key, value) {
                        var input = $('[name=' + key + ']');
                        input.addClass('invalid').removeClass('valid');
                        input.next('.form__error').text(value[0]);
                    });
                }
            }
        });
    });

    $('#tournament input').on('input', function() {
        $(this).removeClass('valid invalid');
        $(this).next('.form__error').text('');
    });
});
