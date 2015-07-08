@extends('app')
@section('title') About :: @parent @stop
@section('content')

    {{-- TODO: COLOCAR CAMPO DE PARTICIPAÇÃO NO CLUBINHO (PERGUNTAR DIA DA SEMANA E TURNO(MANHÃ OU TARDE)--}}

    <div class="row">
        <div class="page-header">
            <h2>Cadastro de Cliente</h2>
        </div>
    </div>
    <div class="row">
        {!! Form::open(['url' => 'articles']) !!}
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('title', 'Nome do Cliente') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('title', 'Nome do Animal') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-2">
                {!! Form::label('title', 'Raça') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-1">
                {!! Form::label('title', 'Sexo') !!}
                {!! Form::select('title',['M', 'F'], null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-1">
                {!! Form::label('title', 'Porte') !!}
                {!! Form::select('title',['P', 'M', 'G'], null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-12">
                {!! Form::label('title', 'Observações') !!}
                {!! Form::textarea('title', null, ['class' => 'form-control', 'size' => '30x3']) !!}
            </div>
        </div>

        <hr/>

        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('title', 'Rua') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-1">
                {!! Form::label('title', 'Número') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-3">
                {!! Form::label('title', 'Bairro') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('title', 'Complemento') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('title', 'Celular') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('title', 'Residencial') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('title', 'E-Mail') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
        </div>

        <div class="form-group">
            <div class="col-lg-4">
                <form class="control" action=""></form>
                {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}
            </div>
        </div>


        {!! Form::close() !!}
    </div>
@endsection