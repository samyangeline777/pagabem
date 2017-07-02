@extends('layouts.app')

@section('content')
    <h4 class="text-center"> Cadastrando Contas </h4>

     {!! Form::open(['route' => 'tipo_conta.store', 'class' => 'form form-group']) !!}


    <div class="form-group">
        {!! Form::label('Conta') !!}
        {!! Form::text('nome',null,['class'=>'form-control']) !!}    
    </div>

    <div class="form-group">
    
    {!! Form::submit('Enviar',['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}
@endsection