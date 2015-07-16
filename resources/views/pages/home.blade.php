@extends('layouts.app')

@section('header','Home')

@section('sidebar')

@endsection

@section('content')
    <div class="mdl-grid">
        <div class="mdl-cell--12-col">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
        </div>
    </div>
@endsection