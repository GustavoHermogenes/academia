@extends('layout.layout')

@section('title', 'Musculação')

@section('conteudo')

<div class="breadcumb-wrapper" data-bg-src="../img/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Musculação</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">INÍCIO</a></li>
                        <li class="active">Página de musculação</li>
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
                        <img src="../img/blog_s1_1.png" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Desperte Seu Potencial: Treino Intenso para Resultados Extraordinários</a></h3>
                        <p>Elevamos a barra da excelência com nosso treino de musculação intenso na VivaBem! Descubra o poder latente dentro de você enquanto esculpe seu corpo, fortalece seus músculos e alcança resultados extraordinários. Seja parte da revolução fitness e transforme seu corpo no melhor que ele pode ser.</p>
                        <a href="#" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/blog_s1_2.png" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Força e Equilíbrio: A Revolução da Musculação na VivaBem</a></h3>
                        <p>Na VivaBem, acreditamos na harmonia entre força e equilíbrio. Experimente nossa abordagem inovadora de musculação, projetada para esculpir cada músculo, promover equilíbrio corporal e elevar sua resistência. Seu caminho para uma transformação total começa aqui. Desperte o equilíbrio, cultive a força!</p>
                        <a href="#" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/blog_s1_3.png" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="#">Transformação Total: Musculação na VivaBem para uma Vida mais Saudável</a></h3>
                        <p>Embarque na jornada de transformação total com a musculação na VivaBem. Nossos treinos personalizados não são apenas sobre músculos, mas sobre promover uma vida mais saudável. Descubra como a musculação pode impulsionar não apenas sua força física, mas também sua saúde mental e emocional. Torne-se a melhor versão de si mesmo conosco!</p>
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


