@extends('layouts.app')

@section('content')
    <section class="uk-offcanvas-content">
        <!-- menu main -->
        <nav class="uk-navbar-container mb-menu theme-dense" uk-navbar="mode:click">
            <a href="" class="uk-navbar-item uk-logo">
                Logo
            </a>
            <div class="uk-navbar-right">
                <ul class="uk-navbar-nav">

                    <li class="mb-active uk-visible@m">
                        <a href=""  style="min-height: auto !important; margin: 3px;">
                            <img src="{{ asset('img/user_male.png') }}" alt="user" style="height:3.5em;position:relative;right:0.5em;" />
                            {{ Auth::user()->name }}
                        </a>
                        <div class="uk-navbar-dropdown" id="mb-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li><a href="{{ route('logout') }}"><span uk-icon="sign-out"></span>Sair</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- closed menu -->

        <section class="mb-body">
            <!--  menu sidebar -->
            <nav class="uk-card uk-card-secondary uk-card-body  mb-menu-sidebar uk-visible@m">
                <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                    <li class="uk-nav-center">
                        <a  href="#">

                            <img src="{{ asset('img/user_male.png') }}"  class="mb-picture-user" alt="user" />

                            <div style="position:relative;top:3px;">
                                <strong class="color">{{ Auth::user()->name }}</strong>
                                <span class="color" style="font-size: 80%;font-style:oblique;"> {{ Auth::user()->email }} </span>
                            </div>
                        </a>
                    </li>
                    <li class="uk-nav-divider"></li>
                    <li class="uk-margin">
                        <a href=""><span uk-icon="dashboard"></span> Dashboard</a>
                    </li>
                    <li class="uk-parent uk-margin">
                        <a href="#"><span class="uk-margin-small-right" uk-icon="plus-circle"></span> Add</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#"><span uk-icon='money'></span>Sub item</a></li>
                            <li><a href="#"><span uk-icon='money'></span>Sub item</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent uk-margin">
                        <a href="#"><span class="uk-margin-small-right" uk-icon="plus-circle"></span> Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#"><span uk-icon='money'></span>Sub item</a></li>
                            <li><a href="#"><span uk-icon='money'></span>Sub item</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent uk-margin">
                        <a href="#"><span class="uk-margin-small-right" uk-icon="file"></span> Parent</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#">Sub item</a></li>
                            <li><a href="#">Sub item</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent uk-margin">
                        <a href="#"><span class="uk-margin-small-right" uk-icon="cog"></span> settings</a>
                        <ul class="uk-nav-sub">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Sub item</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- closed menu sidebar -->

            <!-- content page -->
            <main class="mb-content">
                <section class="uk-flex uk-padding-small">
                    <!-- Itens opções -->
                    <div class="uk-card uk-card-default uk-width-1-5@s uk-card-hover">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="circle circle-blue uk-text-center">
                                        <svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg" style='margin-top:0.9em;'>
                                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">0</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Receita</time></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Receita  -->
                    <div class="uk-card uk-card-default uk-width-1-5@m uk-width-1-1@s uk-card-hover uk-margin-left">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="circle circle-green uk-text-center">
                                        <svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg" style='margin-top:0.9em;'>
                                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">0</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Receita</time></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Receita  -->
                    <div class="uk-card uk-card-default uk-width-1-5@m uk-width-1-1@s uk-card-hover uk-margin-left">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="circle circle-purple uk-text-center">
                                        <svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg" style='margin-top:0.9em;'>
                                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">0</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Receita</time></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Receita  -->
                    <div class="uk-card uk-card-default uk-width-1-5@m uk-width-1-1@s uk-card-hover uk-margin-left">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="circle circle-orange uk-text-center">
                                        <svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg" style='margin-top:0.9em;'>
                                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">0</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Receita</time></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Receita  -->
                    <div class="uk-card uk-card-default uk-width-1-5@m uk-width-1-1@s uk-card-hover uk-margin-left">
                        <div class="uk-card-header">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <div class="circle circle-red uk-text-center">
                                        <svg fill="#FFFFFF" height="36" viewBox="0 0 24 24" width="36" xmlns="http://www.w3.org/2000/svg" style='margin-top:0.9em;'>
                                            <path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <h3 class="uk-card-title uk-margin-remove-bottom">0</h3>
                                    <p class="uk-text-meta uk-margin-remove-top"><time datetime="2016-04-01T19:00">Receita</time></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="uk-flex uk-padding-small">
                    <div class="uk-width-1-1 uk-card uk-card-default uk-card-hover uk-card-body">
                        <div id="grafico"></div>
                    </div>

                    <div class="uk-width-1-1 uk-card uk-card-default uk-card-hover uk-card-body uk-margin-left">
                        <div id="graphs"></div>
                    </div>
                </section>
            </main>
            <!-- closed content page -->
        </section>
    </section>
@endsection
