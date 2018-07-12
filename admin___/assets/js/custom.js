$(document).ready(function () {
    $('#name').change(function (e) {
        $.ajax({
            url: '../controllers/common/Ajax.php',
            type: 'POST',
            dataType: 'text',
            data: {controller: 'article', action: 'slug', name: $('#name').val()},
        })
                .done(function (data) {
                    $('#slug').val(data);
                })
                .fail(function () {
                    console.log("error");
                })
                .always(function () {
                    console.log("complete");
                });



    });
});

