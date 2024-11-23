@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/style.css" />
@endsection



@section('header')

    <div class="container3">
      <ul>
      @foreach ($categories as $category)
        <li class="category">
          <a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a>
          <div class="subcategories">
          @foreach ($category->children as $subCategory)
            <div class="column">
              <h4>{{ $subCategory->name }}</h4>
            @foreach ($subCategory->children as $subCategoryLvl2)
              <a href="{{ route('categories.show', $subCategoryLvl2->slug) }}">{{ $subCategoryLvl2->name }}</a>
            @endforeach
            </div>
          @endforeach
          </div>
        </li>
      @endforeach
      </ul>
    </div>
    
    <div class="hero">
      <div class="hero-left">
        <img src="/img/ecommerce.svg">
      </div>
      <div class="hero-right">
        <h1><span>Best Choice<span> <br>Sempre sua melhor escolha</h1>
        <button class="compre" onclick="document.location='categorias.html'"><span class="material-symbols-outlined">
            orders
          </span> Compre Agora</button>
      </div>
    </div>

@endsection



@section('content')

    <section class="categorias">
      <div class="linha">
        <h2>Categorias</h2>
        <a href="categorias.html">Ver Tudo <span class="material-symbols-outlined">
            arrow_forward_ios
          </span></a>
      </div>
      <div class="cardsCategoria">
        <div onclick="document.location='produtos.html'" class="cardCategoria">Roupas</div>
        <div onclick="document.location='produtos.html'" class="cardCategoria">Jogos</div>
        <div onclick="document.location='produtos.html'" class="cardCategoria">Eletrônicos</div>
        <div onclick="document.location='produtos.html'" class="cardCategoria">Livros</div>
        <div onclick="document.location='produtos.html'" class="cardCategoria">Casa</div>
        <div onclick="document.location='produtos.html'" class="cardCategoria">Papelaria</div>
      </div>
    </section>
    <section class="lojas">
      <div class="linha">
        <h2>Nossas Lojas</h2>
        <a href="#">Ver Tudo <span class="material-symbols-outlined">
            arrow_forward_ios
          </span></a>
      </div>
      <div class="cardsLojas">
        <div class="cardLoja">
          <img src="/img/loja1.png" alt="Loja 1">
          <div class="infos">
            <div class="sobre">
              <h3>Nome da Loja</h3>
              <p>Descrição</p>
            </div>
            <a href="#" class="visitar">Ver Loja</a>
          </div>
        </div>
        <div class="cardLoja">
          <img src="/img/loja2.png" alt="Loja 2">
          <div class="infos">
            <div class="sobre">
              <h3>Nome da Loja</h3>
              <p>Descrição</p>
            </div>
            <a href="#" class="visitar">Ver Loja</a>
          </div>
        </div>
        <div class="cardLoja">
          <img src="/img/loja3.png" alt="Loja 3">
          <div class="infos">
            <div class="sobre">
              <h3>Nome da Loja</h3>
              <p>Descrição</p>
            </div>
            <a href="#" class="visitar">Ver Loja</a>
          </div>
        </div>
      </div>
    </section>
    <section class="produtos">
      <div class="linha">
        <h2>Melhores Produtos</h2>
        <a href="produtos.html">Ver Tudo <span class="material-symbols-outlined">
            arrow_forward_ios
          </span></a>
      </div>

      <div class="cardsProdutos">
        <div onclick="document.location='produtoRoupa.html'" class="cardProduto">
          <img src="/img/roupa.png" alt="Produto 2">
          <div class="cardInfo">
            <div class="pInfos">

              <div class="pSobre">
                <h3>Mango</h3>
                <p>Feminino - Black - Regular fit</p>
              </div>
              <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                favorite
            </span>
            </div>
            <div class="pPreco">
              <p class="preco">$228 <span>$290</span> <span class="desconto">-10%</span></p>
              <p class="avaliacao">★★★★★ (299)</p>
            </div>
          </div>
        </div>
        <div onclick="document.location='produtoEletronico.html'" class="cardProduto">
          <img src="/img/liquidificador.png" alt="Produto 2">
          <div class="cardInfo">
            <div class="pInfos">

              <div class="pSobre">
                <h3>Liquidificador</h3>
                <p>Casa - Cozinha - Eletrodoméstico</p>
              </div>
              <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                favorite
            </span>
            </div>
            <div class="pPreco">
              <p class="preco">$95 <span>$145</span> <span>-7%</span></p>
              <p class="avaliacao">★★★★★ (1521)</p>
            </div>
          </div>
        </div>
        <div onclick="document.location='produtoEletronico.html'" class="cardProduto">
          <img src="/img/alexa.png" alt="Produto 2">
          <div class="cardInfo">
            <div class="pInfos">

              <div class="pSobre">
                <h3>Echo Dot 5ª geração</h3>
                <p>Inteligência Artificial & IoT - Amazon</p>
              </div>
              <span class="material-symbols-outlined favorite-icon" id="favoriteIcon">
                favorite
            </span>
            </div>
            <div class="pPreco">
              <p class="preco">$125 <span>$156</span> <span>-6%</span></p>
              <p class="avaliacao">★★★★★ (860)</p>
            </div>
          </div>
        </div>
        <div onclick="document.location='produtoLivro.html'" class="cardProduto">
          <img src="/img/livro.png" alt="Produto 2">
          <div class="cardInfo">
            <div class="pInfos">

              <div class="pSobre">
                <h3>Box de Livros - Maze Runner</h3>
                <p>Livros - Box - Ficção</p>
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
      </div>
    </section>

    <section class="anuncio">
      <div class="mover">
        <span class="material-symbols-outlined">
          arrow_back_ios
        </span>
      </div>
      <div class="adLoja">
        <h3>Loja</h3>
        <p>Veja a loja X</p>
      </div>
      <div class="adImg">
        <img src="/img/iphone.png" alt="Imagem de iphone">
      </div>
      <div class="mover">
        <span class="material-symbols-outlined">
          arrow_forward_ios
        </span>
      </div>
    </section>
    <section class="explorar">
      <div class="card">
        <div class="card-left">
          <h2>Never-Ending Summer</h2>
          <h4>Throwback Shirts & all-day dressed</h4>
          <a href="categorias.html">Explore essa categoria</a>
        </div>
        <div class="card-right">
          <img src="/img/explorar1.png" alt="Imagem">
        </div>
      </div>
      <div class="card">
        <div class="card-left">
          <h2>Never-Ending Summer</h2>
          <h4>Throwback Shirts & all-day dressed</h4>
          <a href="categorias.html">Explore essa categoria</a>
        </div>
        <div class="card-right">
          <img src="/img/explorar2.png" alt="Imagem">
        </div>
      </div>
    </section>

    <section class="newsletter">
      <div class="newsletter-card">
        <h2>BestChoice</h2>
        <p>Registre o seu email para não perder as ofertas</p>
        <form>
          <input type="email" placeholder="Insira seu email">
          <button type="submit">➔</button>
        </form>
      </div>
    </section>
@endsection
