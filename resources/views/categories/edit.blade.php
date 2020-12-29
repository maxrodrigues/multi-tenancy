@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="m-2 row">
            <a name="" id="" class="btn btn-primary" href="{{ routeTenant('categories.index') }}" role="button">
                Voltar
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Title</h4>
                    </div>
                    <form action="{{ routeTenant('categories.update', ['category' => $category->id]) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nome</label>
                                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                            placeholder="" value="@if($category){{$category->name}}@endif">
                            </div>
                        </div>
                        <div class="card-footer text-muted">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
