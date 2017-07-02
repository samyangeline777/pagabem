@extends('layouts.app')

@section('content')
    <h4 class="text-center"> Contas Cadastradas </h4>
    
     <a href="{{route('tipo_conta.create')}}" class="btn btn-info">
        <span class="glyphicon glyphicon-plus"></span>
        Cadastrar
    </a>

    <br>
    <br>
    <table class="table table-striped">
        <thead class="thead-default">
            <tr>
                <th>#</th>
                <th>Conta</th>
                <th>Opções</th>
            </tr>
        </thead>
       
        <tbody>
            @foreach($contas as $conta)
            <tr>
                <th scope="row">{{ $conta->id }}</th>
                <td>{{ $conta->nome }}</td>
                <td>
                    
                     <form action="{{ route('tipo_conta.destroy', $conta->id) }}" method="POST">
                         <a href="{{ route('tipo_conta.edit', $conta->id) }}" class="btn btn-lg">
                            <span class="glyphicon glyphicon-edit"></span>
                            </a>

                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}

                        <button type="submit" class="btn">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </form>
                    <!--<a href="{{ route('tipo_conta.destroy', $conta->id) }}" class="btn btn-lg" >
                     
                    </a>-->
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>

    {!! $contas->links() !!}

    
@endsection