@extends('layouts.app')
@section('content')
    @if(isset($search))
        <div class="container">
            <h1 class="h2 container">Resultados para: "{{ $search }}"</h1>
        </div>
        <div>
            <div class="container">
                <div class="col-sm-12">
                    <h5>Negativado: {{$negativado->nome}}</h5>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Valor da Divida</th>
                            <th>CPF</th>

                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $negativado->nome }}</td>
                                <td>{{ $negativado->valor_divida }}</td>
                                <td>{{ $negativado->cpf }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <h1>Não encontra-se dividas neste CPF</h1>
    @endif

@endsection
