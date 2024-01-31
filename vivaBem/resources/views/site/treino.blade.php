@extends('layout.layout')

@section('title', 'Treino')

@section('conteudo')

    <div class="breadcumb-wrapper" data-bg-src="img/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Treino e Planos</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">TREINO E PLANOS</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Pricing plan Area
        ==============================-->
    <div class="pricing-area space">
        <div class="container">
            <div class="title-area text-center">
                <h3 class="sub-title">Planos</h3>
                <h2 class="sec-title">Nosso plano de preços</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="img/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="img/picing-icon_1-1.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano básico</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>19<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e
                            equipamentos da academia.</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 Treinos</li>
                                <li><i class="far fa-check-circle"></i>acesso às instalações e equipamentos.</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="{{ url('contato') }}">Escolha este plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card pricing-card_active">
                        <div class="pricing-card_bg">
                            <img src="img/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="img/picing-icon_1-2.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Premium</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/month</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e
                            equipamentos da academia.</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 Treinos</li>
                                <li><i class="far fa-check-circle"></i>acesso às instalações e equipamentos.</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="{{ url('contato') }}">Escolha este plano</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card">
                        <div class="pricing-card_bg">
                            <img src="img/pricing-card1-bg.png" alt="img">
                        </div>
                        <div class="pricing-card_icon">
                            <img src="img/picing-icon_1-3.svg" alt="img">
                        </div>
                        <h3 class="pricing-card_title">Plano Ultimate</h3>
                        <h4 class="pricing-card_price"><span class="currency">$</span>69<span class="duration">/mês</span>
                        </h4>
                        <p class="pricing-card_content">Esta categoria normalmente oferece acesso às instalações e
                            equipamentos da academia.</p>
                        <div class="checklist">
                            <ul>
                                <li><i class="far fa-check-circle"></i>12 Treinos</li>
                                <li><i class="far fa-check-circle"></i>acesso às instalações e equipamentos.</li>
                                <li><i class="far fa-check-circle"></i>Tapete de ioga pessoal</li>
                                <li><i class="far fa-check-circle"></i>Estacionamento grátis</li>
                            </ul>
                        </div>
                        <a class="btn style2" href="{{ url('contato') }}">Escolha este plano</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
        Cta Area
        ==============================-->
    <section class="cta-area space" data-bg-src="img/cta-bg1.png">
        <div class="container">
            <div class="row justify-content-lg-end justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="cta-wrap text-center text-lg-start">
                        <div class="title-area">
                            <span class="sub-title">Marque uma consulta</span>
                            <h2 class="sec-title text-white">Obtenha uma consultoria gratuita agora mesmo aqui!</h2>
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
        Blog Area
        ==============================-->
    <section class="blog-area space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Nossos treinos</span>
                <h2 class="sec-title">O que nossa academia fornece</h2>
            </div>
            <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2"
                data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false"
                data-md-dots="true">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="img/blog_1_1.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="img/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 de maio</a>
                                <a href="blog.html"><i class="far fa-user"></i>Por VivaBem</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dicas de nutrição para
                                    membros</a></h3>
                            <p class="blog-text">Esta associação é especializada em projetos para tornar seu
                                condicionamento físico acessível para todos e que te agrada...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="img/blog_1_2.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="img/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 de maio</a>
                                <a href="blog.html"><i class="far fa-user"></i>Por VivaBem</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Descubra seu verdadeiro potencial
                                    com VivaBem</a></h3>
                            <p class="blog-text">Se você estiver visitando a região ou quiser trazer um amigo para se
                                exercitar, oferemos passes diários e passe para convidados...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="img/blog_1_3.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="img/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 de maio</a>
                                <a href="blog.html"><i class="far fa-user"></i>Por VivaBem</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Eleve sua altoestima com
                                    musculação</a></h3>
                            <p class="blog-text">Compreendemos a importância do condicionamento físico para toda a família.
                                Nossa opção familiar permite múltiplas famílias...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="img/blog_1_1.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="img/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 de maio</a>
                                <a href="blog.html"><i class="far fa-user"></i>Por VivaBem</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dicas de nutrição para
                                    membros</a></h3>
                            <p class="blog-text">Esta associação é especializada em projetos para tornar seu
                                condicionamento físico acessível para todos e que te agrada...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="img/blog_1_2.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="img/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 de maio</a>
                                <a href="blog.html"><i class="far fa-user"></i>Por VivaBem</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Descubra seu verdadeiro potencial
                                    com VivaBem</a></h3>
                            <p class="blog-text">Se você estiver visitando a região ou quiser trazer um amigo para se
                                exercitar, oferemos passes diários e passe para convidados...</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-card">
                        <div class="blog-img">
                            <img src="img/blog_1_3.png" alt="blog image">
                        </div>
                        <div class="blog-content" data-bg-src="img/blog_card1_bg.png">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 de maio</a>
                                <a href="blog.html"><i class="far fa-user"></i>Por VivaBem</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Eleve sua altoestima com
                                    musculação</a></h3>
                            <p class="blog-text">Compreendemos a importância do condicionamento físico para toda a família.
                                Nossa opção familiar permite múltiplas famílias...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
            Footer Area
        ==============================-->
    <div class="footer-wrapper footer-layout1" data-bg-src="img/footer-1-bg.png">
        <div class="container">
            <div class="contact-card">
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Localização</p>
                        <a href="https://www.google.com/maps" class="info-card_link">Marechal Tito, 1500</a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">endereço de email</p>
                        <a href="mailto:health@Fitmas.com" class="info-card_link">contato@VivaBem.com</a>
                    </div>
                </div>
                <div class="info-card">
                    <div class="info-card_icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Telefone</p>
                        <a href="tel:+18925382145" class="info-card_link">(11) 99999-9999</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
