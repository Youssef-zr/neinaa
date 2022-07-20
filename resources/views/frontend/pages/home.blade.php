@extends('frontend._layouts.master')
@section('content')
{{-- Start main content --}}
<div class="main-content">
    {{-- Start section header   --}}
    <section class="section-slider">
        {{-- fixed-tools --}}
        <div class="fixed-tools">
            {{-- start colors palette --}}
            <div class="colors">
                <div class="params-icon">
                    <span>
                        <i class="fa fa-cog fa-3x main-color" title="change site color"></i>
                    </span>
                </div>
                <div class="flat-colors">
                    <ul class="list-unstyled d-flex">
                        <li class="flat-color" data-color="#d63031"></li>
                        <li class="flat-color" data-color="#f39c12"></li>
                        <li class="flat-color" data-color="#05c46b"></li>
                        <li class="flat-color" data-color="#7d5fff"></li>
                        <li class="flat-color" data-color="#00a8ff"></li>
                        <li class="flat-color" data-color="#ff793f"></li>
                    </ul>
                </div>
            </div>
            <div class="social-media">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="fa fa-facebook-square fa-2x mb-3"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square fa-2x mb-3"></i></a></li>
                    <li><a href="#"><i class="fa fa-github-square fa-2x mb-3"></i></a></li>
                    <li><a href="#"><i class="fa fa-google fa-2x"></i></a></li>
                </ul>
                <p id="contact"> {{ trans('site.contact-me') }}</p>
            </div>
        </div>

        {{-- Start Slider --}}
        <div class="slider-content">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"><img src="https://scontent.fcmn5-2.fna.fbcdn.net/v/t1.15752-9/289386281_483164026905800_2728235362699789882_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeE_RUhaK8kgpQ3WXAdcdosE_Z56VlURlG39nnpWVRGUbVdIkOFDTf4gGPM70qviY7Y&_nc_ohc=FTsqTNnRjCkAX_RaW1g&_nc_ht=scontent.fcmn5-2.fna&oh=03_AVJSNw99RqdIIReUkL2yBMc7rO9rm3ABOOaAtM97jLITiw&oe=62DDADC6" alt="" class="img-responsive"></div>
                <div class="swiper-slide"><img src="https://scontent.fcmn5-1.fna.fbcdn.net/v/t1.15752-9/290108411_404933264914356_2224228336078675308_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeG5C5Nal1F5wUFU--G3hc_Q1sGQGfI_lBDWwZAZ8j-UELHFhL4Aa2nzGVBK9ZhfN68&_nc_ohc=CnsoXwmTLaUAX9003x3&_nc_ht=scontent.fcmn5-1.fna&oh=03_AVIBd51PF1cfLdU6-ApeP59hwc0KkbEtQ2YKfSylIWNcGg&oe=62DE9918" alt="" class="img-responsive"></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <div class="slider-caption">
                <div class="caption-title">
                    <h1 class="ml2"> {{ trans('site.slider-caption-h1') }} </h1>
                    <h2 class="ml2"> {{ trans('site.slider-caption-h2') }} </h2>
                </div>
                <p> {{ trans('site.slider-caption-p') }} </p>
                <div class="caption-btns">
                    <a href="#" class="btn btn-info btn-sm" id="go-form"><i class="fa fa-envelope"></i> {{ trans('site.contact-me') }}</a>
                </div>
            </div>
            <div class="slide-bottom">
                <div class="chevrons">
                    <i class="fa fa-chevron-up"></i>
                    <i class="fa fa-chevron-down"></i>
                </div>
                <a href=""><label id="minus"></label></a>
            </div>
        </div>
    </section>
    {{-- End section header   --}}
    
    {{-- Start section about us   --}}
    <section class="section-about-us section">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-7 col-md-12 col-12">
                    <div class="info">
                        <h3 class="head-title text-left mb-2"><span>{{ trans('site.about-me') }}</span></h3>
                        <h4 class="main-title mb-3">{!! trans('site.main-title') !!}</h4>
                        <p class="paragraph">
                            {{ trans('site.about-p') }}
                        </p>
                        <label class="my-name badge badge-info">{{ trans('site.my-name') }}</label>
                        <div class="buttons mt-4">
                            <a href="#" class="btn btn-outline-info btn-sm mr-3" id="btn-portfolio"><i class="fa fa-globe"></i> {{ trans('site.my-portfolio') }}</a>
                            <a href="{{ url('site/files/cv-neinaa.pdf')}}" class="btn btn-info btn-sm"><i class="fa fa-book"></i> {{ trans('site.my-cv') }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-9 col-12">
                    <div class="about-image">
                        <div class="slashes">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        {{-- <img src="{{ url('site/images/me1.jpg') }}" alt="youssef img" class="img-responsive"> --}}
                        <img src="https://scontent.fcmn1-2.fna.fbcdn.net/v/t1.15752-9/291305999_481917790361723_1881282487944916135_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFXKaNolGTMg0HMrvYX-AwVOqHk9G9ufEs6oeT0b258SwCkqydjf_zaZKjXHVawtQI&_nc_ohc=H1O_Ms2l1SUAX-cV6Tl&_nc_ht=scontent.fcmn1-2.fna&oh=03_AVJE3jDA70kYxu3ha-ViQoU11uheQyPmwpFnSn4zuk6heg&oe=62E604B0" alt="youssef neinaa img" class="img-responsive p-2">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section about us   --}}

    {{-- Start section skills  --}}
    <section class="section-skills section bg-second-dark">
        <div class="container">
            <div class="head-title">
                <h3>{{ trans('site.my-skills') }}</h3>
                <p class="sub-title">{{ trans('site.skills-sub-title') }}</p>
            </div>
            <div class="skills-list">
                <div class="row justify-content-center">
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/html.png') }}" class="img-responsive" alt="html5"> --}}
                                <img src="https://scontent.frba4-1.fna.fbcdn.net/v/t1.15752-9/289799706_604978124184268_8039813969115037947_n.png?_nc_cat=109&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGMtliPbPxO0am92WSp4SDrEKc-ScUEyY8Qpz5JxQTJj4URqTX95iyGt0-OynTxbM4&_nc_ohc=W5Ud0bl7EawAX_BJX5Y&_nc_ht=scontent.frba4-1.fna&oh=03_AVLQF253heehpr16Dd4bg2HY9ay1X30zz0GMsZ3SAwkxcA&oe=62DC6569" class="img-responsive" alt="html5">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/css.png') }}" class="img-responsive" alt="css3"> --}}
                                <img src="https://scontent.frba4-2.fna.fbcdn.net/v/t1.15752-9/287423415_520131193237746_1404113261355743322_n.png?_nc_cat=106&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHedaBHbxIn-PU2Zwpmd8uXSWr4SWtrDt9JavhJa2sO3xJFsH1Qec36f-ky5IZfUmU&_nc_ohc=LVFA9i7wV64AX8OKBmA&_nc_ht=scontent.frba4-2.fna&oh=03_AVIovQuRDAu-_0fVsRy5QCrPVvnbruLZvlc5b7NZDA-Z2A&oe=62DC6220" class="img-responsive" alt="css3">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/bootstrap.png') }}" class="img-responsive" alt="bootstrap"> --}}
                                <img src="https://scontent.frba4-1.fna.fbcdn.net/v/t1.15752-9/290155064_1974707529395170_2857484371360127040_n.png?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHZaEhge3H6cOUzFQmX4PppJKDRhP3oojYkoNGE_eiiNj84oRFCaK-VLsBqEB8oXP4&_nc_ohc=YtzFqyIlo98AX-vXVDo&_nc_ht=scontent.frba4-1.fna&oh=03_AVKu9WwPM4PHh6rENOBe_CwyLAQ9lUwNX6DeNvsPLEGQeg&oe=62DB5B68" class="img-responsive" alt="bootstrap">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/js.png') }}" class="img-responsive" alt="javascript"> --}}
                                <img src="https://scontent.frba4-1.fna.fbcdn.net/v/t1.15752-9/290103882_432743682037053_8313456016136634999_n.png?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeF_ltCGcYs8_gImd2eC1H5dp1K7jdRLjsKnUruN1EuOwt_uczIBvhyQaML7ygS0KRs&_nc_ohc=KHMT6IUySqEAX-X-MPd&_nc_ht=scontent.frba4-1.fna&oh=03_AVIZADAR2pOIiq0sTOdoT0DPFpq1W3YEiNth5nk2M62Pwg&oe=62DCEDDB" class="img-responsive" alt="javascript">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/jquery.png') }}" class="img-responsive" alt="jquery"> --}}
                                <img src="https://scontent.frba4-2.fna.fbcdn.net/v/t1.15752-9/289600403_335768585395191_6839548277414600265_n.png?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeH_xi74hRdBnwQ68Knsoi1nOJASihDG_HE4kBKKEMb8cf_y5XoCmIZKSoY8f5PxH38&_nc_ohc=F33wZmnz-wsAX86dCCY&tn=ru-csnngcntoeRWD&_nc_ht=scontent.frba4-2.fna&oh=03_AVJ82d2YeTYjATzMQRQTiDRVxZ17z9kkxFqHJyz5yAI4KA&oe=62DB753B" class="img-responsive" alt="jquery">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/vuejs.png') }}" class="img-responsive" alt="vuejs"> --}}
                                <img src="https://scontent.frba4-2.fna.fbcdn.net/v/t1.15752-9/289366368_439962047684285_2470548178575579817_n.png?_nc_cat=106&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGlTeLexoZpaPUu2U3cR_9E3vHDtzmfju_e8cO3OZ-O79DNw4SHtrsI_Vwa2ypSWd4&_nc_ohc=GfYs17jdPcwAX_emyaT&_nc_ht=scontent.frba4-2.fna&oh=03_AVJcMNtw00vciU01-kl_Xr19JmpyeTmGUvIE2RY5oJD8_g&oe=62DCB0DD" class="img-responsive" alt="vuejs">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/php.png') }}" class="img-responsive" alt="php"> --}}
                                <img src="https://scontent.frba4-2.fna.fbcdn.net/v/t1.15752-9/289749054_5356748481038293_2276613782337204687_n.png?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHIfdw0x5uVFvgilAHPh6XPr08O95WYmDGvTw73lZiYMX6k_gjFnmKwTkZqesG29rk&_nc_ohc=vn4z7CMG3EwAX_NMGkg&_nc_ht=scontent.frba4-2.fna&oh=03_AVIXTN0NR1g3U4r4cbWUg9CmB7Z3sG8U2FfHCu4hefCw3Q&oe=62DBFACB" class="img-responsive" alt="php">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/laravel.png') }}" class="img-responsive" alt="laravel"> --}}
                                <img src="https://scontent.frba4-2.fna.fbcdn.net/v/t1.15752-9/289412214_714318239870937_8328818825756124640_n.png?_nc_cat=107&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeEMC1J_ISGq37AlS4tcfwvm2Bfb9TO9konYF9v1M72SiVrEsIxAQZA0B3TE3z5mHLU&_nc_ohc=JTnwil8F4SUAX9YyjJz&_nc_ht=scontent.frba4-2.fna&oh=03_AVJnHQWvD_KTUDqp8HFdC4d8uLKc9Hflqt_1yTqr5nYnKg&oe=62DC7137" class="img-responsive" alt="laravel">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/mysql.png') }}" class="img-responsive" alt="mysql"> --}}
                                <img src="https://scontent.frba4-1.fna.fbcdn.net/v/t1.15752-9/289497226_1000128570648390_3130923278274347370_n.png?_nc_cat=108&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHLPFwgUj3ReMClQ2KP-wNQKHKkDSJpGgEocqQNImkaAR-q-vbSzZwJiGSDKw0iuk0&_nc_ohc=x7z97hCUIwEAX_551a2&_nc_ht=scontent.frba4-1.fna&oh=03_AVLKRvG3E412y4bFZN_9tNB5aNgTE9iEdnou1LCbpsTr5A&oe=62DAD6AD" class="img-responsive" alt="mysql">
                            </div>
                        </div>
                    </div>
                    {{-- skil item --}}
                    <div class="col-4 col-sm-3 col-md-4 col-lg-2">
                        <div class="skil-item">
                            <div class="image">
                                {{-- <img src="{{ url('site/images/skills/github.png') }}" class="img-responsive" alt="github"> --}}
                                <img src="https://scontent.frba4-1.fna.fbcdn.net/v/t1.15752-9/289118295_446842876887585_1131952613988496928_n.png?_nc_cat=108&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeF_NHZPJye3Bq1hVVAiicZMigmb0LeToGWKCZvQt5OgZRIl-UaMObN6gboBA3f1EPM&_nc_ohc=rQPkEJQawccAX_UAb0o&_nc_ht=scontent.frba4-1.fna&oh=03_AVKTWkgnrAJ2WnVNxN6VOGKqwzpVwbSceKoe_aQsNpJAcQ&oe=62DB907C" class="img-responsive" alt="github">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section skills  --}}
    
    {{-- Start section services   --}}
    <section class="section-services section">
        <div class="container">
            <div class="head-title">
                <h3>{{ trans('site.my-services') }}</h3>
                <p class="sub-title">{{ trans('site.service-sub-title') }}</p>
            </div>
            <div class="services">
                <div class="row">
                    {{-- service item --}}
                    <div class="col-12 col-md-6 relative">
                        <div class="service-item box main-border-effect">
                            <div class="service-icon"><span class="icon"><i class="fa fa-paint-brush"></i></span></div>
                            <div class="service-title"><h3>{{ trans('site.front-end-title') }}</h3></div>
                            <div class="service-content">
                                <p>{{ trans('site.front-end-content') }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- service item --}}
                    <div class="col-12 col-md-6 relative">
                        <div class="service-item box main-border-effect">
                            <div class="service-icon"><span class="icon"><i class="fa fa-code"></i></span></div>
                            <div class="service-title"><h3>{{ trans('site.back-end-title') }}</h3></div>
                            <div class="service-content">
                                <p>{{ trans('site.back-end-content') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section services   --}}

    {{-- Start section portdolio   --}}
    <section class="section-portfolio section bg-second-dark">
        <div class="container">
            <div class="head-title">
                <h3>{{ trans('site.my-portfolio') }}</h3>
                <p class="sub-title">{{ trans('site.portfolio-sub-title') }}</p>
            </div>
            <div class="portfolio-content">
                <ul class="list-unstyled controles">
                    <li><span class="control-link active" data-filter="all">{{ trans('site.web-all') }}</span> <span class="slash">/</span></li>
                    <li><span class="control-link" data-filter=".web-design">{{ trans('site.web-design') }}</span> <span class="slash">/</span></li>
                    <li><span class="control-link" data-filter=".web-developpement">{{ trans('site.web-development') }}</span> <span class="slash"></span></li>
                    {{-- <li><span class="control-link" data-filter=".wordpress">{{ trans('site.wordpress') }}</span></li> --}}
                </ul>
                <div class="projects">
                    <div class="row" id="mixin">
                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-developpement" data-order="0">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.fcmn2-1.fna.fbcdn.net/v/t1.15752-9/294372055_768375264313549_4089390645509136106_n.png?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGpT7L3FxCaOAYjJAJv8MMN8vZ4XY68FbDy9nhdjrwVsOL8mLFmevZczbyr4CNoBZg&_nc_ohc=HEL3l7DCf7YAX-qC6Wa&tn=v_zhXnWK5uMt73yK&_nc_ht=scontent.fcmn2-1.fna&oh=03_AVJpnyBupZpgL9NHrrPsThlmSYD7ZOapnJ9ZqK-70i7k0g&oe=62FC43B5" alt="My Portfolio Site" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>My Portfolio Site</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.fcmn2-1.fna.fbcdn.net/v/t1.15752-9/294293402_489955369510752_7978276229356458133_n.png?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFw1xjylGafDAthD8fXtYpbz0Qy61SgesPPRDLrVKB6w48iX4f3fbVIlisIDf4BZMc&_nc_ohc=hHnWCrmxMTYAX_ajysh&_nc_ht=scontent.fcmn2-1.fna&oh=03_AVKxsKo5dmQcR52rk9Fc9InqLqXxvf2AH5ih709LLLRFKA&oe=62FC764B" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php/Laravel | MySQL" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://portfolio.neinaa.com" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-developpement" data-order="1">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.fcmn2-1.fna.fbcdn.net/v/t1.15752-9/293997279_633412661113674_2478896869583101558_n.png?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeEEtPVIFTVskuh_RhSF9HiUl6qcrwKyGn2XqpyvArIafeIli8_3PehNI9mKZd4g9PE&_nc_ohc=kssd1RFjxKwAX8ubRxa&_nc_ht=scontent.fcmn2-1.fna&oh=03_AVKR2PGjorobgGUXV2nmRLL7bZqhYx4492PBPlb3DzeSwg&oe=62FD543C" alt="Ecommerce / Php->Laravel" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Ecommerce Site</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.fcmn2-2.fna.fbcdn.net/v/t1.15752-9/293786686_831336464431893_7382616480622867846_n.png?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFoZPgBAFTJelx_Aw09wcKFm5pI8uWLIi2bmkjy5YsiLf_PaCgpvvhKcQ0z-8CDjOY&_nc_ohc=WMr2qOdB8kYAX8TOM-e&tn=v_zhXnWK5uMt73yK&_nc_ht=scontent.fcmn2-2.fna&oh=03_AVIOAQGr8Ym6GcdbB8Qcmb9kacjBFxAdf78gi97_h6i2PA&oe=62FD16E8" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php/Laravel | MySQL" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://www.tanjashop.com" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="2">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.fcmn2-2.fna.fbcdn.net/v/t1.15752-9/294156790_1091911218399746_5038349625774686260_n.png?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeG38Rl-rFH62vvjCbmsW35Sy8fdtn_1ePDLx922f_V48E2oMK08CYmD9KP8H0ZKN_4&_nc_ohc=hYKE6hx8OYwAX80O5M0&_nc_ht=scontent.fcmn2-2.fna&oh=03_AVLGx3RoblxkAMeBDaR8gTlngSbn4QtFmVrcajs_n0G0ZQ&oe=62FD2C41" alt="Gym Site" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Gym Site</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.fcmn2-2.fna.fbcdn.net/v/t1.15752-9/294738351_3263346090615171_6327984748806795080_n.png?_nc_cat=108&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFnT5hTdduHajHrv4IskfzaoNrPOLtNOUWg2s84u005RWcNZcFUf_Kp3dE888zje7Y&_nc_ohc=UyHSNZ5NCcsAX-vH7UM&_nc_ht=scontent.fcmn2-2.fna&oh=03_AVLAMtwA6sThJcFKarFv5_-ICtaEfe_PVYPUeVc_nCNt7g&oe=62FD15B7" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery" class="link-item"  title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://train-hard.netlify.app" class="link-item" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="3">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.fcmn2-2.fna.fbcdn.net/v/t1.15752-9/294003897_7591084294299765_4968877237853632322_n.png?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHO0pCaP7z_kyeoOmXIalK1NrcbHU9Y7ag2txsdT1jtqH0oixVLouu56ijeAyKvr9Y&_nc_ohc=yrzDcKO-T7wAX_hTTxN&_nc_ht=scontent.fcmn2-2.fna&oh=03_AVLVY8pinWgLVmjUhNLFGkNMjBHy9Earn_rB8HkeQZ12kQ&oe=62FF8FDC" alt="Digital company" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Digital company</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.fcmn2-2.fna.fbcdn.net/v/t1.15752-9/294022580_726652465306812_3150217135247444137_n.png?_nc_cat=102&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHtsSUx9hkQzn-kDlmsM3LLFR-aeeP7-ZYVH5p54_v5linLfMSPxbdZLumAZXKFUN4&_nc_ohc=Bv_g0splL6AAX8s1Is4&tn=v_zhXnWK5uMt73yK&_nc_ht=scontent.fcmn2-2.fna&oh=03_AVLxnWQBFiVJ-m3cVk6-rkZG0jdwvrK0-npnF0KEb_9qNg&oe=62FD164F" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://corpolink.netlify.app" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="5">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.fcmn2-2.fna.fbcdn.net/v/t1.15752-9/294320594_1072736660012816_3659472259414961538_n.png?_nc_cat=108&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGGQ_sotztXQpJBdrSSkKDw07E3y3uOukfTsTfLe466R1qfLxefxRVyrVb7Lma3Gzs&_nc_ohc=6KnM8Zt_2AoAX-zMQfF&tn=v_zhXnWK5uMt73yK&_nc_ht=scontent.fcmn2-2.fna&oh=03_AVJI8E6xoUgcZ8Zf0U6m0Pw9MQdqFWMDsiNcW9ftj_WDEw&oe=62FDCA86" alt="Dogecoin Currency" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Dogecoin Currency</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.fcmn2-1.fna.fbcdn.net/v/t1.15752-9/294265275_842293073408811_7044784603584093255_n.png?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeH0RyvRbUSspQ1xRPvkoUwqtcvZXR-gZtO1y9ldH6Bm02XaUxQRmeDxT0Zeft9_1zo&_nc_ohc=As5zkTT4aq4AX-X-RDO&_nc_ht=scontent.fcmn2-1.fna&oh=03_AVLSY2HYYiTueDS96pYNsUcp9P9QEl2nHuNiUPRvcSitSQ&oe=62FCAF29" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://snoop-d.netlify.app" class="link-item" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="4">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.fcmn2-1.fna.fbcdn.net/v/t1.15752-9/294383869_357579199900568_3371673039998693000_n.png?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGwkJ7EWpAmL1ZiNuirIUEU2nUg4P1wnC_adSDg_XCcL0Q6b-4w-Hm2jYpd7xp8B-I&_nc_ohc=QLo6CfHBhP0AX-4t9-Z&_nc_ht=scontent.fcmn2-1.fna&oh=03_AVLcs8BcWMs5bXMOsfwOneMFbxi_GCO5h0uZkiIpGlj9Ng&oe=62FF1BA2" alt="Garage Services" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Garage Services</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.fcmn2-2.fna.fbcdn.net/v/t1.15752-9/294631118_915910479348279_8621772196116336955_n.png?_nc_cat=107&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHYt-YYQaQ-r3uvL8hCs2AginEBjeb7TaeKcQGN5vtNp1tFOxSxgj-XjCXVJmJ0a8o&_nc_ohc=_5zn2ZfV1TwAX_4mlQT&_nc_ht=scontent.fcmn2-2.fna&oh=03_AVKi-3nDqi5s3DbReskoTKPL_gvG6hlTjGe0912LYHjrsQ&oe=62FF4029" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://yn-upshift.netlify.app" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-developpement" data-order="4">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.frba2-2.fna.fbcdn.net/v/t1.15752-9/294478988_418895930184691_380982319830172387_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFlLh6NSguTUMIqZHnO6DA57M9Ywf3bggjsz1jB_duCCBG7kdnPmYgbpcnv9bn_HY0&_nc_ohc=SU1v2oM-FLQAX8qEiAv&_nc_ht=scontent.frba2-2.fna&oh=03_AVI44d2tMHqPhFrCNN9zRvGUIPtVD5NYicqnpyQ0u6SXPQ&oe=62FEBEC3" alt="Blog Of News" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Blog Of News</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.frba2-2.fna.fbcdn.net/v/t1.15752-9/294214354_3249645188637424_6773810937136429295_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeF8of5ZS4BoW8gfbE_J896_bUEmY9iP6ydtQSZj2I_rJ5rUWI9Ca_nGlpXqxXV6JXU&_nc_ohc=TrJnkngFFeUAX9xhAB7&_nc_ht=scontent.frba2-2.fna&oh=03_AVL3E0SlqD4o9BRYh7gjzGWr7sOgOm4JbbL426h1p8AO2A&oe=62FC3F6C" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php/Laravel | MySql" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://www.blog.neinaa.com" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="4">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.frba2-2.fna.fbcdn.net/v/t1.15752-9/294164975_743286390239340_2840196921857436477_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFY7KNeSmF9eoP-_Y14Bghi6Iz9qrQKLaPojP2qtAoto2AxBx0rzXRGrLAmGE_Z-UI&_nc_ohc=_FSbGiT15SUAX9AJXdd&_nc_ht=scontent.frba2-2.fna&oh=03_AVId4g1cmZxv1yHnHVhQmuACFdZ3gvSN78c9WzJf7p4u2Q&oe=62FE756E" alt="Iptv Server Subscription" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Iptv Server Subscription</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.frba2-1.fna.fbcdn.net/v/t1.15752-9/293924591_1107162713554154_1624026565836078353_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFFyzJ6UyF8LIyzQarBdwn3V8CQTH_yLoRXwJBMf_IuhNszw1u_wPZ2OCiNtB_pIl4&_nc_ohc=qxha4uhyU9oAX-u-Kh8&_nc_ht=scontent.frba2-1.fna&oh=03_AVKEwbD1fl87-jU1RP6JFYl6uErmc7aZ2riSaTzEqgWbww&oe=62FE4EC5" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php | VueJs" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://www.iptv.neinaa.com" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="4">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.frba2-2.fna.fbcdn.net/v/t1.15752-9/294746254_368662418752057_2992431061558158553_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGGrWAU4okcBbclnSPWIZndUDiLH5aPRr9QOIsflo9Gv09UqI9lYz4p78mMtkekNqo&_nc_ohc=tcJaBXWLthIAX80yX0E&_nc_ht=scontent.frba2-2.fna&oh=03_AVKzn57pJKBPps3qDlsedToZO_7p86KrnugymnoVeFD6QQ&oe=62FDE0C5" alt="Muslim's Fortress" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Muslim's Fortress</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.frba2-1.fna.fbcdn.net/v/t1.15752-9/293954304_1483294055455433_1178000315537680739_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHO16y0-ZzSeYT0l3BAvixfNPdclx6ZFnc091yXHpkWdy5-du2u8OjaSN1_PyTC2_4&_nc_ohc=YyxEBmPZwnkAX8BWQWY&_nc_ht=scontent.frba2-1.fna&oh=03_AVLEf6iaB1tUTjsouxDszaIAnM9D_GlR-bJGiK9YzgbUww&oe=62FED555" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | VueJs | Api" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://www.hissn-muslim.neinaa.com" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- project item --}}
                        <div class="col-6 col-md-4 col-lg-3 mix web-design" data-order="4">
                            <div class="relative">
                                <div class="project-item box main-border-effect">
                                    <div class="image"><img src="https://scontent.frba2-2.fna.fbcdn.net/v/t1.15752-9/293931397_838453157116549_3317561744777965970_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFO9ZAHEjXFHtdUaUI6D3mjhFIXKnfW3kqEUhcqd9beSuDHMWBaTOEt-VhLI_iOack&_nc_ohc=LwE7TyxZTt8AX_5ByD0&_nc_ht=scontent.frba2-2.fna&oh=03_AVKVT3XSbGacdeIVkd3veUnKigXUL4IqSOYg2DBHFFr_RQ&oe=62FB20DA" alt="Accounting Company" class="img-responsive"></div>
                                    <div class="content">
                                        <h6 class="title text-center"><strong>Accounting Company</strong></h6>
                                        <div class="link-items">
                                            <a href="https://scontent.frba2-1.fna.fbcdn.net/v/t1.15752-9/294440581_741879723699587_7991717460310165652_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGjxrPJuaUDJ3TWmAVD8A2rF0E_ErpZnEwXQT8SulmcTLORVOQnSqPxc-QtQ1atBR4&_nc_ohc=AbkVRMB9LOoAX96v8NW&_nc_ht=scontent.frba2-1.fna&oh=03_AVLXhMb36vJEtJ9trmaorkdE6A19kHRVLkdbAeKzLJL5eQ&oe=62FD5563" data-fancybox="gallery" data-caption="Html5 | Css3 | Bootstra 4 | Font-awesome 4 | jQuery | Php | VueJs" class="link-item" title="Show Site Image"><i class="fa fa-search-plus"></i></a>
                                            <a href="https://www.pro-consulting.neinaa.com" class="link-gallary" target="_blank" title="Go To Site"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section portdolio   --}}

    {{-- Start section job   --}}
    <section class="section-get-me-job">
        <div class="container">
            <div class="job-container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <p class="text">
                            {!! trans('site.get-me-text') !!}
                        </p>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="button">
                            <a href="#" id="go-form-1" class="btn btn-outline-light btn-sm"><i class="fa fa-envelope"></i> {{ trans('site.contact-me') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End section job   --}}

    {{-- Start section contact me   --}}
    <section class="section-contact section">
        <div class="container">
            <div class="head-title">
                <h3>{{ trans('site.contact-me') }}</h3>
                <p class="sub-title">{!! trans('site.contact-me-sub-title') !!}</p>
            </div>
            <div class="info-list">
                <div class="row">
                    {{-- info item --}}
                    <div class="col-12 col-md-4">
                        <div class="info-item">
                            <div class="info-icon"><span class="icon"><i class="fa fa-map-marker"></i></span></div>
                            <div class="info-details">
                                <h4>{{ trans('site.location') }}</h4>
                                <p>{{ trans('site.location-details') }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- info item --}}
                    <div class="col-12 col-md-4">
                        <div class="info-item">
                            <div class="info-icon"><span class="icon"><i class="fa fa-envelope"></i></span></div>
                            <div class="info-details">
                                <h4>{{ trans('site.email') }}</h4>
                                <p>{{ trans('site.email-details') }}</p>
                            </div>
                        </div>
                    </div>
                    {{-- info item --}}
                    <div class="col-12 col-md-4">
                        <div class="info-item">
                            <div class="info-icon"><span class="icon"><i class="fa fa-phone"></i></span></div>
                            <div class="info-details">
                                <h4>{{ trans('site.phone') }}</h4>
                                <p>{{ trans('site.phone-details') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- form contact --}}
            <div class="form-submit">

                {{-- message success --}}
                @if (session()->has('success'))
                    <div class="messages mt-5 mb-4">
                        <h4 class="alert bg-success text-white text-capitalize">
                            {!! session()->get('success') !!}
                        </h4>
                    </div>
                @endif

                <form action="{{ route('contact-us') }}" method="post">
                    @csrf
                    <div class="row">

                        {{-- name field --}}
                        <div class="col-12 col-md-6">
                            <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                                <label for="name" class="form-label text-white"> {{ trans('site.name') }} <span class="text-danger"><i class="fa fa-star"></i></span></label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required="">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('name')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- email field --}}
                        <div class="col-12 col-md-6">
                            <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                                <label for="email" class="form-label text-white"> {{ trans('site.email') }} <span class="text-danger"><i class="fa fa-star"></i></span></label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required="">
                               
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('email')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- phone field --}}
                        <div class="col-12 col-md-6">
                            <div class="form-group {{$errors->has('phone') ? 'has-error' : ''}}">
                                <label for="phone" class="form-label text-white"> {{ trans('site.phone') }}</label>
                                <input type="tel" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="06xxxxxxxx">
                                
                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('phone')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- subject field --}}
                        <div class="col-12 col-md-6">
                            <div class="form-group {{$errors->has('subject') ? 'has-error' : ''}}">
                                <label for="subject" class="form-label text-white"> {{ trans('site.subject') }} <span class="text-danger"><i class="fa fa-star"></i></span></label>
                                <input type="tel" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required="">
                                
                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('subject')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- message field --}}
                        <div class="col-12">
                            <div class="form-group {{$errors->has('message') ? 'has-error' : ''}}">
                                <label for="message" class="form-label text-white"> {{ trans('site.message') }} <span class="text-danger"><i class="fa fa-star"></i></span></label>
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" required="">{{ old('message') }}</textarea>
                                
                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('message')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="form-group mt-1">
                                <button type="submit" class="btn btn-info"><i class="fa fa-send mr-1"></i> {{ trans('site.submit-msg') }}</button>
                            </div>
                        </div>
                    </div>
                  
                </form>
            </div>
        </div>
    </section>
    {{-- End section contact me   --}}
    
</div>
{{-- End main content --}}
@endsection

@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
@endpush
    
@push('js')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/3.3.1/mixitup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    {{-- letters effects --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
@endpush

@if ($errors->any())
    @push('js-condition')
        <script>
            $(()=>{
               
                $('html,body').animate({
                    scrollTop: $("form").offset().top - ($('.navigation').height() + 130)
                },700);
                
                const formControls = [...$(".form-control")];
                formControls.forEach((el) => {
                    const $this = $(el);
                    
                    if($this.val() !==''){
                        $this.prev(".form-label").animate(
                            {
                                top: "2px",
                                left: "8px",
                            },
                        200
                      );
                    }
                });
                
            })
        </script>
    @endpush
@endif

@if (session()->has('success'))
    @push('js')
        <script>
            $(()=>{
                $('html,body').animate({
                    scrollTop: $("form").offset().top - ($('.navigation').height() + 180)
                },700);
                setTimeout(() => {
                    $('.messages').fadeOut(700)
                }, 8000);
            })
        </script>
    @endpush
@endif
