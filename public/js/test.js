/**
 * Created by savrasov.boris on 13.01.14.
 */
$(document).ready( function() {

    form = $('#authForm');

    form.submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: '/login/auth',
            type: 'post',
            data: form.serialize(),
            success: function(response) {
                alert(response);
            },
            error: function() {
                alert('something wrong');
            }
        });
    });

});