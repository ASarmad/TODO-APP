@extends('layouts.sidebar')

@section('content')
<div class="wrapper">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="card card-success">
                            <h1 class=" text-center">Tasks Calendar</h1>
                            <div class="card-body p-0">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<!-- Calendar -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/fullcalendar/main.js')}}"></script>
<script>
    $(function () {
        // initialize the calendar
        var date = new Date()
        var d    = date.getDate(),
            m    = date.getMonth(),
            y    = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left  : 'prev,next today',
                center: 'title',
                right : 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            events: [
                @foreach($tasks as $record)
                    @if($record->status=='Pending')
                    {
                        title          : '{{$record->title}}',
                        start          : new Date('{{$record->deadline_date }},{{$record->deadline_time}}'),
                        allDay         : @if($record->deadline_time) false, @else true, @endif
                        backgroundColor: '#00a65a',
                        borderColor    : '#00a65a',
                        url:'{{ Route("show_task",["task"=>$record->id]) }}',
                    },
                   @endif
                @endforeach
            ],
        });
        calendar.render();
    })
</script>
@endsection
