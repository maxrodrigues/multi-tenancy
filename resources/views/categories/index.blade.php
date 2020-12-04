@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="m-2 row">
            <a name="" id="" class="btn btn-primary" href="{{ route('categories.create') }}" role="button">
                Cadastrar nova
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Categorias') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-inverse">
                            <thead class="thead-inverse">
                                <tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Ação</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td class="align-middle" scope="row">{{ $category->id }}</td>
                                        <td class="align-middle">{{ $category->name }}</td>
                                        <td>
                                            <a name="" id="" class="btn btn-primary"
                                                href="{{ route('categories.edit', ['category' => $category->id]) }}"
                                                role="button">Editar</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">SEM DADOS INSERIDOS</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
