<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eletroinfo') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/vendors.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/algaworks.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/application.css') }}" rel="stylesheet">
</head>
<body>
<div class="aw-layout-loading  js-loading-overlay">
    <div class="aw-layout-loading__container">
        <span class="aw-balls-spinner">Carregando...</span>
    </div>
</div>

<div class="aw-layout-page">

    <nav class="navbar  navbar-fixed-top  navbar-default  js-sticky-reference" id="main-navbar">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand  hidden-xs" href="#">
                    <img alt="AlgaWorks" src="images/logo.png"/>
                </a>

                <ul class="nav  navbar-nav">
                    <li>
                        <a href="#" class="js-sidebar-toggle"><i class="fa  fa-bars"></i></a>
                    </li>
                </ul>
            </div>

            <ul class="nav navbar-nav  navbar-right">

                <li>
                    <a href="#" class="js-search-modal-trigger-show"><i class="fa  fa-search"></i></a>
                </li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa  fa-envelope"></i> <span class="label  label-danger  aw-label-corner">48</span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="javascript:;">Item 1</a></li>
                        <li><a href="javascript:;">Item 2</a></li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa  fa-user"></i>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <div class="aw-logged-user">
                                <img src="https://api.adorable.io/avatars/80/joaodascouves"
                                     width="80" height="80" alt="{{ Auth::user()->name }}" class="aw-logged-user__picture" />
                                <span class="aw-logged-user__name">{{ Auth::user()->name }}</span>
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Meu perfil</a></li>
                        <li><a href="#">Alterar senha</a></li>
                        <li><a href="#">Pagamentos</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ route('logout') }}" title="{{ __('Logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><em class="fa  fa-sign-out"></em></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
    </nav>

    <aside class="aw-layout-sidebar  js-sidebar">
        <div class="aw-layout-sidebar__content">

            <nav class="aw-menu  js-menu">
                <ul class="aw-menu__list">

                    <li class="aw-menu__item">
                        <a href="dashboard.html"><i class="fa  fa-fw  fa-home"></i><span>Dashboard</span></a>
                    </li>

                    <li class="aw-menu__item  is-active">
                        <a href="#">
                            <i class="fa  fa-fw  fa-file-text"></i><span>Cadastros</span>
                            <i class="aw-menu__navigation-icon  fa"></i>
                        </a>

                        <ul class="aw-menu__list  aw-menu__list--sublist">
                            <li class="aw-menu__item  aw-menu__item--link"><a href="cadastro-produto.html">Cadastro de produto</a></li>
                            <li class="aw-menu__item  aw-menu__item--link  is-active"><a href="pesquisa-produtos.html">Pesquisa de produtos</a></li>
                            <li class="aw-menu__item  aw-menu__item--link"><a href="tabela-sem-dados.html">Tabela sem dados</a></li>
                        </ul>
                    </li>

                    <li class="aw-menu__item  is-expanded">
                        <a href="#">
                            <i class="fa  fa-fw  fa-file-text"></i><span>Páginas comuns</span>
                            <i class="aw-menu__navigation-icon  fa"></i>
                        </a>

                        <ul class="aw-menu__list  aw-menu__list--sublist">
                            <li class="aw-menu__item  aw-menu__item--link"><a href="pagina-vazia.html">Página vazia</a></li>
                            <li class="aw-menu__item  aw-menu__item--link"><a href="login.html">Login</a></li>
                            <li class="aw-menu__item  aw-menu__item--link"><a href="esqueceu-a-senha.html">Esqueceu a senha</a></li>
                            <li class="aw-menu__item  aw-menu__item--link"><a href="403.html">403</a></li>
                            <li class="aw-menu__item  aw-menu__item--link"><a href="404.html">404</a></li>
                            <li class="aw-menu__item  aw-menu__item--link"><a href="500.html">500</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>

        </div>
    </aside>

    <section class="aw-layout-content  js-content">
        @yield('content')
    </section>

    <footer class="aw-layout-footer  js-content">
        <div class="container-fluid">
            <span class="aw-footer-disclaimer">&copy; 2019 Eletroinfo. Todos os direitos reservados.</span>
        </div>
    </footer>

</div>

<div class="aw-search-modal  js-search-modal">
    <form action="#" class="aw-search-modal__form">
        <input class="aw-search-modal__input  js-search-modal-input" type="text" placeholder="O que você está procurando?"/>
        <div class="aw-search-modal__input-icon">
            <i class="glyphicon  glyphicon-search  js-search-modal-go"></i>
        </div>
    </form>

    <div class="aw-search-modal__controls">
        <i class="glyphicon glyphicon-remove  js-search-modal-close"></i>
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/vendors.min.js') }}" defer></script>
<script src="{{ asset('js/algaworks.min.js') }}" defer></script>

</body>
</html>
