<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('css')
  <script src="/js/menu.js"></script>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>Best Choice</title>
</head>

<body>
  <nav class="nav">
    <div class="container1">
      <div class="logo">
        <img src="/img/logo.PNG" class="img_logo">
        <h1><a href="{{ route('home.index') }}">Best Choice</a></h1>
      </div>
      <ul>
        <a href="{{ route('home.about') }}">Sobre Nós</a>
        <a href="#">Entre em Contato</a>
        <a href="#">Ajuda e Suporte </a>
      </ul>
    </div>
    <div class="container2">
      <div class="cont2-left">
        <input type="text" class="busca" placeholder="Pesquisar...">
        <button class="btnBusca"><span class="material-symbols-outlined">
            search
          </span></button>
      </div>
      <ul>
        <button class="menu" onclick="document.location='login.html'"><span class="material-symbols-outlined">
            login
          </span> Login </button>
          <button class="menu" onclick="document.location='cadastro.html'"><span class="material-symbols-outlined">
            person_add
            </span> Cadastre-se </button>
        <button class="menu" onclick="document.location='favoritos.html'"><span class="material-symbols-outlined">
            favorite
          </span> Favoritos </button>
        <button class="menu" onclick="document.location='carrinho.html'"><span class="material-symbols-outlined">
            shopping_cart
          </span> Carrinho </button>
      </ul>
    </div>
    
    @yield('header')

  </nav>
  <main>
    @yield('content')
  </main>
  <footer>
    <div class="footer-content">
      <div class="footer-column">
        <h3>Empresa</h3>
        <a href="{{ route('home.about') }}">Sobre nós</a>
        <a href="#">Nossa Loja</a>
        <a href="#">Entre em contato</a>
      </div>
      <div class="footer-column">
        <h3>Oportunidades</h3>
        <a href="#">Programa de Vendas</a>
        <a href="#">Anúncios</a>
        <a href="#">Cooperação</a>
      </div>
      <div class="footer-column">
        <h3>Como comprar</h3>
        <a href="#">Fazendo o pagamento</a>
        <a href="#">Opções de Entrega</a>
        <a href="#">Proteção de Compra</a>
        <a href="#">Guia do Usuário</a>
      </div>
      <div class="footer-column">
        <h3>Ajuda</h3>
        <a href="#">Entre em contato</a>
        <a href="#">FAQ</a>
        <a href="#">Política de Privacidade</a>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="footer1">
        <div class="pagamentos">
          <img src="/img/visa.png" alt="visa">
          <img src="/img/master.png" alt="master">
          <img src="/img/paypal.png" alt="paypal">
        </div>

      </div>
      <hr size="1" width="95%">
      <div class="footer2">
        <p>Fatec - Sorocaba, São Paulo-Brasil</p>
        <p>©2024 Todos os direitos reservados BestChoice Store</p>

        <div class="social-icons">
          <a href="#"><img src="/img/facebook.png" alt="Facebook"></a>
          <a href="#"><img src="/img/instagram.png" alt="Instagram"></a>
          <a href="#"><img src="/img/telegram.png" alt="telegram"></a>
        </div>
      </div>
    </div>
  </footer>
  <script src="/js/coracao.js"></script>
</body>

</html>