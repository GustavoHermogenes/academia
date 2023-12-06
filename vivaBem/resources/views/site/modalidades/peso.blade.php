@extends('layout.layout')

@section('title', ' Levantamento de peso')

@section('conteudo')

<div class="breadcumb-wrapper" data-bg-src="../img/breadcrumb-bg.png">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">PowerLifting</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{ url('/') }}">INÍCIO</a></li>
                        <li class="active">Página de powerLifting</li>
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
                        <h3 class="blog-title"><a href="blog-details.html">Elevando Limites: Programa Intenso de Powerlifting na VivaBem</a></h3>
                        <p> Quebre as barreiras do seu potencial com nosso programa de Powerlifting na VivaBem! Descubra a emoção de superar seus próprios limites enquanto desenvolve força bruta, resistência e técnica. Seja parte de uma comunidade dedicada a alcançar marcas pessoais e dominar a arte do Powerlifting. Prepare-se para elevar seus treinos a novos patamares!</p>
                        <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/blog_s1_2.png" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Força Pura: Desafie-se com o Powerlifting na VivaBem </a></h3>
                        <p>Na VivaBem, acreditamos na força pura como um meio de conquistar seus objetivos. Em nosso programa de Powerlifting, não apenas levantamos pesos, mas também levantamos o espírito competitivo que existe dentro de você. Descubra como a disciplina, a técnica e a mentalidade certa podem transformar seus treinos em verdadeiros triunfos. Desafie-se e descubra a força que vai além dos pesos!</p>
                        <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
                    </div>
                </div>
                <div class="blog-card style4">
                    <div class="blog-img">
                        <img src="../img/blog_s1_3.png" alt="blog image">
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Potência e Performance: Powerlifting para uma Vida Robusta na VivaBem</a></h3>
                        <p>Transforme-se em uma força imparável com nosso programa de Powerlifting na VivaBem. Não se trata apenas de levantar pesos, mas de cultivar uma vida robusta e poderosa. Desenvolva não apenas força física, mas também mental, enquanto trabalha para superar seus próprios recordes. Entre para a elite do Powerlifting conosco e experimente uma revolução de potência e performance!</p>
                        <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba mais</a>
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
                                    <a href="blog-details.html"><img src="../img/recent-post1.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Estratégias essenciais para maximizar seu treino</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="../img/recent-post2.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Treinamento funcional na sua rotina...</a></h4>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="../img/recent-post3.png" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">
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
