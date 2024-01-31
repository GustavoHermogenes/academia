@extends('layout.layout')

@section('title', 'Meditação')

@section('conteudo')
<div class="breadcumb-wrapper" data-bg-src="../img/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Meditação</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">INÍCIO</a></li>
                        <li class="active">Página de meditação</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<!--==============================
Blog Area
==============================-->
<section class="blog-area space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/meditacao1.jpeg" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Serenidade Interior: Descubra a Meditação Profunda na VivaBem</a></h3>
                        <p> Embarque em uma jornada de descoberta interior com nossa prática profunda de meditação na VivaBem! Liberte-se do caos do cotidiano enquanto aprende a cultivar a serenidade dentro de si. Deixe que nossas técnicas guiadas o conduzam a um estado de tranquilidade, renovando sua mente, corpo e espírito. Descubra a paz que existe dentro de você.</p>
                        <a href="#" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/meditacao2.jpeg" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Mente Calma, Coração Aberto: Meditação Guiada na VivaBem</a></h3>
                        <p> Na VivaBem, acreditamos no poder transformador da meditação guiada. Aprenda a acalmar sua mente, abrir seu coração e encontrar um refúgio de paz em meio ao frenesi da vida diária. Deixe que nossas práticas guiadas o levem a um estado de harmonia, onde a clareza mental e a paz interior se tornam seus aliados constantes.</p>
                        <a href="#" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/meditacao3.jpeg" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Equilíbrio Interior: Meditação para Uma Vida Plena na VivaBem</a></h3>
                        <p>Busque o equilíbrio interior em cada sessão de meditação na VivaBem. Descubra como as práticas contemplativas podem criar uma base sólida para uma vida plena e significativa. Sintonize-se com seu eu interior, alivie o estresse e descubra uma sensação duradoura de equilíbrio. Junte-se a nós e comece a jornada para uma mente tranquila e uma vida mais plena.</p>
                        <a href="#" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="pagination">
                    <ul>
                        <li><a href="blog.html">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html">3</a></li>
                        <li><a href="blog.html"><i class="fas fa-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_search">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>

                    <div class="widget">
                        <h3 class="widget_title">Postagens recentes</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="#"><img src="../img/recent-post1.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="#">Estratégias essenciais para maximizar seu treino</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="#"><img src="../img/recent-post2.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="#">Treinamento funcional na sua rotina...</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="#"><img src="../img/recent-post3.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="#">
                                        Conselhos sobre dicas de nutrição para frequentadores de academia</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget_categories">
                        <h3 class="widget_title">Todas as modalidades</h3>
                        <ul>
                            <li>
                                <a href="{{ url('modalidades/musculacao') }}"><i class="fa-solid fa-arrow-right"></i>Musculação</a>
                            </li>
                            <li>
                                <a href="{{ url('modalidades/peso') }}"><i class="fa-solid fa-arrow-right"></i>PowerLifting</a>
                            </li>
                            <li>
                                <a href="{{ url('modalidades/natacao') }}"><i class="fa-solid fa-arrow-right"></i>Natação</a>
                            </li>
                            <li>
                                <a href="{{ url('modalidades/meditacao') }}"><i class="fa-solid fa-arrow-right"></i>Meditação</a>
                            </li>
                            <li>
                                <a href="{{ url('modalidades/lutas') }}"><i class="fa-solid fa-arrow-right"></i>Lutas em geral</a>
                            </li>
                        </ul>
                    </div>

                    <div class="widget widget_gallery">
                        <h3 class="widget_title">Galeria</h3>
                        <div class="insta-feed">
                            <a href="blog.html"><img src="../img/widget1-1.png" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="../img/widget1-2.png" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="../img/widget1-3.png" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="../img/widget1-4.png" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="../img/widget1-5.png" alt="img">
                            <i class="fab fa-instagram"></i></a>
                            <a href="blog.html"><img src="../img/widget1-6.png" alt="img">
                                <i class="fab fa-instagram"></i></a>
                        </div>
                    </div>

                    <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Tags Populares </h3>
                        <div class="tagcloud">
                            <a href="blog.html">CONSELHO</a>
                            <a href="blog.html">FIT</a>
                            <a href="blog.html">AUTOR</a>
                            <a href="blog.html">FAMÍLIA</a>
                            <a href="blog.html">VIVABEM</a>
                            <a href="blog.html">SAÚDE</a>
                            <a href="blog.html">FITNESS</a>
                            <a href="blog.html">ACADEMIA</a>
                            <a href="blog.html">JULGAMENTO</a>
                            <a href="blog.html">SOLUÇÃO</a>
                            <a href="blog.html">TREINAMENTO</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>



@endsection
