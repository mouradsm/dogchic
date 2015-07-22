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
                        <li><a class="btn-floating tooltipped red"
                               data-position="left" data-delay="50" data-tooltip="Excluir Evento">
                                <i class="material-icons">delete</i></a></li>
                        {{--<li><a class="btn-floating yellow darken-1"><i class="material-icons">dte</i></a></li>--}}
                        <li><a class="btn-floating tooltipped blue"
                               data-position="left" data-delay="50" data-tooltip="Editar Evento">
                                <i class="material-icons">mode_edit</i></a></li>
                        <li><a class="btn-floating tooltipped green"
                               data-position="left" data-delay="50" data-tooltip="Novo Evento">
                                <i class="material-icons">event</i></a></li>
                    </ul>
                </div>
        </div>
    </div>
@endsection