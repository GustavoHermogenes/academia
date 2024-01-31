@extends('layout.layout')

@section('title', 'Lutas')

@section('conteudo')

<div class="breadcumb-wrapper" data-bg-src="../img/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Lutas</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">INÍCIO</a></li>
                        <li class="active">Página de lutas</li>
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
                        <img src="../img/lutas1.jpeg" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Força e Técnica: Treinamento de Lutas de Elite na VivaBem</a></h3>
                        <p> Entre no ringue conosco! Descubra o treinamento de lutas de elite na VivaBem, onde força e técnica se encontram para criar atletas excepcionais. Seja você um iniciante ou um lutador experiente, nossa abordagem personalizada irá aprimorar suas habilidades, fortalecer seu corpo e elevar seu espírito de luta. Esteja preparado para desafios emocionantes e superações constantes!</p>
                        <a href="#" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/lutas2.jpeg" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Transforme-se em um Guerreiro: Treinamento de Lutas na VivaBem</a></h3>
                        <p>Torne-se o guerreiro que sempre quis ser com nosso treinamento de lutas na VivaBem. Deixe-nos guiá-lo através de técnicas avançadas, estratégias inteligentes e condicionamento físico de alto nível. Supere seus limites, abrace a resiliência e transforme-se em um verdadeiro guerreiro. A revolução das lutas começa aqui!</p>
                        <a href="#" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/lutas3.jpeg" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Disciplina e Determinação: A Arte das Lutas na VivaBem</a></h3>
                        <p>Na VivaBem, abraçamos a disciplina e a determinação como pilares fundamentais de nossa abordagem para as lutas. Descubra como nossos treinadores especializados ajudarão você a desenvolver habilidades técnicas sólidas, resistência incomparável e a mentalidade vencedora necessária para brilhar no octógono. Seja parte da revolução das lutas conosco!</p>
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
