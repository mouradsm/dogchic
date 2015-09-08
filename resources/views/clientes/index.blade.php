@extends('...layouts.app')

@section('title','Clientes')

@section('content')
        <div class="search">
            <input type="search"/>
        </div>
    <div class="row">
    @foreach($clientes as $cliente)
        <div class="col s12 m4 l4 ">
          <div class="card darken-1 hoverable">
            <div class="card-content ">
              <span class="card-title blue-grey-text">{{$cliente->nome}}</span>
              <p><b>Endereço:</b> {{$cliente->endereco[0]->rua . ', '.  $cliente->endereco[0]->numero.', '.$cliente->endereco[0]->cidade }}</p>
              <p><b>Animais:</b> {{$cliente->animais->count()}}</p>
            </div>
            <div class="card-action right-align">
              <a target='_blank' href="http://maps.google.com/maps?z=12&t=m&q=loc:{{$cliente->endereco[0]->latitude}}+{{$cliente->endereco[0]->longitude}}">Mapa</a>
              {{--<a href="#">This is a link</a>--}}
            </div>
          </div>
        </div>
    @endforeach
  </div>

    <div class="fixed-action-btn" style="bottom: 20px; right: 24px;">
      <a class="btn-floating btn-large tooltipped green" data-position="left"
       data-delay="50" data-tooltip="Cadastrar Cliente">
         <i class="material-icons">add</i>
      </a>
    </div>


@endsection