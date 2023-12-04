@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')

    {{-- banner --}}
    <div class="hero-wrapper hero-2" id="hero">
        <div class="global-carousel" id="heroSlider2" data-fade="true" data-slide-show="1" data-lg-slide-show="1"
            data-md-slide-show="1" data-sm-slide-show="1" data-xs-slide-show="1" data-arrows="true" data-xl-arrows="true"
            data-ml-arrows="true">
            <div class="hero-slider" data-bg-src="{{ asset('img/academiaBanner2.jpeg') }}">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('') }}" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="{{ asset('') }}" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="{{ asset('') }}" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente a
                                    sua</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">Com a
                                    VivaBem</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Marque uma consulta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slider" data-bg-src="{{ asset('img/academiaBanner.jpeg') }}">
                <div class="hero-shape2-1 shape-mockup movingX" data-bottom="-165px" data-left="0">
                    <img src="{{ asset('') }}" alt="img">
                </div>
                <div class="hero-shape2-2 shape-mockup jump2" data-bottom="-50px" data-right="-10%">
                    <img src="{{ asset('') }}" alt="img">
                </div>
                <div class="hero-shape2-3 shape-mockup jump2" data-top="-30%" data-left="-30%">
                    <img src="{{ asset('') }}" alt="img">
                </div>
                <div class="container">
                    <div class="row justify-content-lg-end justify-content-center">
                        <div class="col-xl-6 col-lg-7 col-md-9">
                            <div class="hero-style2">
                                <span class="hero-subtitle fw-medium" data-ani="slideinup" data-ani-delay="0s">Aumente a
                                    sua</span>
                                <h1 class="hero-title text-white" data-ani="slideinup" data-ani-delay="0.1s">Força</h1>
                                <span class="hero-subtitle fw-semibold" data-ani="slideinup" data-ani-delay="0.2s">Com a
                                    VivaBem</span>
                                <div class="btn-group" data-ani="slideinup" data-ani-delay="0.3s">
                                    <a href="contact.html" class="btn style-r0 style2">Marque uma Consuta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-arrow">
            <button data-slick-prev="#heroSlider2" class="slick-arrow slick-prev">PREV</button>
            <button data-slick-next="#heroSlider2" class="slick-arrow slick-next">NEXT</button>
        </div>
    </div>

   {{-- Serviço --}}
    <div class="service-bg2-area" data-bg-src="{{ asset('img/service-bg2.png') }}">
        <!--==============================
            Medir IMC
            ==============================-->
        <div class="bmi-area-1 space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="title-area mb-30">
                            <span class="sub-title">Teste seu IMC</span>
                            <h2 class="sec-title text-white fw-semibold">Índice de massa corporal</h2>
                            <p class="sec-text">O IMC é uma ferramenta amplamente utilizada para avaliar o peso corporal em
                                relação à altura. Pode fornecer uma indicação geral se um indivíduo está dentro de uma faixa
                                de peso saudáve</p>
                        </div>
                        <div class="bmi-table mb-lg-0 mb-40">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">IMC</th>
                                        <th scope="col">Peso</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Abaixo de 18.5</th>
                                        <td>Abaixo do Peso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18.5 - 24.9</th>
                                        <td>Saudável</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25.0 - 29.9</th>
                                        <td>Acima do Peso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30.0 - ou Mais</th>
                                        <td>Obeso</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="bmi-calculator-form">
                            <h4 class="form-title">Realize seu teste:</h4>
                            <form class="bmi-form" id="form" name="bmiCalc">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="weight" class="form-control style-border"
                                                placeholder="Peso / KG" type="text" name="weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="height" class="form-control style-border"
                                                placeholder="Altura / CM" type="text" name="height">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control style-border" name="age"
                                                id="age" placeholder="Idade">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="sex"
                                                id="sex" placeholder="Sexo">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_result" class="form-control style-border" placeholder="Seu IMC"
                                        type="text" name="bmi">
                                </div>
                                <div class="form-group">
                                    <input for="bmi_message" placeholder="Isso significa"
                                        class="form-control style-border" type="text" name="meaning">
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Calcular o IMC" onClick="calculateBMI()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
            Serviço 1
            ==============================-->
        <div class="service-area-1 space-bottom overflow-hidden">
            <div class="container">
                <div class="title-area">
                    <span class="sub-title">Nossos Recursos</span>
                    <h2 class="sec-title text-white fw-semibold">Serviços que oferecemos</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3"
                    data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                    data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-1.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Variedade de
                                        equipamentos</a>
                                </h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-2.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Cardiovascular</a></h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-3.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Coração Bombeando</a>
                                </h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-4.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Treino de Força</a>
                                </h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-1.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">variedade de
                                        equipamentos</a>
                                </h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-2.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Cardiovascular</a></h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-3.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Coração Bombeando</a>
                                </h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{ asset('img/service-icon_1-4.svg') }}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Treino de Força</a>
                                </h4>
                                <p class="service-card_text">Na VivaBem, moldamos não apenas corpos, mas trajetórias de
                                    sucesso. Seja iniciante ansioso ou veterano em busca de desafios, aqui seus objetivos se
                                    realizam
                                </p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Saiba Mais <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="sec-shape2-bottom">
            <img src="{{ asset('img/sec-shape2-top.png') }}" alt="img">
        </div>
    </div>


    {{-- Sobre --}}
    <div class="space-bottom" style="margin-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-thumb mb-5 mb-lg-0">
                        <img class="about-img-1" src="{{ asset('img/about_1-1.png') }}" alt="img">
                        <img class="about-img-2 jump" src="{{ asset('img/about_1-2.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-wrap">
                        <div class="title-area mb-0">
                            <span class="sub-title">Sobre nós</span>
                            <h2 class="sec-title">Desbloqueie todo o seu potencial, alcance seus objetivos.</h2>
                            <p class="sec-text">Bem-vindo ao Fitmas. seu destino final para alcançar seus objetivos de
                                condicionamento físico. Compreendemos a importância de levar um estilo de vida saudável e
                                oferecemos instalações de fitness de alto nível para apoiá-lo em sua jornada de fitness
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
                        <div class="btn-wrap mt-40">
                            <a href="about.html" class="btn">Marque uma visita</a>
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



    {{-- calendário --}}
    <div class="schedule-area-1 space">
        <div class="container container2">
            <div class="title-area text-center">
                <span class="sub-title">Nossas Aulas</span>
                <h2 class="sec-title fw-semibold">Nosso Cronograma de treinamento</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab-1">
                        <div class="filter-menu-active mb-50 text-center">
                            <button data-filter=".cat1" class="active btn style4 style-r0" type="button">Todos os
                                Eventos</button>
                            <button class="btn style4 style-r0" data-filter=".cat2" type="button">CARDIO</button>
                            <button class="btn style4 style-r0" data-filter=".cat3" type="button">Academia
                                Aberta</button>
                            <button class="btn style4 style-r0" data-filter=".cat4" type="button">Corpo Todo</button>
                            <button class="btn style4 style-r0" data-filter=".cat5" type="button">CROSSFIT</button>
                        </div>
                        <div class="filter-active-cat1">
                            <div class="filter-item cat1">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Segunda-feira</th>
                                                <th scope="col">Terça-feira</th>
                                                <th scope="col">Quarta-feira</th>
                                                <th scope="col">Quinta-feira</th>
                                                <th scope="col">Sexta-feira</th>
                                                <th scope="col">Sábado</th>
                                                <th scope="col">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat2">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Segunda-feira</th>
                                                <th scope="col">Terça-feira</th>
                                                <th scope="col">Quarta-feira</th>
                                                <th scope="col">Quinta-feira</th>
                                                <th scope="col">Sexta-feira</th>
                                                <th scope="col">Sábado</th>
                                                <th scope="col">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense <br>
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat3">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Segunda-feira</th>
                                                <th scope="col">Terça-feira</th>
                                                <th scope="col">Quarta-feira</th>
                                                <th scope="col">Quinta-feira</th>
                                                <th scope="col">Sexta-feira</th>
                                                <th scope="col">Sábado</th>
                                                <th scope="col">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat4">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Segunda-feira</th>
                                                <th scope="col">Terça-feira</th>
                                                <th scope="col">Quarta-feira</th>
                                                <th scope="col">Quinta-feira</th>
                                                <th scope="col">Sexta-feira</th>
                                                <th scope="col">Sábado</th>
                                                <th scope="col">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="filter-item cat5">
                                <div class="table-responsive">
                                    <table class="schedule-table table">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">Segunda-feira</th>
                                                <th scope="col">Terça-feira</th>
                                                <th scope="col">Quarta-feira</th>
                                                <th scope="col">Quinta-feira</th>
                                                <th scope="col">Sexta-feira</th>
                                                <th scope="col">Sábado</th>
                                                <th scope="col">Domingo</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">06:00 - 07:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>CrossFit Pro</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Cardio Box</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">07:00 - 08:00</th>
                                                <td></td>
                                                <td class="active">
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td rowspan="2">
                                                    <span>Pro Intense
                                                        Workout</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <th scope="row">08:00 - 09:00</th>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2"></td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td rowspan="2">
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">09:00 - 10:00</th>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Boxing Gym</span>
                                                    Daniel
                                                </td>
                                            </tr>

                                            <tr>
                                                <th scope="row">10:00 - 11:00</th>
                                                <td>
                                                    <span>Body Build</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Pump Work</span>
                                                    Daniel
                                                </td>
                                                <td>
                                                    <span>Fitness Class</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Open Gym</span>
                                                    Daniel
                                                </td>
                                                <td></td>
                                                <td>
                                                    <span>Yoga Class</span>
                                                    Daniel
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- video --}}
    <div class="video-area-1">
        <div class="container">
            <div class="video-wrap">
                <a data-bg-src="{{ asset('img/video-bg1.png') }}"
                    href="https://www.youtube.com/watch?v=P7fi4hP_y80" class="play-btn popup-video">
                    <i class="fa-sharp fa-solid fa-play"></i>
                </a>
            </div>
        </div>
    </div>


    {{-- portfólio --}}
    <div class="portfolio-area-1" data-bg-src="{{ asset('img/portfolio-bg-1.png') }}">

        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Nosso Portfólio</span>
                <h2 class="sec-title text-white fw-semibold">Nosso Portfólio</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="flip-gallery-area">
                <div class="flip-gallery">
                    <ul class="flip-items">
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="{{ asset('img/project1_1.png') }}" alt="gallery image">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Logítica de treinamento</h6>
                                        <h4 class="gallery-content_title">Treinos especíicos para cada um</h4>
                                    </div>
                                    <a href="{{ asset('img/project1_1.png') }}" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="{{ asset('img/project1_2.png') }}" alt="gallery image">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Logítica de treinamento</h6>
                                        <h4 class="gallery-content_title">Treinos especíicos para cada um</h4>
                                    </div>
                                    <a href="{{ asset('img/project1_2.png') }}" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="gallery-card gallery-flip">
                                <div class="gallery-img">
                                    <img src="{{ asset('img/project1_3.png') }}" alt="gallery image">
                                </div>
                                <div class="gallery-content">
                                    <div class="media-left">
                                        <h6 class="gallery-content_subtitle">Logítica de treinamento</h6>
                                        <h4 class="gallery-content_title">Treinos especíicos para cada um</h4>
                                    </div>
                                    <a href="{{ asset('img/project1_3.png') }}" class="icon-btn popup-image">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-img-sec" data-bg-src="{{ asset('img/team-bg-2.png') }}">

        {{-- Equipe --}}
        <div class="team-area-2 space overflow-hidden">
            <div class="container container2">
                <div class="title-area text-center text-sm-start">
                    <span class="sub-title">Nossos Membros</span>
                    <h2 class="sec-title text-white fw-semibold">Conheça seu treinador</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel team-slider-2" data-slide-show="4" data-ml-slide-show="3"
                    data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1"
                    data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-1.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de muay thai</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-2.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de ioga</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-3.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de musculação</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-4.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de natação</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-1.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de musculação</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">George Edward</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-2.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de musculação</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">William Henry</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-3.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de jiu-jitsu</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Harper Victoria</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="team-card2">
                            <div class="team-card_img">
                                <img src="{{ asset('img/team-2-4.png') }}" alt="img">
                            </div>
                            <div class="team-card_content">
                                <span class="team-card_subtitle">Treinador de futebol</span>
                                <h4 class="team-card_title h5"><a href="team-details.html">Matthew Thomas</a></h4>
                                <a href="tel:2588642236" class="link-btn" tabindex="0"><i
                                        class="fas fa-phone-volume me-2"></i>+258 8642 236</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        {{-- Equipe 2 --}}
        <div class="counter-area-2 overflow-hidden">
            <div class="container container2">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="{{ asset('img/counter-icon_2-1.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">3658</span>+</h2>
                                <p class="counter-card_text">Clientes satisfeitos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="{{ asset('img/counter-icon_2-2.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">658</span>+</h2>
                                <p class="counter-card_text">Membros especialistas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="{{ asset('img/counter-icon_2-3.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">368</span>+</h2>
                                <p class="counter-card_text">Equipamento moderno</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-auto counter-card_wrap">
                        <div class="counter-card style2">
                            <div class="counter-card_icon">
                                <img src="{{ asset('img/counter-icon_2-4.svg') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h2 class="counter-card_number"><span class="counter-number">153</span>+</h2>
                                <p class="counter-card_text">Toneladas de colheita</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ad-slider">
            <div class="global-carousel" data-autoplay-speed="1" data-speed="10000">
                <h2 class="ad-slider_title">VivaBem <span>FITNESS</span> CENTER </h2>
                <h2 class="ad-slider_title">VivaBem <span>FITNESS</span> CENTER </h2>
            </div>
        </div>
    </div>


    {{-- Objetivo --}}
    <section class="goal-area space">
        <div class="container container2">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="goal-thumb-2 mb-40 mb-lg-0">
                        <div class="img-1">
                            <img src="{{ asset('img/goal_2-2.png') }}" alt="img">
                        </div>
                        <div class="img-2 jump">
                            <img src="{{ asset('img/goal_2-1.png') }}" alt="img">
                        </div>
                        <div class="wcu-grid movingX">
                            <div class="icon">
                                <img src="{{ asset('img/wcu-icon_1-1.svg') }}" alt="img">
                            </div>
                            <div class="details">
                                <h3 class="wcu-gr   id_year"><span class="counter-number">25</span>+</h3>
                                <span class="wcu-grid_text">Anos de experiência</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="title-area">
                        <span class="sub-title">Meta da VivaBem
                        </span>
                        <h2 class="sec-title fw-semibold">DESBLOQUEIE TODO O SEU POTENCIAL, ALCANCE SEUS OBJETIVOS DE
                            FITNESS.</h2>
                    </div>
                    <div class="goal-grid-wrap">
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="{{ asset('img/goal-icon_1-1.svg') }}" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Treinamento físico gratuito</h4>
                                <p class="about-grid_text">Pedale até se exercitar em nosso estúdio especializado em
                                    ciclismo indoor. Equipado com bicicletas estacionárias...</p>
                            </div>
                        </div>
                        <div class="about-grid style3">
                            <div class="about-grid_icon">
                                <img src="{{ asset('img/goal-icon_1-2.svg') }}" alt="img">
                            </div>
                            <div class="about-grid_content">
                                <h4 class="about-grid_title">Cardio e Força</h4>
                                <p class="about-grid_text">Pedale até se exercitar em nosso estúdio especializado em
                                    ciclismo indoor. Equipado com bicicletas estacionárias...</p>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="btn style-r0" href="service-details.html">Saiba Mais</a>
                            <a class="btn btn-border style-r0" href="service-details.html">Veja todos os serviços</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Blog --}}
    <section class="blog-area-2 space">
        <div class="container container2">
            <div class="row">
                <div class="col-xl-4 col-lg-5 col-md-6 position-relative">
                    <div class="blog_sec_title_static me-lg-3">
                        <div class="blog_sec_title_wrap">
                            <div class="title-area">
                                <span class="sub-title">Nossas postagens no blog
                                </span>
                                <h2 class="sec-title fw-semibold">LEIA NOSSAS ÚLTIMAS HISTÓRIAS</h2>
                                <p class="sec-text">Bem-vindo ao nosso blog de academia, onde compartilhamos informações
                                    valiosas, dicas e inspiração para ajudá-lo em sua jornada para uma vida mais saudável...
                                </p>
                            </div>
                            <a class="btn style-r0" href="blog.html">Veja Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 col-md-6">
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog_2_1.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 de junho de 2023</a>
                                <a href="blog.html">Compras</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dominando as máquinas: um guia
                                    para iniciantes em equipamentos de ginástica</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i> Saiba
                                mais</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog_2_2.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 de junho de 2023</a>
                                <a href="blog.html">Compras</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dominando as máquinas: um guia
                                    para iniciantes em equipamentos de ginástica</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba
                                mais</a>
                        </div>
                    </div>
                    <div class="blog-card style2">
                        <div class="blog-img">
                            <img src="{{ asset('img/blog_2_3.png') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html">15 de junho de 2023</a>
                                <a href="blog.html">Compras</a>
                            </div>
                            <h3 class="blog-title box-title"><a href="blog-details.html">Dominando as máquinas: um guia
                                    para iniciantes em equipamentos de ginástica</a></h3>
                            <a href="blog-details.html" class="link-btn style2"><i class="fas fa-arrow-right"></i>Saiba
                                Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
