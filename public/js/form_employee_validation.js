$(document).ready(function () {
    $('input').on('input', function () {
        var maxLength = $(this).attr('maxlength');
        var currentLength = $(this).val().length;
        var fieldName = $(this).attr('name');
        var errorSpan = $('#' + fieldName + '_error');

        if (maxLength != null) {
            if (currentLength >= maxLength) {
                errorSpan.text('The field ' + fieldName + ' exceeds the maximum length of ' + maxLength + ' characters.');
            } else {
                errorSpan.text('the remaining characters that can be filled in are ' + (maxLength - currentLength));
            }
        }

    });


})
