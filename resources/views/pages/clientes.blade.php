@extends('layouts.app')

@section('header','Clientes')

@section('content')
    <div class="row">
        <div class="col s12">
            <div class="input-field col offset-s4 s4">
                {{--<i class="material-icons prefix">account_circle</i>--}}
                <input type="text" placeholder="Nome do Cliente ou Animal"/>
            </div>
        </div>
    </div>
    <div class="row">
    <div class="col s12 m4 l4">
      <div class="card darken-1">
        <div class="card-content ">
          <span class="card-title blue-grey-text">Diego Moura</span>
          <p><b>Endereço:</b> Rua Parazinho Lote 28 Quadra 10</p>
          <p><b>Animais: </b>Animal 1, Animal 2, Animal N</p>
        </div>
        <div class="card-action">
          <a href="#">Mapa</a>
          {{--<a href="#">This is a link</a>--}}
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card darken-1">
        <div class="card-content ">
          <span class="card-title blue-grey-text">Diego Moura</span>
          <p><b>Endereço:</b> Rua Parazinho Lote 28 Quadra 10</p>
          <p><b>Animais: </b>Animal 1, Animal 2, Animal N</p>
        </div>
        <div class="card-action">
          <a href="#">Mapa</a>
          {{--<a href="#">This is a link</a>--}}
        </div>
      </div>
    </div>
    <div class="col s12 m4 l4">
      <div class="card darken-1">
        <div class="card-content ">
          <span class="card-title blue-grey-text">Diego Moura</span>
          <p><b>Endereço:</b> Rua Parazinho Lote 28 Quadra 10</p>
          <p><b>Animais: </b>Animal 1, Animal 2, Animal N</p>
        </div>
        <div class="card-action">
          <a href="#">Mapa</a>
          {{--<a href="#">This is a link</a>--}}
        </div>
      </div>
    </div>
  </div>
@endsection