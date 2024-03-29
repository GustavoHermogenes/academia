@extends('layout.layout')

@section('title', 'Sobre')

@section('conteudo')

 <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('img/breadcrumb-bg.png') }}">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Sobre nós</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">SOBRE</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
    About Area
    ==============================-->
    <div class="space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2 text-lg-end">
                    <div class="about-thumb mb-5 mb-lg-0">
                        <img class="about-img-1" src="{{ asset('img/about_1-1.png') }}" alt="img">
                        <img class="about-img-2 jump" src="{{ asset('img/about_1-2.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <span class="sub-title">Mais sobre nós</span>
                            <h2 class="sec-title">Desbloqueie todo o seu potencial, alcance seus objetivos.</h2>
                            <p class="sec-text">Bem-vindo ao Fitmas. seu destino final para alcançar seus objetivos de condicionamento físico. Compreendemos a importância de levar um estilo de vida saudável e oferecemos instalações de fitness de alto nível para apoiá-lo em sua jornada de fitness.
                            </p>

                                <div class="about-tab-1">
                                    <div class="filter-menu-active">
                                        <button data-filter=".cat1" class="active" type="button">Nossa Missão</button>
                                        <button data-filter=".cat2" type="button">Nossa Visão</button>
                                        <button data-filter=".cat3" type="button">Nosso Valor</button>
                                    </div>
                                    <div class="filter-active-cat1">
                                        <div class="filter-item cat1">
                                            <div class="about-tab-icon">
                                                <img src="{{ asset('img/foguete.png') }}" alt="img"
                                                    style="width:60px; height:60px;">
                                            </div>
                                            <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um
                                                estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação
                                                para os indivíduos praticarem atividades físicas regulares.</p>
                                        </div>
                                        <div class="filter-item cat2">
                                            <div class="about-tab-icon">
                                                <img src="{{ asset('img/foguete.png') }}" alt="img"
                                                    style="width:60px; height:60px;">
                                            </div>
                                            <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um
                                                estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação
                                                para os indivíduos praticarem atividades físicas regulares.</p>
                                        </div>
                                        <div class="filter-item cat3">
                                            <div class="about-tab-icon">
                                                <img src="{{ asset('img/foguete.png') }}" alt="img"
                                                    style="width:60px; height:60px;">
                                            </div>
                                            <p class="about-tab-text">Os ginásios desempenham um papel vital na promoção de um
                                                estilo de vida ativo e saudável. Eles fornecem um ambiente de apoio e motivação
                                                para os indivíduos praticarem atividades físicas regulares.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="{{ url('contato') }}" class="btn">Marque uma visita</a>
                            <div class="about-info-wrap">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title">Precisa de ajuda?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(11) 99999-9999</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Service Area 02
    ==============================-->
    <div class="service-area-2 space-bottom overflow-hidden">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Nossos Serviços</span>
                <h2 class="sec-title">Seriços que oferecemos</h2>
            </div>
        </div>
        <div class="container">
            <div class="row global-carousel service-slider-2 slider-shadow" data-slide-show="3" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/service-icon_2-1.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('modalidade') }}">Musculação</a></h4>
                            <p class="service-card_text">Treino de alta intensidade que alternam entre rajadas intensas de exercício e curtos períodos de recuperação...</p>
                            <a href="{{ url('modalidade') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/service-icon_2-2.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('modalidade') }}">Powerlifting</a></h4>
                            <p class="service-card_text">Treino de alta intensidade que alternam entre rajadas intensas de exercício e curtos períodos de recuperação...</p>
                            <a href="{{ url('modalidade') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/service-icon_2-3.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('modalidade') }}">Aula de ginástica</a></h4>
                            <p class="service-card_text">Treino de alta intensidade que alternam entre rajadas intensas de exercício e curtos períodos de recuperação...</p>
                            <a href="{{ url('modalidade') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/service-icon_2-1.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('modalidade') }}">Musculação</a></h4>
                            <p class="service-card_text">Treino de alta intensidade que alternam entre rajadas intensas de exercício e curtos períodos de recuperação...</p>
                            <a href="{{ url('modalidade') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/service-icon_2-2.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('modalidade') }}">Powerlifting</a></h4>
                            <p class="service-card_text">Treino de alta intensidade que alternam entre rajadas intensas de exercício e curtos períodos de recuperação...</p>
                            <a href="{{ url('modalidade') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card style2">
                        <div class="service-card_icon">
                            <img src="{{ asset('img/service-icon_2-3.svg') }}" alt="img">
                        </div>
                        <div class="service-card_content">
                            <h4 class="service-card_title h5"><a href="{{ url('modalidade') }}">Treino de peso</a></h4>
                            <p class="service-card_text">Treino de alta intensidade que alternam entre rajadas intensas de exercício e curtos períodos de recuperação...</p>
                            <a href="{{ url('modalidade') }}" class="link-btn" tabindex="0"><i class="fas fa-arrow-right"></i>Leia mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Cta Area
    ==============================-->
    <section class="cta-area space" data-bg-src="{{ asset('img/cta-bg1.png') }}">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Marque uma consulta</span>
                            <h2 class="sec-title text-white">Obtenha uma consultoria gratuita agora mesmo aqui!
                        </div>
                        <div class="btn-wrap mt-40">
                            <a href="{{ url('contato') }}" class="btn style2">Marque uma consulta</a>
                            <div class="about-info-wrap style3">
                                <div class="icon"><i class="fas fa-phone-volume"></i></div>
                                <div class="details">
                                    <p class="about-info-title text-white">Precisa de ajuda?</p>
                                    <a class="about-info-link" href="tel:+25825692582">(11) 99999-9999</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
    Team Area
    ==============================-->
    <div class="team-area-1 space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Nossos Treinadores</span>
                <h2 class="sec-title">Conheça nosso incrível equipe </h2>
            </div>
            <div class="row global-carousel team-slider-1 slider-shadow" data-slide-show="4" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-center-mode="true">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-1.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundador</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-2.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundador</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-3.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundadora</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-4.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundador</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-1.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">George Thomas</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundador</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-2.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Mike Johnson</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundador</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-3.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Amelia Harper</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundadora</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-card_img">
                            <img src="{{ asset('img/team-4.png') }}" alt="img">
                        </div>
                        <div class="team-card_content">
                            <h4 class="team-card_title"><a href="team-details.html">Oliver Samuel</a>
                            </h4>
                            <span class="team-card_desig">CEO e Fundador</span>
                            <div class="social-btn">
                                <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.discord.com/"><i class="fab fa-discord"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
