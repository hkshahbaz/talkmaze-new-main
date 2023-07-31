
var Dashboard = function (){
    
    //Spark Line Pie and Area Chart
    var handleDashboardSparkLinePlugins = function() {
     //   #ff3600,#ffc600,#83c80b,#9933ff
     
        $("#sparklinePie").sparkline([3, 2, 2, 3], {
            type: 'pie',
            height: '150',
            sliceColors: ['#ff3600', '#ffc600', '#83c80b', '#9933ff'],
            tooltipFormat: '<span style="color: {{color}}">&#9679;</span> {{offset:names}} ({{percent.1}}%)',
            tooltipValueLookups: {
                names: {
                    0: 'Blocked',
                    1: 'Pending',
                    2: 'Success',
                    3: 'Activated'
                }
            }
        });
        
        // sparklineLine
        $("#sparklineLine").sparkline([5, 6, 7, 9, 9, 5, 3, 2, 2, 4, 6, 7], {
            type: 'line',
            width: '100%',
            height: '50',
            lineColor: '#00aeff',
            fillColor: '#96ddff',
            lineWidth: 2
        });
    };
    
    // dashboard Area Chart
    var handleDashboardAreaChart = function() {
        var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
        var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

        var data1 = [
            {label: "Sales One", data: d1, points: {fillColor: "#ff825c", size: 5}, color: '#ff6e42'},
            {label: "Sales Two", data: d2, points: {fillColor: "#a3cf64", size: 5}, color: '#7ac70c'}
        ];
        
        $.plot($("#areaChart"), data1, {
            xaxis: {
                min: (new Date(2009, 12, 1)).getTime(),
                max: (new Date(2010, 11, 1)).getTime(),
                mode: "time",
                tickSize: [1, "month"],
                monthNames: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                tickLength: 0,
                axisLabel: 'Month',
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelPadding: 5
            },
            yaxis: {
                axisLabel: 'Amount',
                axisLabelUseCanvas: true,
                axisLabelFontSizePixels: 12,
                axisLabelPadding: 5
            },
            series: {
                lines: {
                    show: true,
                    fill: true
                },
                points: {
                    show: false
                }                               
            },
            
            grid: {
                borderWidth: 1,
                hoverable: true 
            },
            tooltip: true,
            tooltipOpts: {
                content: "Sales: %y"
            },
            legend: {
                labelBoxBorderColor: "none",
                position: "left"
            }
        });
        
        
    };
    
    // dashboard Donut chart
    var handleDashboardDonetChart = function() {
        var dataforPie = [
            {
                label: "Not Completed",
                data: 150,
                color: "#ff0036"
            },
            {
                label: "Rating 1",
                data: 100,
                color: "#fe7e00"
            },
            {
                label: "Rating 2",
                data: 250,
                color: "#febf00"
            },
            {
                label: "Rating 3",
                data: 250,
                color: "#1bd0fd"
            },
            {
                label: "Rating 4",
                data: 250,
                color: "#b1bf12"
            },
            {
                label: "Rating 5",
                data: 250,
                color: "#74b61a"
            }
        ];

        var options = {
            series: {
                pie: {
                    innerRadius: 0.3,
                    show: true
                }
            },
            grid: {
                borderWidth: 1,
                hoverable: true 
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0%, %s" // show percentages, rounding to 2 decimal places
            },
            legend: {
                show: false
            }
        };

        $.plot($("#donutChart"), dataforPie, options);
    };
    
    //Server Load Flot Real time Chart
    var handleDashboardServerLoad = function() {

        if (!jQuery.plot) {
            return;
        }

        var data = [];
        var totalPoints = 250;

        // random data generator for plot charts
        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0)
                    y = 0;
                if (y > 100)
                    y = 100;
                data.push(y);
            }
            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i)
                res.push([i, data[i]])
            return res;
        }

        function randValue() {
            return (Math.floor(Math.random() * (1 + 50 - 20))) + 10;
        }

        var visitors = [
            [1, randValue() - 5],
            [2, randValue() - 5],
            [3, randValue() - 5],
            [4, 6 + randValue()],
            [5, 5 + randValue()],
            [6, 20 + randValue()],
            [7, 25 + randValue()],
            [8, 36 + randValue()],
            [9, 26 + randValue()],
            [10, 38 + randValue()],
            [11, 39 + randValue()],
            [12, 50 + randValue()],
            [13, 51 + randValue()],
            [14, 12 + randValue()],
            [15, 13 + randValue()],
            [16, 14 + randValue()],
            [17, 15 + randValue()],
            [18, 15 + randValue()],
            [19, 16 + randValue()],
            [20, 17 + randValue()],
            [21, 18 + randValue()],
            [22, 19 + randValue()],
            [23, 20 + randValue()],
            [24, 21 + randValue()],
            [25, 14 + randValue()],
            [26, 24 + randValue()],
            [27, 25 + randValue()],
            [28, 26 + randValue()],
            [29, 27 + randValue()],
            [30, 31 + randValue()]
        ];

        var updateInterval = 30;
        var plot_statistics = $.plot($("#load_statistics"), [getRandomData()], {
            series: {
                shadowSize: 1
            },
            lines: {
                show: true,
                lineWidth: 0.2,
                fill: true,
                fillColor: {
                    colors: [{
                            opacity: 1
                        }, {
                            opacity: 1
                        }]
                }
            },
            yaxis: {
                min: 0,
                max: 100,
                tickFormatter: function(v) {
                    return v + "%";
                }
            },
            xaxis: {
                show: false
            },
            colors: ["#e14e3d"],
            grid: {
                tickColor: "#a8a3a3",
                borderWidth: 0
            }
        });

        function statisticsUpdate() {
            plot_statistics.setData([getRandomData()]);
            plot_statistics.draw();
            setTimeout(statisticsUpdate, updateInterval);
        }
        statisticsUpdate();

       
    };
    
    // Handel Dashboard Calendar
    var handleDashboardCalendar = function () {

        if (!jQuery().fullCalendar) {
            return;
        }

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var h = {};

        if ($('#calendar').width() <= 500) {
            $('#calendar').addClass("mobile");
            h = {
                left: 'title, prev, next',
                center: '',
                right: 'month,agendaWeek,agendaDay'
            };
        } else {
            $('#calendar').removeClass("mobile");
            h = {
                left: 'title',
                center: '',
                right: 'prev,next,month,agendaWeek,agendaDay'
            };
        }

        $('#calendar').html("");
        $('#calendar').fullCalendar({
            disableDragging: true,
            header: h,
            editable: true,
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1),
                backgroundColor: '#fc730e',
                borderColor: '#fc730e',
                textColor: '#ffffff'
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
                backgroundColor: '#2faeff',
                borderColor: '#2faeff',
                textColor: '#ffffff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false,
                backgroundColor: '#f8af00',
                borderColor: '#f8af00',
                textColor: '#ffffff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false,
                backgroundColor: '#d34bfa',
                borderColor: '#d34bfa',
                textColor: '#ffffff'
            }, {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                backgroundColor: '#00a6fc',
                borderColor: '#00a6fc',
                textColor: '#ffffff'
            }, {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: '#d34bfa',
                borderColor: '#d34bfa',
                textColor: '#ffffff'
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                backgroundColor: '#00bc0d',
                borderColor: '#00bc0d',
                textColor: '#ffffff'
            }, {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
                backgroundColor: '#ffc000',
                borderColor: '#ffc000',
                textColor: '#ffffff'
            }]
        });
        
        $('.fc-button').addClass('btn mini');
        $('.fc-button-next').addClass('btn blue mini');
        $('.fc-button-prev').addClass('btn blue mini');

    }
    
    // Handel Dashboard Chat
    var handleChat = function() {
        var cont = $('#chats');
        var list = $('.chats', cont);
        var form = $('.chat-form', cont);
        var input = $('input', form);
        var btn = $('.btn', form);

        var handleClick = function() {
            var text = input.val();
            if (text.length == 0) {
                return;
            }

            var time = new Date();
            var time_str = time.toString('MMM dd, yyyy HH:MM');
            var tpl = '';
            tpl += '<li class="out">';
            tpl += '<img class="avatar" alt="" src="assets/images/demo/avatar-1.jpg"/>';
            tpl += '<div class="message">';
            tpl += '<span class="arrow"></span>';
            tpl += '<a href="#" class="name">Prakasam Mathaiyan</a>&nbsp;';
            tpl += '<span class="datetime">at ' + time_str + '</span>';
            tpl += '<span class="body">';
            tpl += text;
            tpl += '</span>';
            tpl += '</div>';
            tpl += '</li>';

            var msg = list.append(tpl);
            input.val("");
            $('.scroller', cont).slimScroll({
                scrollTo: list.height()
            });
        }

        btn.click(handleClick);
        input.keypress(function (e) {
            if (e.which == 13) {
                handleClick();
                return false; //<---- Add this line
            }
        });
    }
    
    return {
        init: function() {
            
            handleDashboardSparkLinePlugins();
            handleDashboardAreaChart();
            handleDashboardDonetChart();
            handleDashboardServerLoad();
            handleDashboardCalendar();
            handleChat();
        }
        
    };
}();    // Dashboard Scripts

var UserProfile = function (){
    
    var handelUserProfile = function() {
        Morris.Area({
            element: 'SummeryChart',
            data: [
                {y: '2006', a: 50, b: 90},
                {y: '2007', a: 75, b: 65},
                {y: '2008', a: 50, b: 40},
                {y: '2009', a: 75, b: 65},
                {y: '2010', a: 50, b: 40},
                {y: '2011', a: 75, b: 65},
                {y: '2012', a: 80, b: 90}
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            lineWidth: '2px',
            lineColors: ['#f33559', '#a7d810']
        });

        Morris.Donut({
            element: 'SkillDiv',
            colors: ['#fd8300', '#00a7fd', '#196084', '#0859df', '#9531db' ],
            data: [
                {label: "HTML", value: 90, },
                {label: "CSS", value: 95},
                {label: "JQUERY", value: 70},
                {label: "PHOTOSHOP", value: 80},
                {label: "PHP", value: 50}
            ]
        });
    }
    
    return {
        init: function() {
            handelUserProfile();
        }
        
    }
}();    // Handel User Profile Page

var UISliders = function (){
    
    var handelSliders = function() {
        //  Basic Slider
        $("#slider").slider();

        // setup graphic EQ
        $("#eq > span").each(function() {
            // read initial values from markup and remove that
            var value = parseInt($(this).text(), 10);
            $(this).empty().slider({
                value: value,
                range: "min",
                animate: true,
                orientation: "vertical"
            });
        });
        
        //  Range Slider
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 500,
            values: [75, 300],
            slide: function(event, ui) {
                $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
                " - $" + $("#slider-range").slider("values", 1));

        //  Max Value Slider
        $("#sliderMAX").slider({
            value: 100,
            min: 0,
            max: 500,
            step: 50,
            slide: function(event, ui) {
                $("#amountMAX").val("$" + ui.value);
            }
        });
        $("#amountMAX").val("$" + $("#slider").slider("value"));
    };
    
    return {
        init: function() {
            handelSliders();
        }
        
    };
}();    // Handel Jquery Ui Sliders

var NestableList = function (){
    
    var handleNestableList = function () {

        var updateOutput = function (e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');
            }
        };

        // activate Nestable for list 1
        $('#nestable_list_1').nestable({
            group: 1
        })
            .on('change', updateOutput);

        // activate Nestable for list 2
        $('#nestable_list_2').nestable({
            group: 1
        })
            .on('change', updateOutput);

        // output initial serialised data
        updateOutput($('#nestable_list_1').data('output', $('#nestable_list_1_output')));
        updateOutput($('#nestable_list_2').data('output', $('#nestable_list_2_output')));

        $('#nestable_list_menu').on('click', function (e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });

        $('#nestable_list_3').nestable();

    };
    
    return {
        init: function() {
            handleNestableList();
        }
        
    };
}();    // handle Nestable List

var FormValidation = function (){
    
    var handelFormValidation = function() {
        
        // Function for In-Line Validation
        $("#validate-1").validate();
        
        // validate signup form on keyup and submit
	$("#validate-2").validate({
		rules: {
			req2: "required",
                        email2: {
				required: true,
				email: true
			},
                        url2: {
				required: true,
				minlength: 5,
                                url:true
			},
			
			pass2: {
				required: true,
				minlength: 5
			},
			cpass2: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			},
			digits2: {
                            required : true,
                            number:true
                        }
		},
		messages: {
			req2: "Please enter your User Name",
                        email2: "Please enter a valid email address",
			url2: "Please enter Correct Web Address",
			pass2: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			cpass2: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			
			digits2: "Please Enter Numbers only"
		}
	});
    };
    
    return {
        init: function() {
            handelFormValidation();
        }
        
    };
}();    // Handel Form Validation

var FormWizard = function (){
    
    var FormWizard = function() {
       // Smart Wizard 	
        $('#wizard').smartWizard();
        $('.buttonDisabled').addClass("btn");
        $('.buttonPrevious').addClass("btn red");
        $('.buttonNext').addClass("btn blue");
        $('.buttonFinish').addClass("btn green");
    };
    
    return {
        init: function() {
            FormWizard();
        }
        
    }
}();    // Handel Form Wizard

var DataTabels = function (){
    
    var handelDynamicTables = function() {
        var oTable = $('.DynamicTable').dataTable({
            "aoColumnDefs": [{
                    "aTargets": [0]
                }],
            "oLanguage": {
                "sLengthMenu": "_MENU_ Rows",
                "sSearch": ""                
            },
            "aaSorting": [
                [1, 'asc']
            ],
            "aLengthMenu": [
                [5, 10, 15, 20, -1],
                [5, 10, 15, 20, "All"] // change per page values here
            ],
            // set the initial value
            "iDisplayLength": 10
        });
        
        $('.dataTables_filter input').addClass("form-control input-sm").attr("placeholder", "Search");
        // modify table search input
        $('.dataTables_length select').addClass("m-wrap small");
        // modify table per page dropdown
        $('.dataTables_length select').select2({minimumResultsForSearch: -1 });
        
    };
    
    return {
        init: function() {
            handelDynamicTables();
        }
        
    }
}();    // Dynamic Data Tabels

var FullCalendar = function (){
    
    var handelFullCalendar = function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var h = {};
       
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            selectable: true,
            selectHelper: true,
            select: function(start, end, allDay) {
                var title = prompt('Event Title:');
                if (title) {
                    calendar.fullCalendar('renderEvent',
                            {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                    true // make the event "stick"
                            );
                }
                calendar.fullCalendar('unselect');
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                copiedEventObject.className = $(this).attr("data-class");

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1),
                backgroundColor: '#fc006b',
                borderColor: '#fc006b',
                textColor: '#ffffff'
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
                backgroundColor: '#ed511b',
                borderColor: '#ed511b',
                textColor: '#ffffff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false,
                backgroundColor: '#a000fc',
                borderColor: '#a000fc',
                textColor: '#ffffff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false,
                backgroundColor: '#6500fc',
                borderColor: '#6500fc',
                textColor: '#ffffff'
            }, {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                backgroundColor: '#00a6fc',
                borderColor: '#00a6fc',
                textColor: '#ffffff'
            }, {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: '#56d1a4',
                borderColor: '#56d1a4',
                textColor: '#ffffff'
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                backgroundColor: '#00bc0d',
                borderColor: '#00bc0d',
                textColor: '#ffffff'
            }, {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
                backgroundColor: '#ffc000',
                borderColor: '#ffc000',
                textColor: '#ffffff'
            }]
        });
        
        $('.fc-button').addClass('btn mini');
        $('.fc-button-next').addClass('btn blue mini');
        $('.fc-button-prev').addClass('btn blue mini');
        
    }
    
    return {
        init: function() {
            handelFullCalendar();
        }
        
    }
}();    // Handel Full Calendar

var FullCalendarDrag = function (){
    
    var handelFullCalendar = function() {
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        var h = {};
        
        /* initialize the external events
		-----------------------------------------------------------------*/
	
        $('#external-events div.external-event').each(function() {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });

        });
       
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');
                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                copiedEventObject.className = $(this).attr("data-class");

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1),
                backgroundColor: '#fc006b',
                borderColor: '#fc006b',
                textColor: '#ffffff'
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2),
                backgroundColor: '#ed511b',
                borderColor: '#ed511b',
                textColor: '#ffffff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false,
                backgroundColor: '#a000fc',
                borderColor: '#a000fc',
                textColor: '#ffffff'
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false,
                backgroundColor: '#6500fc',
                borderColor: '#6500fc',
                textColor: '#ffffff'
            }, {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false,
                backgroundColor: '#00a6fc',
                borderColor: '#00a6fc',
                textColor: '#ffffff'
            }, {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false,
                backgroundColor: '#56d1a4',
                borderColor: '#56d1a4',
                textColor: '#ffffff'
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false,
                backgroundColor: '#00bc0d',
                borderColor: '#00bc0d',
                textColor: '#ffffff'
            }, {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/',
                backgroundColor: '#ffc000',
                borderColor: '#ffc000',
                textColor: '#ffffff'
            }]
        });
        
        $('.fc-button').addClass('btn mini');
        $('.fc-button-next').addClass('btn blue mini');
        $('.fc-button-prev').addClass('btn blue mini');
        
    }
    
    return {
        init: function() {
            handelFullCalendar();
        }
        
    }
}();    // Handel Full Calendar

var DraggPortlets = function (){
    
    var handelDraggablePortlets = function() {
        $("#sortable_portlets").sortable({
            connectWith: ".portlet",
            items: ".portlet",
            opacity: 0.8,
            coneHelperSize: true,
            placeholder: 'sortable-box-placeholder round-all',
            forcePlaceholderSize: true,
            tolerance: "pointer"
        });

        $(".column").disableSelection();
    }
    
    return {
        init: function() {
            handelDraggablePortlets();
        }
        
    }
}();    // Draggable Portlets


var VectorMaps = function (){
    
    var handleAllJQVMAP = function() {
        var setMap = function(name) {
            var data = {
                map: 'world_en',
                backgroundColor: null,
                borderColor: '#333333',
                borderOpacity: 0.5,
                borderWidth: 1,
                color: '#c6c6c6',
                enableZoom: true,
                hoverColor: '#c9dfaf',
                hoverOpacity: null,
                values: sample_data,
                normalizeFunction: 'linear',
                scaleColors: ['#b6da93', '#427d1a'],
                selectedColor: '#c9dfaf',
                selectedRegion: null,
                showTooltip: true,
                onRegionOver: function(event, code) {
                    //sample to interact with map
                    if (code == 'ca') {
                        event.preventDefault();
                    }
                },
                onRegionClick: function(element, code, region) {
                    //sample to interact with map
                    var message = 'You clicked "' + region + '" which has the code: ' + code.toUpperCase();
                    alert(message);
                }
            };

            data.map = name + '_en';
            var map = jQuery('#vmap_' + name);
            if (!map) {
                return;
            }
            map.width(map.parent().width());
            map.vectorMap(data);
        }

        setMap("world");
        setMap("usa");
        setMap("europe");
        setMap("russia");
        setMap("germany");
    }
    
    return {
        init: function() {
            handleAllJQVMAP();
        }
        
    }
}();    // Draggable Portlets

var Gallery = function (){
    
    var handleGallery = function() {
        
        $('#filters a').hover(function() {
            $(this).parent().prev().css('background', 'none');
        },
        function() {
            if ($(this).hasClass('selected')) {
                return false;
            }
            else {
                $(this).parent().prev().css('background', 'url("images/filter_sep.png") no-repeat scroll right center transparent');
            }
        });
        
        $('#filters a').click(function() {
            var a = $('#filters a');
            $(a).each(function() {
                $(this).parent().prev().css('background', 'url("images/filter_sep.png") no-repeat scroll right center transparent');
            });
            $(this).parent().prev().css('background', 'none');
        });
        
        $('.space').each(function() {
            var space = $(this).data('space');
            $(this).height(space);
        });
        
        $('.feature_title').wrapInner('<span></span>');
        var over_h = $('.portfolio_over').height() / 2;
        var over_link = $('.portfolio_over a').height() / 2;
        $('.portfolio_over a').css('top', over_h - over_link);
        
        $('.portfolio_inner').hover(function() {
            $(this).find('.portfolio-tags').removeClass('animated fadeOutDown');
            $(this).find('h2').removeClass('animated fadeOutUp');
            $(this).find('h5').removeClass('animated fadeOutUp');
            $(this).find('.portfolio-link').removeClass('animated fadeOutLeftBig');
            $(this).find('.portfolio-zoom').removeClass('animated fadeOutRightBig');
            $(this).find('.portfolio_over').animate({opacity: 1}, 1000);
            $(this).find('.portfolio-tags').addClass('animated fadeInUp');
            $(this).find('h2').addClass('animated fadeInDown');
            $(this).find('h5').addClass('animated fadeInDown');
            $(this).find('.portfolio-link').addClass('animated fadeInLeftBig');
            $(this).find('.portfolio-zoom').addClass('animated fadeInRightBig');
        },
        
        function() {
            $(this).find('.portfolio-tags').removeClass('animated fadeInUp');
            $(this).find('h2').removeClass('animated fadeInDown');
            $(this).find('h5').removeClass('animated fadeInDown');
            $(this).find('.portfolio-link').removeClass('animated fadeInLeftBig');
            $(this).find('.portfolio-zoom').removeClass('animated fadeInRightBig');
            $(this).find('.portfolio-tags').addClass('animated fadeOutDown');
            $(this).find('h2').addClass('animated fadeOutUp');
            $(this).find('h5').addClass('animated fadeOutUp');
            $(this).find('.portfolio-link').addClass('animated fadeOutLeftBig');
            $(this).find('.portfolio-zoom').addClass('animated fadeOutRightBig');
            $(this).find('.portfolio_over').animate({opacity: 0}, 1000);
        });
        
        "use strict";
        var $container = $('#IMGcontainer');

        $container.isotope({
            itemSelector: '.portfolio-item'
        });
        
        var $optionSets = $('#options .option-set'),
            $optionLinks = $optionSets.find('a');
            
        $optionLinks.click(function(){
            var $this = $(this);
            // don't proceed if already selected
            if ( $this.hasClass('selected') ) {
                return false;
            }
            
            var $optionSet = $this.parents('.option-set');
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');

            // make option object dynamically, i.e. { filter: '.my-filter-class' }
            var options = {},
                key = $optionSet.attr('data-option-key'),
                value = $this.attr('data-option-value');

                // parse 'false' as false boolean
                value = value === 'false' ? false : value;
                options[ key ] = value;
                $container.isotope(options);
                return false;
            });
        
    };
    
    return {
        init: function() {
            handleGallery();
        }
        
    }
}();    // Draggable Portlets

