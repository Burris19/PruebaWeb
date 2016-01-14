;$(function(){

    $('#showPanel').on('click', function(e){
        e.preventDefault();
        $(this).fadeOut();
        $(this).next().fadeOut();
        $('#panelCreate').fadeIn();
    });

    $('#formCreate').submit(function(e){
        e.preventDefault();

        var url = $(this).attr('action');
        var data = $(this).serialize();
        var method = $(this).attr('method');

        $.ajax({
            url: url,
            data: data,
            type: method,
            success: function (response) {
                if (response.success){

                    var clone = $('#clone');

                    clone.removeAttr('style');
                    clone.removeAttr('id');

                    clone.find('.name').text(response.user.name);
                    clone.find('.phone').text(response.user.phone);
                    clone.find('.nit').text(response.user.nit);
                    clone.find('.birthday').text(response.user.birthday);

                    $('#panelCreate').fadeOut();
                    $('#formCreate').trigger("reset");
                    $('#showPanel').fadeIn();

                }
            },
            fail: function (error) {

                console.info(error);
            }
        })
    });

});
