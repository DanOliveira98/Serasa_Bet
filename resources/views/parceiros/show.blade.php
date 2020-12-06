@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="form-row">
            <div class="col-sm-12">
                <h5>Meus negativados <a
                        href="{{ route('parceiros.negativados.create', Auth::user()) }}"
                        class="btn btn-sm btn-primary">novo</a>
                </h5>
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Nome da Mãe</th>
                        <th>Valor da Divida</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Ações</th>

                    </tr>
                    </thead>
                    <tbody>
                    @forelse($negativados as $negativado)
                        <tr>
                            <td>{{ $negativado->nome }}</td>
                            <td>{{ $negativado->nome_mae }}</td>
                            <td>{{ $negativado->valor_divida }}</td>
                            <td>{{ $negativado->cpf }}</td>
                            <td>{{ $negativado->rg}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Sem telefones cadastrados.</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
