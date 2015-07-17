@extends('layouts.app')

@section('header','Home')

@section('sidebar')

@endsection

@section('content')
    <div class="row">
            {!! $calendar->calendar() !!}
            {!! $calendar->script() !!}
    </div>
@endsection