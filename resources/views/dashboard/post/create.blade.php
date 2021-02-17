@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('post.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Artículo</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Contenido</label>
            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
        </div>  
        <button type="submit" class="btn btn-success btn-sm">Publicar</button>
        <button type="reset" class="btn btn-danger btn-sm">Cancelar</button>
    </form>
</div>

@endsection