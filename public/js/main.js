
var button = $('#reservBook');

button.click(function(event) {

    event.preventDefault();
    var reservInfo = $(this).attr('role-data');

    $.ajax({
        method: 'GET',
        url: 'http://localhost/ajax/add_reservation.php',
        data: { info: reservInfo },
    })
        .success(function(message) {
            $('#book-header').before(message);
        });

});