<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Ru Restaurante Universitário</title>
</head>

<body>
    <ul id="dropConta" class="dropdown-content">
        <li><a href="/createAdmin">Cadastrar Administrador</a></li>
        <li class="divider"></li>
        <li><a href="/updateAdmin">Alterar seus dados</a></li>
        <li class="divider"></li>
        <li><a href="/deleteAdmin">Excluir sua conta</a></li>
    </ul>
    <ul id="dropRU" class="dropdown-content">
        <li><a href="/createRU">Cadastrar novo RU</a></li>
        <li class="divider"></li>
        <li><a href="/updateAdminRU">Administrar novo RU</a></li>
        <li class="divider"></li>
        <li><a href="updateRU">Alterar dados de RU</a></li>
        <li class="divider"></li>
        <li><a href="/deleteAdminRU">Deixar de Administrar um RU</a></li>
        <li class="divider"></li>
        <li><a href="/deleteRU">Excluir RU</a></li>
    </ul>
    <ul id="dropPrato" class="dropdown-content">
        <li><a href="/criarprato">Cadastrar novo Prato</a></li>
        <li class="divider"></li>
        <li><a href="/deleteprato">Excluir Prato</a></li>
    </ul>
    <ul id="dropIngrediente" class="dropdown-content">
        <li><a href="/createIngrediente">Cadastrar novo Ingrediente</a></li>
        <li class="divider"></li>
        <li><a href="/updateIngrediente">Alterar informações de Ingrediente</a></li>
        <li class="divider"></li>
        <li><a href="/deleteIngrediente">Excluir Ingrediente</a></li>
    </ul>
    <ul id="dropReclamacao" class="dropdown-content">
        <li><a href="/createResposta">Responder Reclamação</a></li>
         <li class="divider"></li>
            <li><a href="/updateResposta">Alterar Resposta</a></li>
            <li class="divider"></li>
            <li><a href="/deleteResposta">Excluir Resposta</a></li>
    </ul>

    <ul id="dropRelatorio" class="dropdown-content">
        <li><a href="/relatorio1">Relatório 1</a></li>
        <li class="divider"></li>
        <li><a href="/relatorio2">Relatório 2</a></li>
        <li class="divider"></li>
        <li><a href="/relatorio3">Relatório 3</a></li>
    </ul>

    <nav class="nav-extended">
        <div class="nav-wrapper">
            <div class="container">
                <a href="mainAdmin" class="brand-logo">RU Restaurante Universitário</a>
                <a href="#" data-target="menu-responsive" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="/logoutAdmin">Sair</a></li>
                </ul>
            </div>
        </div>
        <div class='nav-wrapper'>
            <div class="container">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a class="dropdown-trigger" href="#!" data-target="dropReclamacao">Gerir Reclamações<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropConta">Gerir Contas<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropRU">Gerir RU<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropPrato">Gerir Pratos<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropIngrediente">Gerir Ingredientes<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a class="dropdown-trigger" href="#!" data-target="dropRelatorio">Relatórios<i class="material-icons right">arrow_drop_down</i></a></li>
                </ul>
            </div>
        </div>
    </nav>


    <ul class="sidenav" id="menu-responsive">
        <li><a href="/signup">Sign Up</a></li>
        <li><a href="/login">Login</a></li>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            M.AutoInit();
        })
    </script>
</body>