<!doctype html>

<html lang="{{ app()->getLocale() }}" dir="{{ app()->isLocale('en') ? 'ltr' : 'rtl' }}">

<head>
    <title> {{ __('name') }} </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Ayuob Ferwana Personal CV/resume Website." />
    <meta name="keywords" content="Ayuob Ferwana, Developer , PhP Laravel, vcard " />
    <meta name="developer" content="Mr. Ayoub Ferwana ">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- FAV AND ICONS   -->
    <link rel="shortcut icon" href="{{ asset('cv/assets/images/favicon.ico') }}">
    <link rel="shortcut icon" href="assets/images/apple-icon.png">
    <link rel="shortcut icon" sizes="72x72" href="{{ asset('cv/assets/images/apple-icon-72x72.png') }}">
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('cv/assets/images/apple-icon-114x114.png') }}">

    <!-- Google Font-->
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('cv/assets/icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('cv/assets/plugins/css/bootstrap.min.css') }}">
    <!-- Animate CSS-->
    <link rel="stylesheet" href="{{ asset('cv/assets/plugins/css/animate.css') }}">
    <!-- Owl Carousel CSS-->
    <link rel="stylesheet" href="{{ asset('cv/assets/plugins/css/owl.css') }}">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{ asset('cv/assets/plugins/css/jquery.fancybox.min.css') }}">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="{{ asset('cv/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('cv/assets/css/responsive.css') }}">

    <!-- Colors -->
    <link rel="alternate stylesheet" href="{{ asset('cv/assets/css/colors/blue.css') }}" title="blue">
    <link rel="stylesheet" href="{{ asset('cv/assets/css/colors/defauld.css') }}" title="defauld">
    <link rel="alternate stylesheet" href="{{ asset('cv/assets/css/colors/green.css') }}" title="green">
    <link rel="alternate stylesheet" href="{{ asset('cv/assets/css/colors/blue-munsell.css') }}" title="blue-munsell">
    <link rel="alternate stylesheet" href="{{ asset('cv/assets/css/colors/orange.css') }}" title="orange">
    <link rel="alternate stylesheet" href="{{ asset('cv/assets/css/colors/purple.css') }}" title="purple">
    <link rel="alternate stylesheet" href="{{ asset('cv/assets/css/colors/slate.css') }}" title="slate">
    <link rel="alternate stylesheet" href="{{ asset('cv/assets/css/colors/yellow.css') }}" title="yellow">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        /* about */
        .mh-home .mh-header-info ul li {
            direction: ltr;
            margin: 10px 0;
        }


        .mh-work .mh-experience-deatils .mh-work-item:last-child {
            direction: ltr;
            margin-bottom: 0;
        }

        /* education  */


        element.style {
            direction: rtl;
            visibility: visible;
            animation-duration: 0.8s;
            animation-delay: 0.3s;
            animation-name: fadeInUp;
        }
    </style>

</head>

<body class="dark-vertion black-bg">
    <div class="section-loader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Loader -->

    <!--
        ===================
           NAVIGATION
        ===================
        -->
    <header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg mh-nav nav-btn">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#mh-home">{{ __('home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-about">{{ __('about') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-skills">{{ __('skill') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-experience">{{ __('experiences') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-portfolio">{{ __('portfolio') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-pricing">{{ __('pricing') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mh-contact">{{ __('contact') }}</a>
                            </li>

                            <li class="nav-item" id="light-mode">
                                <a class="nav-link" onclick="event.preventDefault(); toggleTheme()" href="#theme">
                                    <i class="fa fa-snowflake-o fa-spin" id="snowflake-icon"></i>
                                    <i class="fa fa-moon-o" id="moon-icon" style="display: none;"></i>
                                </a>
                            </li>

                            <li class="nav-item">
                                @php
                                $previousUrlFull = url()->current();
                                $previousUrlPath = parse_url($previousUrlFull, PHP_URL_PATH);
                                $previousUrlPath = substr($previousUrlPath, 3);
                                @endphp

                                @if (app()->isLocale('en'))
                                <a class="nav-link" href="/ar{{ $previousUrlPath }}">عربي</a>
                                @else
                                <a class="nav-link" href="/en{{ $previousUrlPath }}">English</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!--
        ===================
            HOME
        ===================
        -->
    <section class="mh-home" id="mh-home">
        <div class="home-ovimg">
            <div class="container">
                <div class="row xs-column-reverse section-separator vertical-middle-content home-padding">
                    <div class="col-sm-6">
                        <div class="mh-header-info">
                            <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                <span>{{ __('hello') }}</span>
                            </div>

                            <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                {{ $about['super_' . app()->getLocale()] }}
                            </h2>
                            <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                                {{ $about['expertise_' . app()->getLocale()] }}</h4>

                            <ul>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i
                                        class="fa fa-envelope"></i><a href="mailto:">{{ $about->email }}</a></li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i
                                        class="fa fa-phone"></i><a href="callto:">( +972 ) {{ $about->phone }}</a></li>
                                <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s"><i
                                        class="fa fa-map-marker"></i>
                                    <address>{{ __('addres') }}</address>
                                </li>
                            </ul>

                            <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                                <li><a href="https://www.facebook.com/profile.php?id=100006618018904"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li><a href="https://github.com/AyuobFerwana"><i class="fa fa-github"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/ayuob-ferwana-aa742127a/"><i
                                            class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://twitter.com/ayuobnasser23"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                            <div class="img-border">
                                <img src="{{ Storage::url($about->image) }}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ==================
            ABOUT
        =================
        -->
    <section class="mh-about" id="mh-about">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-img shadow-2 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <img src="{{ asset('cv/assets/images/ab-img.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-about-inner">
                        <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">{{ __('aboutme') }}
                        </h2>
                        <p class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">{{ __('pareg') }}
                        </p>
                        <div class="mh-about-tag wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <ul>
                                @foreach (explode(',',$about->program) as $program )

                                <li><span>{{ $program }}</span></li>
                                @endforeach
                            </ul>
                        </div>
                        <a href="{{ Storage::url($about->file) }}" class="btn btn-fill wow fadeInUp"
                            data-wow-duration="0.8s" data-wow-delay="0.4s">Downlaod CV <i
                                class="fa fa-download"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           SERVICE
        ===================
        -->
    <section class="mh-service">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s"
                    data-wow-delay="0.2s">
                    <h2>{{ __('what') }}</h2>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.3s">
                        <i class="fa fa-database purple-color"></i>
                        <h3>{{ __('Database') }}</h3>
                        <p>
                            {{ __('projects') }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.5s">
                        <i class="fa fa-code iron-color"></i>
                        <h3>{{ __('web') }}</h3>
                        <p>
                            {{ __('laravel') }}
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="mh-service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s"
                        data-wow-delay="0.7s">
                        <i class="fa fa-server sky-color"></i>
                        <h3>{{ __('server') }}</h3>
                        <p>
                            {{ __('smoothly') }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           SKILLS
        ===================
        -->
    <section class="mh-skills" id="mh-skills">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title text-center col-sm-12">
                    <!--<h2>Skills</h2>-->
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-skills-inner">
                        <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                            <h3>{{ __('Technical') }}</h3>
                            <div class="each-skills">
                                @foreach ($skills->reverse() as $skill)
                                <div class="candidatos">
                                    <div class="parcial">
                                        <div class="info">
                                            <div class="nome">{{ $skill['name_' . app()->getLocale()] }}</div>
                                            <div class="percentagem-num">{{ $skill->skills }}%</div>
                                        </div>
                                        <div class="progressBar">
                                            <div class="percentagem" style="width: {{ $skill->skills }}%;"></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <h3>{{ __('Professional') }}</h3>
                        <ul class="mh-professional-progress">
                            @foreach ($proSkills as $proSkill)
                            <li>
                                <div class="mh-progress mh-progress-circle" data-progress="{{ $proSkill->skills }}">
                                </div>
                                <div class="pr-skill-name">{{ $proSkill['name_' . app()->getLocale()] }}</div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           EXPERIENCES
        ===================
        -->
    <section class="mh-experince" id="mh-experience">
        <div class="bolor-overlay">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-education">
                            <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                                {{ __('educat') }}
                            </h3>
                            <div class="mh-education-deatils">
                                <!-- Education Institutes-->
                                @foreach ($education as $educat)
                                <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.3s">
                                    <h4>{{ $educat['expertise_' . app()->getLocale()] }} <a
                                            href="{{ $educat['link_' . app()->getLocale()] }}">{{ $educat['educaName_' .
                                            app()->getLocale()] }}</a>
                                    </h4>
                                    <div class="mh-eduyear">{{ $educat['year_' . app()->getLocale()] }}</div>
                                    <p>{!! $educat['summernote_' . app()->getLocale()] !!} </p>
                                </div>
                                @endforeach
                                <!-- Education Institutes-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mh-work">
                            <h3>{{ __('work') }}</h3>
                            {{-- <div class="mh-experience-deatils">
                                <!-- Education Institutes-->
                                <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s"
                                    data-wow-delay="0.4s">
                                    <h4>PHP Laravel <a href="#">New Line</a></h4>
                                    <div class="mh-eduyear">2023</div>
                                    <span>Responsibility :</span>
                                    <ul class="work-responsibility">
                                        <li><i class="fa fa-circle"></i>Database Manegment</li>
                                        <li><i class="fa fa-circle"></i>PHP</li>
                                    </ul>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           PORTFOLIO
        ===================
        -->
    <section class="mh-portfolio" id="mh-portfolio">
        <div class="container">
            <div class="row section-separator">
                <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <h3>{{ __('Recent') }}</h3>
                </div>
                <div class="part col-sm-12">
                    <div class="portfolio-nav col-sm-12" id="filter-button">
                        <ul>
                            <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.1s"> <span>{{ __('category') }}</span></li>

                            <li data-filter=".user-interface" class="wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.2s"><span>{{ __('phpLaravel') }}</span></li>

                            <li data-filter=".branding" class="wow fadeInUp" data-wow-duration="0.8s"
                                data-wow-delay="0.3s"><span>{{ __('node.js') }}</span></li>
                        </ul>
                    </div>
                    {{-- <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery"
                        data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <div class="portfolioContainer row">
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g1.jpg') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a data-fancybox data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui mockup">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g2.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g2.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g3.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g3.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g5.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g5.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 user-interface">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g4.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g4.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g6.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g6.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g8.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g8.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 ui">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g9.png') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g9.png') }}" data-fancybox
                                            data-src="#mh"></a>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="grid-item col-md-4 col-sm-6 col-xs-12 branding">
                                <figure>
                                    <img src="{{ asset('cv/assets/images/portfolio/g7.jpg') }}" alt="img04">
                                    <figcaption class="fig-caption">
                                        <i class="fa fa-search"></i>
                                        <h5 class="title">Creative Design</h5>
                                        <span class="sub-title">Photograpy</span>
                                        <a href="{{ asset('cv/assets/images/portfolio/g7.jpg') }}"
                                            data-fancybox="gallery"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div> <!-- End: .grid .project-gallery -->
                    </div> <!-- End: .grid .project-gallery --> --}}
                </div> <!-- End: .part -->
            </div> <!-- End: .row -->
        </div>
        <div class="mh-portfolio-modal" id="mh">
            <div class="container">
                <div class="row mh-portfolio-modal-inner">
                    <div class="col-sm-5">
                        <h2>Wrap - A campanion plugin</h2>
                        <p>Wrap is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.
                        </p>

                        <p>It is a clean and elegant Multipurpose Landing Page Template.
                            It will fit perfectly for Startup, Web App or any type of Web Services.
                            It has 4 background styles with 6 homepage styles. 6 pre-defined color scheme.
                            All variations are organized separately so you can use / customize the template very easily.
                        </p>
                        <div class="mh-about-tag">
                            <ul>
                                <li><span>php</span></li>
                                <li><span>html</span></li>
                                <li><span>css</span></li>
                                <li><span>php</span></li>
                                <li><span>wordpress</span></li>
                                <li><span>React</span></li>
                                <li><span>Javascript</span></li>
                            </ul>
                        </div>
                        <a href="#" class="btn btn-fill">Live Demo</a>
                    </div>
                    <div class="col-sm-7">
                        <div class="mh-portfolio-modal-img">
                            <img src="{{ asset('cv/assets/images/pr-0.jif') }}" alt="" class="img-fluid">
                            <p>All variations are organized separately so you can use / customize the template very
                                easily.</p>
                            <img src="{{ asset('cv/assets/images/pr-1.jif') }}" alt="" class="img-fluid">
                            <p>All variations are organized separately so you can use / customize the template very
                                easily.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           PRICING
        ===================
        -->
    <section class="mh-pricing" id="mh-pricing">
        <div class="">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>{{ __('price') }}</h3>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.3s">
                            <i class="fa fa-calendar"></i>
                            <h4>{{ __('full') }}</h4>
                            <p>{{ __('available') }}</p>
                            <h5>$1500</h5>
                            <ul>
                                <li>{{ __('deve') }}</li>
                                <li>{{ __('langu') }}</li>
                                <li>{{ __('node') }}</li>
                                <li>{{ __('data') }}</li>
                                <li>{{ __('ser') }}</li>

                            </ul>
                            <a href="#" class="btn btn-fill">Hire Me</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.5s">
                            <i class="fa fa-wrench"></i>
                            <h4>{{ __('fixed') }}</h4>
                            <p>{{ __('fixedavailable') }}</p>
                            <h5>$500</h5>
                            <ul>
                                <li>{{ __('deve') }}</li>
                                <li>{{ __('langu') }}</li>
                                <li>{{ __('node') }}</li>
                                <li>{{ __('data') }}</li>
                                <li>{{ __('ser') }}</li>

                            </ul>
                            <a href="#" class="btn btn-fill">Hire Me</a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="mh-pricing dark-bg shadow-2 wow fadeInUp" data-wow-duration="0.8s"
                            data-wow-delay="0.7s">
                            <i class="fa fa-hourglass"></i>
                            <h4>{{ __('hourley') }}</h4>
                            <p>{{ __('hourWork') }}</p>
                            <h5>$50</h5>
                            <ul>
                                <li>{{ __('deve') }}</li>
                                <li>{{ __('langu') }}</li>
                                <li>{{ __('node') }}</li>
                                <li>{{ __('data') }}</li>
                                <li>{{ __('ser') }}</li>
                            </ul>
                            <a href="#" class="btn btn-fill">Hire Me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        ===================
           BLOG
        ===================
        -->
    <section class="mh-blog" id="mh-blog">
        <div class="container">
            <div class="row section-separator">
                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <h3>{{ __('Featured') }}</h3>
                </div>
                {{-- <div class="col-sm-12 col-md-4">
                    <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <img src="{{ asset('cv/assets/images/b-3.png') }}" alt="" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="blog-single.html">A life without the daily traffic jams</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                    <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                </ul>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout</p>
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <img src="{{ asset('cv/assets/images/b-2.png') }}" alt="" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="blog-single.html">Proportion are what’s really needed</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                    <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                </ul>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout</p>
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="mh-blog-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                        <img src="{{ asset('cv/assets/images/b-1.png') }}" alt="" class="img-fluid">
                        <div class="blog-inner">
                            <h2><a href="blog-single.html">Mounts of paper work to remember the way</a></h2>
                            <div class="mh-blog-post-info">
                                <ul>
                                    <li><strong>Post On</strong><a href="#">24.11.19</a></li>
                                    <li><strong>By</strong><a href="#">ThemeSpiders</a></li>
                                </ul>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of
                                a page when looking at its layout</p>
                            <a href="blog-single.html">Read More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>



    <footer class="mh-footer" id="mh-contact">
        <div class="map-image image-bg">
            <div class="container">
                <div class="row section-separator">
                    <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <h3>{{ __('Contact') }}</h3>
                    </div>
                    <div class="col-sm-12 mh-footer-address">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp"
                                    data-wow-duration="0.8s" data-wow-delay="0.3s">
                                    <div class="each-icon">
                                        <i class="fa fa-location-arrow"></i>
                                    </div>
                                    <div class="each-info">
                                        <h4>{{ __('Address') }}</h4>
                                        <address>
                                            {{ __('addres') }}
                                        </address>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp"
                                    data-wow-duration="0.8s" data-wow-delay="0.5s">
                                    <div class="each-icon">
                                        <i class="fa fa-envelope-o"></i>
                                    </div>
                                    <div class="each-info">
                                        <h4>{{ __('Email') }}</h4>
                                        <a href="https://mail.google.com/mail/u/4/#inbox">{{ $about->email }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp"
                                    data-wow-duration="0.8s" data-wow-delay="0.7s">
                                    <div class="each-icon">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <div class="each-info">
                                        <h4>{{ __('Phone') }}</h4>
                                        <a href="#">( +972 ) {{ $about->phone }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s"
                        style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <form id="form" class="single-form quate-form wow fadeInUp" data-toggle="validator"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="row">


                                <div class="col-md-6 col-sm-12">
                                    <input name="first_name" class="contact-name form-control" id="name" type="text"
                                        placeholder="{{ __('FirstNa') }}">
                                </div>

                                <div class="col-md-6 col-sm-12">
                                    <input name="last_name" class="contact-email form-control" id="L_name" type="text"
                                        placeholder="{{ __('LastNa') }}">
                                </div>

                                <div class="col-sm-12">
                                    <input name="email" class="contact-subject form-control" id="email" type="email"
                                        placeholder="{{ __('yourEmail') }}">
                                </div>

                                <div class="col-sm-12">
                                    <textarea name="message" class="contact-message" id="message" rows="6"
                                        placeholder="{{ __('Yourmess') }}"></textarea>
                                </div>

                                <div class="btn-form col-sm-12">
                                    <button type="submit" class="btn btn-fill btn-block" id="form-submit">{{
                                        __('SendMes') }}</button>
                                </div>


                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 mh-copyright wow fadeInUp"
                        style="text-align: center; visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;"
                        data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="social-icon">
                                    <li><a href="https://www.facebook.com/profile.php?id=100006618018904"><i
                                                class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://github.com/AyuobFerwana"><i class="fa fa-github"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com/in/ayuob-ferwana-aa742127a/"><i
                                                class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://twitter.com/ayuobnasser23"><i class="fa fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--
    ==============
    * JS Files *
    ==============
    -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <!-- jQuery -->
    <script src="{{ asset('cv/assets/plugins/js/jquery.min.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('cv/assets/plugins/js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('cv/assets/plugins/js/bootstrap.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('cv/assets/plugins/js/owl.carousel.js') }}"></script>
    <!-- validator -->
    <script src="{{ asset('cv/assets/plugins/js/validator.min.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('cv/assets/plugins/js/wow.min.js') }}"></script>
    <!-- mixin js-->
    <script src="{{ asset('cv/assets/plugins/js/jquery.mixitup.min.js') }}"></script>
    <!-- circle progress-->
    <script src="{{ asset('cv/assets/plugins/js/circle-progress.js') }}"></script>
    <!-- jquery nav -->
    <script src="{{ asset('cv/assets/plugins/js/jquery.nav.js') }}"></script>
    <!-- Fancybox js-->
    <script src="{{ asset('cv/assets/plugins/js/jquery.fancybox.min.js') }}"></script>
    <!-- isotope js-->
    <script src="{{ asset('cv/assets/plugins/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('cv/assets/plugins/js/packery-mode.pkgd.js') }}"></script>

    <!-- Custom Scripts-->
    <script src="{{ asset('cv/assets/js/custom-scripts.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    {{-- Chat / Message --}}

    <script>
        document.getElementById('form').addEventListener('submit', function(event) {
            event.preventDefault();
            let myForm = document.getElementById('form');
            let formData = new FormData(myForm);

            axios.post('{{ route('chatForm') }}', formData)
                .then(function(response) {
                    toastr.success(response.data.message);
                    console.log(response);
                    myForm.reset();
                })
                .catch(function(error) {
                    toastr.error(error.response.data.message);
                    console.log(error);
                });
        });

        function toggleTheme() {
    var body = document.getElementsByTagName("body")[0];
    var darkMode = document.getElementById("dark-mode");
    var lightMode = document.getElementById("light-mode");
    var snowflakeIcon = document.getElementById("snowflake-icon");
    var moonIcon = document.getElementById("moon-icon");

    if (body.classList.contains("dark-vertion")) {
        // Switch to white theme
        body.classList.remove("dark-vertion");
        body.classList.add("white-vertion");
        darkMode.style.display = "none";
        lightMode.style.display = "block";
        snowflakeIcon.style.display = "none";
        moonIcon.style.display = "inline";
    } else {
        // Switch to dark theme
        body.classList.remove("white-vertion");
        body.classList.add("dark-vertion");
        darkMode.style.display = "block";
        lightMode.style.display = "none";
        snowflakeIcon.style.display = "inline";
        moonIcon.style.display = "none";
    }
}

    </script>


    <!-- STYLE SWITCH STYLESHEET ONLY FOR DEMO -->
    <link rel="stylesheet" href="{{ asset('cv/demo/demo.css') }}">
    <script type="text/javascript" src="{{ asset('cv/demo/styleswitcher.js') }}"></script>
    <script type="text/javascript" src="{{ asset('cv/demo/demo.js') }}"></script>
</body>

</html>
