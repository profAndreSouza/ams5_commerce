@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/sobreNos.css" />
@endsection

@section('content')

<form action="{{ route('categories.store') }}" method="post">
    @csrf
    <h1> Cadastrar Categorias </h1>

    <label for="name">Nome</label>
    <input type="text" name="name" id="name"> <br />

    <label for="name">Categoria pai</label>
    <select name="parent_id" id="parent_id">
    <option value=""></option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
    </select> <br />

    <input type="submit" value="Cadastrar">
</form>


@endsection