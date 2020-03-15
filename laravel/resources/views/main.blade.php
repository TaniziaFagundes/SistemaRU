<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>FeedBack - Ru</title>
</head>
<body>

<nav>
    <div class="nav-wrapper">
        <div class="container">
            <a href="/" class="brand-logo">RU Restaurante Universitário</a>
            <a href="#" data-target="menu-responsive" class="sidenav-trigger">
                <i class="material-icons">menu</i>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="/signup">Cadastro</a></li>
                <li><a href="/login">Login Aluno</a></li>
                <li><a href="/quemsomos">Quem Somos</a></li>
                <li><a href="/loginAdmin">Administrador</a></li>
            </ul>
        </div>

    </div>
</nav>

<ul class="sidenav" id="menu-responsive">
    <li><a href="/signup">Cadastro</a></li>
    <li><a href="/login">Login Aluno</a></li>
    <li><a href="/quemsomos">Quem Somos</a></li>
</ul>

<div class="container">
    <h3>@yield('cabecalho')</h3>

    @yield('conteudo')

</div>

<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">   
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4"> texto aqui
                    content.</p>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Equipe do Projeto</h5>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/TaniziaFagundes">Tanizia Fagundes</a></li>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/MatheusDantas19">Matheus Dantas</a>
                    </li>
                    <li><a class="grey-text text-lighten-3" href="https://github.com/kkkalil">Kalil Fernandes</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Vinicius</a></li>
                </ul>
            </div>

            {{-- imagem git--}}
            <div class="col l1 s2">
                <ul class="carousel carousel-slider" style="width: 150px;">
                    <a class="carousel-item" href="#one!"><img src="https://www.fastcommerce.com.br/lojas/00000001/images/GitHub_Octocat.png?cccfc=1"></a>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2019 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
    </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        M.AutoInit();
    })
</script>
</body>
