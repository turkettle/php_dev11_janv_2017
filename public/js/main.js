// Test API Key:
//     cee3bcb9-0c81-41ef-88ad-59a4a9ab79d6
// Test keys are unmetered and return dummy holiday day.
//
//     Live API Key:
//     ce7999d8-0112-4836-bfa8-5b2b9f389100
// Limited to 500 calls per month, historical data only.


    var button = $('#reservBook');

button.click(function(event) {

    event.preventDefault();
    var reservInfo = $(this).attr('role-data');

    $.ajax({
        method: 'GET',
        url: 'https://holidayapi.com/v1/holidays',
        data: {
            key: 'cee3bcb9-0c81-41ef-88ad-59a4a9ab79d6',
            country: 'FR',
            year: '2017'
        },
    })
        .success(function(response) {
            if (response.status == 200) {
                $.each(response.holidays, function(index, holiday) {
                    $('#book-header').after('<div>' + holiday[0].name + ' : ' + holiday[0].date + '</div>');
                });
            }
        });

});