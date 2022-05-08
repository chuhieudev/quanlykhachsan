configStart = {
    dateFormat: "Y/m/d",
}
flatpickr('.start-date', configStart);

configEnd = {
        dateFormat: "Y/m/d",
    }
flatpickr('.end-date', configEnd);

$( ".start-date" ).change(function() {
    startDate = $('.start-date').val();
    configEnd = {
        minDate: startDate,
        dateFormat: "Y/m/d",
    }
    flatpickr('.end-date', configEnd);
});