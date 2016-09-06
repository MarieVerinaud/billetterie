jQuery(function ($) {
    $('.js-datepicker').datepicker({
        dateFormat: 'dd/mm/yy',
        disableTouchKeyboard : true,
        minDate : 0,
        autoclose : true,
        beforeShowDay : function (date)
        {
            var day = date.getDay();
            var month = date.getMonth();
            var currDate = date.getDate();
            if (day === 2)
            {
                return [false];
            }
            else if (month == 4 && currDate == 1)
            {
                return [false];
            }
            else if (month == 10 && currDate == 1)
            {
                return [false];
            }
            else if (month == 11 && currDate == 25)
            {
                return [false];
            }
            else
            {
                return [true];
            }
        }
    });
});

