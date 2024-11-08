@extends('layouts.main')

@section('css')
<link rel="stylesheet" href="/css/style.css" />
@endsection



@section('header')

    <div class="container3">
      <ul>
        <li class="category">
          <a href="#">Roupa</a>
          <div class="subcategories">
            <div class="column">
              <h4>Feminino</h4>
              <a href="#">Vestidos</a>
              <a href="#">Camisetas</a>
              <a href="#">Calças</a>
            </div>
            <div class="column">
              <h4>Masculino</h4>
              <a href="#">Camisetas</a>
              <a href="#">Calças</a>
              <a href="#">Shorts</a>
            </div>
            <div class="column">
              <h4>Infantil</h4>
              <a href="#">Camisetas</a>
              <a href="#">Calças</a>
              <a href="#">Inverno</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Eletrônico</a>
          <div class="subcategories">
            <div class="column">
              <h4>Celulares</h4>
              <a href="#">Smartphones</a>
              <a href="#">Acessórios</a>
            </div>
            <div class="column">
              <h4>Computadores</h4>
              <a href="#">Laptops</a>
              <a href="#">Desktops</a>
            </div>
            <div class="column">
              <h4>Acessórios</h4>
              <a href="#">Fones de ouvido</a>
              <a href="#">Carregadores</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Esportes</a>
          <div class="subcategories">
            <div class="column">
              <h4>Equipamentos</h4>
              <a href="#">Bolas</a>
              <a href="#">Raquetes</a>
            </div>
            <div class="column">
              <h4>Roupas</h4>
              <a href="#">Camisetas</a>
              <a href="#">Shorts</a>
            </div>
            <div class="column">
              <h4>Calçados</h4>
              <a href="#">Tênis</a>
              <a href="#">Chuteiras</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Beleza</a>
          <div class="subcategories">
            <div class="column">
              <h4>Maquiagem</h4>
              <a href="#">Batons</a>
              <a href="#">Sombras</a>
            </div>
            <div class="column">
              <h4>Cabelos</h4>
              <a href="#">Shampoos</a>
              <a href="#">Condicionadores</a>
            </div>
            <div class="column">
              <h4>Pele</h4>
              <a href="#">Cremes</a>
              <a href="#">Protetores Solares</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Brinquedos</a>
          <div class="subcategories">
            <div class="column">
              <h4>Idade</h4>
              <a href="#">0-2 anos</a>
              <a href="#">3-5 anos</a>
            </div>
            <div class="column">
              <h4>Tipo</h4>
              <a href="#">Educativos</a>
              <a href="#">Peluche</a>
            </div>
            <div class="column">
              <h4>Outros</h4>
              <a href="#">Jogos</a>
              <a href="#">Puzzles</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Livros</a>
          <div class="subcategories">
            <div class="column">
              <h4>Gênero</h4>
              <a href="#">Ficção</a>
              <a href="#">Não-Ficção</a>
            </div>
            <div class="column">
              <h4>Infantil</h4>
              <a href="#">Contos</a>
              <a href="#">Educacionais</a>
            </div>
            <div class="column">
              <h4>Outros</h4>
              <a href="#">Biografias</a>
              <a href="#">Autoajuda</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Papelaria</a>
          <div class="subcategories">
            <div class="column">
              <h4>Escritório</h4>
              <a href="#">Canetas</a>
              <a href="#">Papéis</a>
            </div>
            <div class="column">
              <h4>Escolar</h4>
              <a href="#">Mochilas</a>
              <a href="#">Cadernos</a>
            </div>
            <div class="column">
              <h4>Artes</h4>
              <a href="#">Tinta</a>
              <a href="#">Pincéis</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Pet Shop</a>
          <div class="subcategories">
            <div class="column">
              <h4>Cães</h4>
              <a href="#">Rações</a>
              <a href="#">Brinquedos</a>
            </div>
            <div class="column">
              <h4>Gatos</h4>
              <a href="#">Rações</a>
              <a href="#">Arranhadores</a>
            </div>
            <div class="column">
              <h4>Acessórios</h4>
              <a href="#">Camas</a>
              <a href="#">Guias</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Jardinagem</a>
          <div class="subcategories">
            <div class="column">
              <h4>Plantas</h4>
              <a href="#">Flores</a>
              <a href="#">Folhagens</a>
            </div>
            <div class="column">
              <h4>Ferramentas</h4>
              <a href="#">Pás</a>
              <a href="#">Tesouras</a>
            </div>
            <div class="column">
              <h4>Outros</h4>
              <a href="#">Adubos</a>
              <a href="#">Vasos</a>
            </div>
          </div>
        </li>
        <li class="category">
          <a href="#">Ferramentas</a>
          <div class="subcategories">
            <div class="column">
              <h4>Manuais</h4>
              <a href="#">Chaves</a>
              <a href="#">Martelos</a>
            </div>
            <div class="column">
              <h4>Elétricas</h4>
              <a href="#">Furadeiras</a>
              <a href="#">Serras</a>
            </div>
            <div class="column">
              <h4>Acessórios</h4>
              <a href="#">Parafusos</a>
              <a href="#">Pregos</a>
            </div>
          </div>
        </li>
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
