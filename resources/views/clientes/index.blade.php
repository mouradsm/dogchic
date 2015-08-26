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
              <p><b>Endereço:</b> Rua Parazinho Lote 28 Quadra 10</p>
              <p><b>Animais:</b> {{$cliente->animais->count()}}</p>
            </div>
            <div class="card-action right-align">
              <a href="#">Mapa</a>
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