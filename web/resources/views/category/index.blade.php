@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/sobreNos.css" />
@endsection

@section('content')
<h1> Categorias </h1>
<br />
<a href="{{ route('categories.create') }}">Cadastrar Categoria</a>
<br />
<table style="width: 80%">
    <thead>
        <tr>
            <td>Categoria</td>
            <td>Slug</td>
            <td>Categoria Pai</td>
            <td coslpan="2">Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->parent ? $category->parent->name : '' }}</td>
            <td><a href="{{ route('categories.edit', $category->id) }}">Editar</a></td>
            <td>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza que quer excluir esta categoria?');">
                        Excluir
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



@endsection