

var MyEvents = function () {
    var body        = 'body';
    var calendar    = '#calendar';
    var modalEventItem  = '#event-item';
    var events      = [
        {
            id: 99,
            title: 'All Day Event',
            start: '2016-09-01'
        },
        {
            title: 'Long Event',
            start: '2016-09-07',
            end: '2016-09-10'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2016-09-09T16:00:00'
        },
        {
            id: 999,
            title: 'Repeating Event',
            start: '2016-09-16T16:00:00'
        },
        {
            title: 'Conference',
            start: '2016-09-11',
            end: '2016-09-13'
        },
        {
            title: 'Meeting',
            start: '2016-09-12T10:30:00',
            end: '2016-09-12T12:30:00'
        },
        {
            title: 'Lunch',
            start: '2016-09-12T12:00:00'
        },
        {
            title: 'Meeting',
            start: '2016-09-12T14:30:00'
        },
        {
            title: 'Happy Hour',
            start: '2016-09-12T17:30:00'
        },
        {
            title: 'Dinner',
            start: '2016-09-12T20:00:00'
        },
        {
            title: 'Birthday Party',
            start: '2016-09-13T07:00:00'
        },
        {
            title: 'Click for Google',
            url: 'http://google.com/',
            start: '2016-09-28'
        }
    ];

    return {
        init: function () {
            if (!_.isUndefined($(calendar))) {
                MyEvents.renderCalendar();
                this.events();
            }
        },
        events: function () {
            $('#my-button').click(function() {
                var moment = $('#calendar').fullCalendar('incrementDate', 2000);
            });
        },
        renderCalendar: function(){
            $(calendar).fullCalendar({
                header: {
                    left: 'prevYear,prev,next,nextYear today',
                    center: 'title',
                    right: 'listDay,listWeek,listMonth,listYear,basicDay,basicWeek,month,agendaWeek,agendaDay,timelineDay,timelineWeek',
                    //right: 'listDay,listWeek,month'
                },
                views: {
                    listDay: { buttonText: 'list day' },
                    listWeek: { buttonText: 'list week' },
                    month: { // name of view
                        titleFormat: 'DD/MM/YYYY'
                        // other view-specific options here
                    }
                },
                defaultView: 'month',
                defaultDate: '2016-09-12',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: events,
                height: 650,
                contentHeight: 600,
                fixedWeekCount: true,
                //weekNumbers: true,
                //weekNumbersWithinDays: true,
                weekends: true,
                minTime: "7:00:00",
                maxTime: "18:00:00",
                noEventsMessage: "Khong co event",
                locale: 'vi',
                eventDurationEditable: true,
                agendaFourDay: {
                    type: 'agenda',
                    duration: { days: 4 },
                    buttonText: '4 day'
                },

                //hiddenDays: [ 1, 3, 5 ], // hide Mondays, Wednesdays, and Fridays
                dayClick: function(date, jsEvent, view) {
                    MyEvents.dayClick($(this), date, jsEvent, view);
                },
                eventClick: function(calEvent, jsEvent, view) {
                    //console.log(calEvent);
                    //console.log(view);
                    MyEvents.eventClick($(this), calEvent, jsEvent, view);
                    /*alert('Event: ' + calEvent.title);
                    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
                    alert('View: ' + view.name);

                    // change the border color just for fun
                    $(this).css('border-color', 'red');*/

                }
            });
        },
        dayClick: function(_this, date, jsEvent, view){
            //alert('Clicked on: ' + date.format());
            //
            //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
            //
            //alert('Current view: ' + view.name);
            //
            // change the day's background color just for fun
            //$(this).css('background-color', 'red');
            $(modalEventItem).modal("show");
        },
        eventClick: function(_this, calEvent, jsEvent, view){
            console.log(calEvent);
            $(modalEventItem).modal("show");
        }
    }
}();

MyEvents.init();

//rgba(0, 165, 224, 0.5)