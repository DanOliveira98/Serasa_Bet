@extends('layouts.app')

@section('content')
    <div class="container">
        <h4>Cadastro Negativado</h4>
        <div class="mt-5">
            <form action="{{route('parceiros.negativados.store', Auth::user())}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                    <div class="col-md-6">
                        <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror"
                               name="nome" value="{{ old('nome') }}" required autocomplete="nome" autofocus>

                        @error('nome')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nome_mae" class="col-md-4 col-form-label text-md-right">{{ __('Nome da Mãe') }}</label>

                    <div class="col-md-6">
                        <input id="nome_mae" type="text" class="form-control @error('nome_mae') is-invalid @enderror"
                               name="nome_mae" value="{{ old('nome_mae') }}" required autocomplete="nome_mae" autofocus>

                        @error('nome_mae')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                    <div class="col-md-6">
                        <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror"
                               name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                        @error('cpf')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="rg" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>

                    <div class="col-md-6">
                        <input id="rg" type="text" class="form-control @error('rg') is-invalid @enderror"
                               name="rg" value="{{ old('rg') }}" required autocomplete="rg" autofocus>

                        @error('rg')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="valor_divida"
                           class="col-md-4 col-form-label text-md-right">{{ __('Valor Divida') }}</label>

                    <div class="col-md-6">
                        <input id="valor_divida" type="number"
                               class="form-control @error('valor_divida') is-invalid @enderror"
                               name="valor_divida" value="{{ old('valor_divida') }}" required
                               autocomplete="valor_divida" autofocus>

                        @error('valor_divida')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Salvar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
