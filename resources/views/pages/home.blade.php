@extends('app')
@section('title') Home :: @parent @stop
@section('content')
<div class="row">
    <div class="page-header">
        <h2>Agenda de Tosas</h2>
    </div>
</div>
<div class="row">
    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}
</div>

@endsection

@section('scripts')
    @parent

@endsection
@section('styles')
    @parent

@endsection
@stop
