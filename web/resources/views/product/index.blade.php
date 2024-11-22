@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/produtos.css" />
@endsection

@section('header')

    <div class="steps">
        <a href="{{ route('product.index') }}">Home</a>
        @if ($categories)
        @foreach ($categories as $category)
        <span class="material-symbols-outlined">
            chevron_right
        </span>
        <a href="{{ route('product.category', $category["slug"]) }}">{{ $category["name"] }}</a>
        @endforeach
        @endif
    </div>
    <div class="topo">
        <div class="top-left">
            <h2>Literatura e Ficção</h2>
            <p>30 resultados</p>
        </div>
        <div class="top-right">
            <select name="order" id="order" class="order"> 
                <option value="" selected disabled>Ordenar por:</option>
                <option value="price-asc">Preço: Menor para Maior</option>
                <option value="price-desc">Preço: Maior para Menor</option>
                <option value="rating">Avaliação dos Clientes</option>
                <option value="newest">Mais Recentes</option>
            </select>
        </div>
    </div>

@endsection

@section('content')

    <aside>
        <h2>Filtro</h2>

        <div class="filter-group">
            <h3>Editora</h3>
            <label class="container">Galera
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
                </label>
                
                <label class="container">Intrínseca
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                
                <label class="container"> Rocco
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                
                <label class="container">Paralela
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Cia das Letras
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Record
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Arqueiro
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
        </div>
        <div class="filter-group">
            <h3>Modelo</h3>
            <label class="container">Capa Dura
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Capa Comum
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Audio Livro
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">E-book
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
        </div>
        <div class="filter-group">
            <h3>Autor(a)</h3>
            <label class="container">Rick Riordan
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Colleen Hoover
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">JK. Rolling
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">George Orwell
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Neil Gaiman
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Suzanne Collins
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">Stephenie Meyer
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="container">James Dasher
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
        </div>
        <div class="filter-group">
            <h3>Preço</h3>
            <input type="range" min="10" max="150">
            <div class="precoFiltro">
                <p>R$10</p>
                <p>R$150</p>
            </div>
        </div>
    </aside>
    <section class="products">
        <div class="cardProduto" onclick="document.location='produtoLivro.html'">
            <img src="/img/1984.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>1984</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/alicenopaisdasmaravilhas.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Alice no País das Maravilhas</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/bibliotecameianoite.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Biblioteca da Meia-Noite</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/coraline.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Coraline</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/duna.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Duna - Livro 1</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/genteansiosa.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Gente Ansiosa</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/passaroseserpentes.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>A Cantiga de Passaros e Serpentes</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/rainhavermelha.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>A Rainha Vermelha</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/caraval.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Trilogia Caraval - Livro 1</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/livro.png" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Box de Livros - Maze Runner</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/percyjackson.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Percy Jackson e a Batalha no Labirinto</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
            <img src="/img/todasassuasimperfeicoes.jpg" alt="Produto 2">
            <div class="cardInfo">
                <div class="pInfos">

                    <div class="pSobre">
                        <h3>Todas as Suas Imperfeições</h3>
                        <p>Livros - Literatura - Ficção</p>
                    </div>
                    <span class="material-symbols-outlined favorite-icon">
                        favorite
                    </span>
                </div>
                <div class="pPreco">
                    <p class="preco">$365 <span>$487</span> <span>-15%</span></p>
                    <p class="avaliacao">★★★★★ (1231)</p>
                </div>
            </div>
        </div>
        <div class="pagination">
            <a href="#" class="prev">&laquo;</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <span>...</span>
            <a href="#">5</a>
            <a href="#" class="next">&raquo;</a>
            </div>
    </section>


@endsection