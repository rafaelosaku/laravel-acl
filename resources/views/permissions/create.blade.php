@extends('layouts.app')
@section('title', $title)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$title}}</div>

                    <div class="card-body">

                        <a class="text-success" href="{{route('permissions.index')}}">&leftarrow; Voltar para a listagem</a>

                        @if($errors)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger mt-4" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <form action="{{route('permissions.store')}}" method="post" class="mt-4" autocomplete="off">
                            @csrf

                            <div class="form-group">
                                <label for="name">Permissão</label>
                                <input type="text" class="form-control" id="name" placeholder="Insira a Permissão"
                                       name="name" value="{{ old('name') }}">
                            </div>
{{--                            <div class="form-group">--}}
{{--                                <label for="email">E-mail</label>--}}
{{--                                <input type="email" class="form-control" id="email" placeholder="Insira o email válido"--}}
{{--                                       name="email" value="{{ old('email') }}">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="password">Senha</label>--}}
{{--                                <input type="password" class="form-control" id="password" placeholder="Insira a senha"--}}
{{--                                       name="password" value="{{ old('password') }}">--}}
{{--                            </div>--}}

                            <button type="submit" class="btn btn-block btn-success">Cadastrar Nova Permissão</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
