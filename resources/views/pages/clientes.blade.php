@extends('layouts.app')

@section('title','Clientes')

@section('content')
    <div class="row">
        <div class="col s12 l4 offset-l4 search-fixed">
            <input type="search"/>
        </div>
    </div>
    <div class="row">
    @for($i= 1; $i <= 21; $i++)
        <div class="col s12 m4 l4 ">
          <div class="card darken-1 hoverable">
            <div class="card-content ">
              <span class="card-title blue-grey-text">Diego Moura</span>
              <p><b>Endereço:</b> Rua Parazinho Lote 28 Quadra 10</p>
              <p><b>Animais: </b>Animal 1, Animal 2, Animal N</p>
            </div>
            <div class="card-action right-align">
              <a href="#">Mapa</a>
              {{--<a href="#">This is a link</a>--}}
            </div>
          </div>
        </div>
    @endfor
  </div>

    <div class="fixed-action-btn" style="bottom: 20px; right: 24px;">
      <a class="btn-floating btn-large tooltipped green" data-position="left"
       data-delay="50" data-tooltip="Cadastrar Cliente">
         <i class="material-icons">add</i>
      </a>
    </div>


@endsection