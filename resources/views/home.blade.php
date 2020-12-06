@extends('layouts.app')

@section('content')
    <div>
        <h1 class="h3 text-center">Sistema de Proteção a Sites de Apostas</h1>

        <div class="row mt-5 container">
            <div class="col-sm-9">
                <form action="{{ route('buscas') }}" method="post">
                    @csrf
                    <label for="search" class="h4">Informe o CPF</label>
                    <input class="form-control" id="search" name="search"
                           placeholder="Digite o termo desejado e tecle enter" type="text">
                </form>
            </div>
        </div>
    </div>
@endsection
