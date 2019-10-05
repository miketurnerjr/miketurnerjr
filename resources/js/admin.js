function confirmDelete() {
    $('.delete-trigger').on('click', function() {
        let redirect = $(this).data('redirect') != '' ? $(this).data('redirect') : null;
        let href = $(this).attr('href');

        return false;
    });
}

function showPassword() {
    $('.password').on('mouseover', function () {
        var id = $(this).attr('id');
        var object = document.getElementById(id);
        object.type = 'text';
    });
}

function hidePassword() {
    $('.password').on('mouseout', function () {
        var id = $(this).attr('id');
        var object = document.getElementById(id);
        object.type = 'password';
    });
}

function createSlug() {
    let nameField = $('.slugify'),
        slugField = $('#slug'),
        slugClassField = $('.slug-field');

    if (nameField.length > 0) {
        nameField.on('keyup', function () {
            let value = nameField.val();

            if (slugField.length > 0) {
                slugField.val(convertToSlug(value));
            }
            if (slugClassField.length > 0) {
                slugClassField.val(convertToSlug(value));
            }
        });
    }
}

function convertToSlug(Text) {
    return Text
        .toLowerCase()
        .replace(/ /g, '-')
        .replace(/[^\w-]+/g, '')
        ;
}



function init() {
    confirmDelete();
    showPassword();
    hidePassword();
}
init();

