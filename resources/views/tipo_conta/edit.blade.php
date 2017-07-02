@extends('layouts.app')

@section('content')
    <h4 class="text-center"> Atualizando Contas </h4>

    {!! Form::model($conta, ['route' => ['tipo_conta.update', $conta->id], 'class' => 'form form-group', 'method' => 'PUT']) !!}



    <div class="form-group">
        {!! Form::label('Conta') !!}
        {!! Form::text('nome',null,['class'=>'form-control']) !!}    
    </div>

    <div class="form-group">
    
    {!! Form::submit('Atualizar',['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}
@endsection