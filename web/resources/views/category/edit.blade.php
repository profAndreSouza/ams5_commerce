@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/sobreNos.css" />
@endsection

@section('content')

<form action="{{ route('categories.update', $category->id) }}" method="post">
    @csrf
    @method('PUT')
    <h1> Editar Categorias </h1>

    <label for="name">Nome</label>
    <input type="text" name="name" id="name" value="{{ $category->name }}"> <br />

    <label for="name">Categoria pai</label>
    <select name="parent_id" id="parent_id">
        <option value=""></option>
    @foreach ($categories as $parentCategory)
        <option value="{{ $parentCategory->id }}" {{ $category->parent_id == $parentCategory->id ? 'selected' : ''}}>
            {{ $parentCategory->name }}
        </option>
    @endforeach
    </select> <br />

    <input type="submit" value="Salvar">
</form>


@endsection