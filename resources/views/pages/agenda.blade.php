@extends('layouts.app')

@section('header','Agenda')

@section('sidebar')

@endsection

@section('content')

    <div id="calendar-container">
        <div class="row">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
                <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
                    <a class="btn-floating btn-large red">
                        <i class="large material-icons">mode_edit</i>
                    </a>
                    <ul>
                        <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
                        <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
                        <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
                        <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
                    </ul>
                </div>
        </div>
    </div>
@endsection