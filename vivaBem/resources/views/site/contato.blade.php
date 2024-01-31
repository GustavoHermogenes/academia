@extends('layout.layout')

@section('title', 'Contato')

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
                        <h1 class="breadcumb-title">Entre em contato</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ url('/') }}">INÍCIO</a></li>
                            <li class="active">CONTATO</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--==============================
                            Contact Area
                        ==============================-->
    <div class="contact-area space bg-smoke2">
        <div class="container">
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/contact-icon1.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Entre em contato</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">(11) 99999-9999</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/contact-icon2.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">Faça um orçamento</span>
                            <h6 class="contact-info_text"><a href="mailto:info@Fitmas.com">orçamento@VivaBem.com</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info">
                        <div class="contact-info_icon">
                            <img src="{{ asset('img/contact-icon3.svg') }}" alt="icon">
                        </div>
                        <div class="media-body">
                            <span class="contact-info_title">localização</span>
                            <h6 class="contact-info_text"><a href="tel:9288006780">Marechal Tito, 1500</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-sec2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29272.202621777888!2d-46.46210909415662!3d-23.495597199999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1706034661403!5m2!1spt-BR!2sbr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="container">
        <div class="contact-form-area space-bottom">
            <div class="row g-0">
                <div class="col-lg-4">
                    <div class="contact-form-thumb">
                        <img src="{{ asset('img/contact1.png') }}" alt="img">
                    </div>
                </div>
                <div class="col-lg-8 bg-smoke2">
                    <div class="contact-form-wrap">
                        <div class="title-area">
                            <span class="sub-title">Entre em contato</span>
                            <h2 class="sec-title">Envie uma mensagem</h2>
                        </div>

                        <form action="{{ Route('contato.enviar') }}" method="POST" class="contact-form" id="formContato">

                            @csrf

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="nomeContato" id="nomeContato"
                                            placeholder="Seu nome" value="{{ old('nomeContato') }}">
                                        <i class="far fa-user"></i>
                                        <div id="nomeContatoError" class="error-mensagem"></div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="emailContato" id="emailContato"
                                            placeholder="Endereço de email" value="{{ old('emailContato') }}">
                                        <i class="far fa-envelope"></i>
                                        <div id="emailContatoError" class="error-mensagem"></div>

                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control style-white" name="foneContato" id="foneContato"
                                            placeholder="Digite seu Telefone" value="{{ old('foneContato') }}">
                                        <i class="far fa-phone"></i>
                                        <div id="foneContatoError" class="error-mensagem"></div>

                                    </div>
                                </div>

                                <div class="form-group col-lg-6"">
                                    <select name="assuntoContato" id="assuntoContato" class="form-select style-white">
                                        <option value="{{ old('assuntoContato') }}" disabled="" selected=""
                                            hidden="">Selecione o assunto</option>
                                        <option value="Musculação">Musculação</option>
                                        <option value="Powerlifting">Powerlifting</option>
                                        <option value="Meditação">Meditação</option>
                                        <option value="Lutas">Lutas</option>
                                    </select>
                                    <i class="fa-solid fa-arrow-down-long"></i>
                                    <div id="assuntoContatoError" class="error-mensagem"></div>

                                </div>

                            </div>

                            <div class="form-group col-12">
                                <textarea placeholder="Digite sua mensagem" id="mensContato" class="form-control style-white">{{ old('mensContato') }}</textarea>
                                <div id="mensContatoError" class="error-mensagem"></div>

                            </div>

                            <div class="form-btn col-12">
                                <input type="submit" value="Enviar via e-mail" class="btn-enviar" onclick="formContato(event)">
                                <div id="contatoMensagem" class="msgContato"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="space-bottom">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Nos siga</span>
                <h2 class="sec-title">Feed do Instagram</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed1.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed1.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed2.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed2.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed3.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed3.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed4.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed4.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed5.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed5.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed6.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed6.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed7.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed7.png') }}" alt="portfolio">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="portfolio-thumb">
                        <a class="popup-image icon-btn" href="img/insta_feed8.png"><i class="far fa-eye"></i></a>
                        <img src="{{ asset('img/insta_feed8.png') }}" alt="portfolio">
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
