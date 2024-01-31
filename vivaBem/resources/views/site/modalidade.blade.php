@extends('layout.layout')

@section('title', 'Modalidades')

@section('conteudo')

    <!--==============================
        Breadcumb
        ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="img/breadcrumb-bg.png">
        <!-- bg animated image/ -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">Modalidades</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">Modalidades</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
        Service Area 02
        ==============================-->
    <div class="service-details-area space-top space-extra-bottom overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-7">
                    <div class="service-page-single">
                        <div class="page-img mb-50">
                            <img src="img/service-details1-1.png" alt="img">
                        </div>
                        <div class="page-content">
                            <h2 class="page-title">Veja nossas modalidades</h2>
                            <p class="mb-30">
                                Bem-vindo à nossa academia, o lugar perfeito para transformar seus objetivos de
                                condicionamento físico em realidade. Nossa variedade de modalidades foi cuidadosamente
                                selecionada para atender a todas as suas necessidades e preferências. Descubra como podemos
                                ajudá-lo a atingir o melhor de você em cada treino.
                                Se você busca esculpir seus músculos, nossa área de musculação é equipada com os mais
                                modernos aparelhos e instrutores dedicados. Desenvolva força, resistência e defina seus
                                músculos em um ambiente motivador e energético.</p>
                            <p class="mb-50">Para aqueles que preferem a sensação revigorante da água, nossa piscina é o
                                local perfeito. Desde nadadores iniciantes até os mais experientes, oferecemos um espaço
                                projetado para melhorar a resistência cardiovascular e proporcionar um treino refrescante de
                                baixo impacto.</p>
                            <h3 class="page-subtitle mb-0">Ainda não está satisfeito?</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i>Natação:</h6>
                                        <p>Para aqueles que preferem a sensação revigorante da água, nossa piscina é o local
                                            perfeito. Desde nadadores iniciantes até os mais experientes, oferecemos um
                                            espaço projetado para melhorar a resistência cardiovascular e proporcionar um
                                            treino refrescante de baixo impacto.</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="service-wrap">
                                        <h6><i class="far fa-check me-2"></i>Lutas:</h6>
                                        <p>Se sua paixão é a luta, oferecemos uma variedade de modalidades, desde boxe até
                                            artes marciais mistas (MMA). Nossos treinadores experientes criam um ambiente
                                            seguro para aprendizado e aprimoramento, independentemente do seu nível de
                                            experiência.</p>
                                    </div>
                                </div>
                            </div>
                            <p class="mt-25 mb-50">Encontre equilíbrio entre corpo e mente em nossas aulas de meditação.
                                Guiados por instrutores especializados, explore práticas de mindfulness e técnicas de
                                relaxamento em um ambiente tranquilo e acolhedor, proporcionando benefícios significativos
                                para sua saúde mental e bem-estar global.</p>
                            <h3 class="page-subtitle mb-0">Todas nossas modalidades são:</h3>
                            <div class="service-page-list checklist mb-50" data-bg-src="img/service-details1-2.png">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Musculação.</li>
                                    <li><i class="far fa-check-circle"></i>Powerlifiting.</li>
                                    <li><i class="far fa-check-circle"></i>Natação.</li>
                                    <li><i class="far fa-check-circle"></i>Lutas em geral.</li>
                                    <li><i class="far fa-check-circle"></i>Meditação.</li>
                                </ul>
                            </div>
                            <div class="accordion-area mb-30 accordion" id="faqAccordion">

                                <div class="accordion-card style2 active">
                                    <div class="accordion-header" id="collapse-item-1">
                                        <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-1" aria-expanded="true"
                                            aria-controls="collapse-1">Quais são as modalidades oferecidas pela
                                            academia?</button>
                                    </div>
                                    <div id="collapse-1" class="accordion-collapse collapse show"
                                        aria-labelledby="collapse-item-1" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Oferecemos uma variedade de modalidades, incluindo
                                                musculação, natação, powerlifting, meditação e lutas em geral, como boxe e
                                                artes marciais mistas (MMA)</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-2">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                            Como posso me inscrever na academia?</button>
                                    </div>
                                    <div id="collapse-2" class="accordion-collapse collapse "
                                        aria-labelledby="collapse-item-2" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">A inscrição pode ser feita pessoalmente em nossa recepção,
                                                onde nossa equipe terá prazer em orientá-lo no processo. Também oferecemos a
                                                opção de inscrição online em nosso site para maior comodidade.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="accordion-card style2">
                                    <div class="accordion-header" id="collapse-item-3">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-3" aria-expanded="false"
                                            aria-controls="collapse-3">Quais são os horários de funcionamento da
                                            academia?</button>
                                    </div>
                                    <div id="collapse-3" class="accordion-collapse collapse "
                                        aria-labelledby="collapse-item-3" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">Estamos abertos de segunda a sexta, das 6h às 22h, e aos
                                                sábados, das 8h às 18h. Estamos fechados aos domingos para manutenção e
                                                descanso.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
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
                        <div class="widget widget_schedule">
                            <h3 class="widget_title">Horário de atendimento</h3>
                            <ul>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Segunda – Sexta 07:00 – 21:00
                                </li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Sábado 08:00 – 15:00
                                </li>
                                <li class="unavailable">
                                    <i class="far fa-clock"></i>
                                    Domingo é fechado
                                </li>
                            </ul>
                        </div>
                    </aside>
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
